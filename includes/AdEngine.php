<?php
/**
 * Server-side client for the shared Skoolyst Ads platform (ads.skoolyst.com).
 * Only this class talks to the ad API — pages/components go through it so
 * the API key never reaches the browser. Expects config/config.php to have
 * already defined ADS_API_BASE, ADS_API_KEY and ADS_CACHE_TTL.
 */
class AdEngine
{
    private static function cacheFile(string $placementCode): string
    {
        return sys_get_temp_dir() . '/adengine_' . md5($placementCode) . '.json';
    }

    public static function getAd(string $placementCode): ?array
    {
        if ($placementCode === '' || ADS_API_BASE === '' || ADS_API_KEY === '') {
            return null;
        }

        $cacheFile = self::cacheFile($placementCode);
        if (is_file($cacheFile)) {
            $cached = json_decode((string) file_get_contents($cacheFile), true);
            if (is_array($cached) && isset($cached['cached_at']) && (time() - $cached['cached_at']) < ADS_CACHE_TTL) {
                return $cached['ad'];
            }
        }

        $url = rtrim(ADS_API_BASE, '/') . '/ads/serve?placement=' . urlencode($placementCode);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer ' . ADS_API_KEY]);
        // The ad server occasionally takes several seconds to respond; a short
        // timeout here would produce false "no ad" results under normal load.
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);

        $response = curl_exec($ch);
        $errno = curl_errno($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // Transport-level failure (timeout/DNS/curl error): never cache this,
        // so the next request tries the network again instead of being stuck
        // on a cached failure for the full TTL.
        if ($errno !== 0 || $status < 200 || $status >= 300) {
            return null;
        }

        $decoded = json_decode((string) $response, true);
        $ad = (is_array($decoded) && !empty($decoded['success']) && array_key_exists('ad', $decoded['data'] ?? []))
            ? $decoded['data']['ad']
            : null;

        // A successful response is cacheable whether or not it contains an ad.
        file_put_contents($cacheFile, json_encode(['cached_at' => time(), 'ad' => $ad]));

        return $ad;
    }

    public static function imageUrl(?string $path): ?string
    {
        if (!$path) {
            return null;
        }
        if (preg_match('#^https?://#i', $path)) {
            return $path;
        }
        $base = preg_replace('#/api(/v\d+)?/?$#i', '', rtrim(ADS_API_BASE, '/'));
        return $base . '/' . ltrim($path, '/');
    }

    public static function trackImpression(string $placementCode, ?string $adId = null): void
    {
        self::track('impression', $placementCode, $adId);
    }

    public static function trackClick(string $placementCode, ?string $adId = null): void
    {
        self::track('click', $placementCode, $adId);
    }

    private static function track(string $event, string $placementCode, ?string $adId): void
    {
        if ($placementCode === '' || ADS_API_BASE === '' || ADS_API_KEY === '') {
            return;
        }

        $ch = curl_init(rtrim(ADS_API_BASE, '/') . '/ads/track');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
            'event' => $event,
            'placement' => $placementCode,
            'ad_id' => $adId,
        ]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . ADS_API_KEY,
            'Content-Type: application/json',
        ]);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 8);
        curl_exec($ch);
        curl_close($ch);
    }
}

<?php
/**
 * TEMPORARY debug route for the Skoolyst Ads integration.
 * Open in browser, read the verdict, then DELETE this file.
 */

require __DIR__ . '/config/config.php';

header('Content-Type: text/plain');

echo "=== 1. Runtime constants (as loaded by config/config.php) ===\n";
echo "ADS_API_BASE: " . ADS_API_BASE . "\n";
echo "ADS_API_KEY (first 12 chars): " . substr(ADS_API_KEY, 0, 12) . "... (" . strlen(ADS_API_KEY) . " chars total)\n";
echo "ADS_CACHE_TTL: " . ADS_CACHE_TTL . "s\n";
echo "ADS_PLACEMENT_HOME_TOP: " . ADS_PLACEMENT_HOME_TOP . "\n";
echo "ADS_PLACEMENT_DOC_GUIDE: " . ADS_PLACEMENT_DOC_GUIDE . "\n";

if (ADS_API_BASE === '' || ADS_API_KEY === '') {
    echo "\n=== Verdict ===\n";
    echo "ADS_API_BASE / ADS_API_KEY are empty in .env -> fill them in before testing further.\n";
    exit;
}

foreach (['ADS_PLACEMENT_HOME_TOP' => ADS_PLACEMENT_HOME_TOP, 'ADS_PLACEMENT_DOC_GUIDE' => ADS_PLACEMENT_DOC_GUIDE] as $label => $placementCode) {
    echo "\n\n========== $label ($placementCode) ==========\n";

    if ($placementCode === '') {
        echo "Placement code is empty in .env -> skipping.\n";
        continue;
    }

    echo "\n=== 2. Direct request with generous timeout (10s connect / 20s total) ===\n";
    $url = rtrim(ADS_API_BASE, '/') . '/ads/serve?placement=' . urlencode($placementCode);
    echo "URL: $url\n";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer ' . ADS_API_KEY]);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);

    $start = microtime(true);
    $response = curl_exec($ch);
    $elapsed = round(microtime(true) - $start, 2);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);
    $errno = curl_errno($ch);
    curl_close($ch);

    echo "Took: {$elapsed}s\n";
    echo "HTTP status: $status\n";
    echo "curl errno: $errno\n";
    echo "curl error: " . ($error ?: '(none)') . "\n";

    echo "\n=== 3. Raw response body ===\n";
    echo $response . "\n";

    echo "\n=== 4. Decoded ===\n";
    $decoded = json_decode((string) $response, true);
    var_dump($decoded);

    // Clear any stale cached result (e.g. a cached null from an earlier
    // misconfiguration) before calling getAd() so this test reflects the
    // current live state, not a leftover cache file.
    $cacheFile = sys_get_temp_dir() . '/adengine_' . md5($placementCode) . '.json';
    if (is_file($cacheFile)) {
        unlink($cacheFile);
        echo "\n(Cleared stale cache file: $cacheFile)\n";
    }

    echo "\n=== 5. What AdEngine::getAd() returns (cache cleared) ===\n";
    var_dump(AdEngine::getAd($placementCode));

    echo "\n=== 6. Verdict ===\n";
    if ($errno !== 0) {
        echo "Still fails even with 20s timeout -> confirms a real, non-timeout network problem (not just 'too slow'). Re-check firewall/antivirus.\n";
    } elseif ($status >= 200 && $status < 300) {
        if (is_array($decoded) && !empty($decoded['success']) && array_key_exists('ad', $decoded['data'] ?? [])) {
            if ($decoded['data']['ad'] === null) {
                echo "API call succeeded but returned ad: null -> no ACTIVE ad is currently matched to this placement code for this app. Check Admin -> Connected Apps on ads.skoolyst.com, and that an ad is active + in date range for it.\n";
            } else {
                echo "SUCCESS - real ad data returned.\n";
            }
        } else {
            echo "2xx response but missing 'success'/'data.ad' keys - response shape differs from what AdEngine.php expects.\n";
        }
    } else {
        echo "Non-2xx status - check the raw body above for the API's error message.\n";
    }
}

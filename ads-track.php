<?php
/**
 * Browser-facing relay for ad impression/click events. The browser only
 * ever talks to this endpoint — never to ads.skoolyst.com directly.
 */
require __DIR__ . '/config/config.php';

$event = $_GET['event'] ?? '';
$placement = $_GET['placement'] ?? '';
$adId = $_GET['ad_id'] ?? null;

if ($event === 'impression' && $placement !== '') {
    AdEngine::trackImpression($placement, $adId);
    header('Content-Type: image/gif');
    header('Cache-Control: no-store');
    echo base64_decode('R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBTAA7');
    exit;
}

if ($event === 'click' && $placement !== '') {
    AdEngine::trackClick($placement, $adId);

    $redirect = $_GET['redirect'] ?? '';
    // Guard against malformed/double-concatenated URLs from the ad payload
    // (seen occasionally, e.g. "https://x.inhttps://y.com") before redirecting.
    if ($redirect !== '' && filter_var($redirect, FILTER_VALIDATE_URL) && substr_count($redirect, '://') === 1) {
        header('Location: ' . $redirect);
        exit;
    }
}

http_response_code(204);

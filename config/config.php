<?php
/**
 * Minimal .env loader. This site has no Composer/dotenv dependency, so
 * ADS_* values are parsed straight from .env (git-ignored) into constants.
 */
$__envFile = __DIR__ . '/../.env';
$__env = [];
if (is_file($__envFile)) {
    foreach (file($__envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $__line) {
        $__line = trim($__line);
        if ($__line === '' || $__line[0] === '#' || !str_contains($__line, '=')) {
            continue;
        }
        [$__key, $__value] = explode('=', $__line, 2);
        $__env[trim($__key)] = trim($__value);
    }
}
unset($__envFile, $__line, $__key, $__value);

define('ADS_API_BASE', $__env['ADS_API_BASE'] ?? '');
define('ADS_API_KEY', $__env['ADS_API_KEY'] ?? '');
define('ADS_CACHE_TTL', (int) ($__env['ADS_CACHE_TTL'] ?? 30));
define('ADS_PLACEMENT_HOME_TOP', $__env['ADS_PLACEMENT_HOME_TOP'] ?? '');
define('ADS_PLACEMENT_DOC_GUIDE', $__env['ADS_PLACEMENT_DOC_GUIDE'] ?? '');

unset($__env);

require_once __DIR__ . '/../includes/AdEngine.php';

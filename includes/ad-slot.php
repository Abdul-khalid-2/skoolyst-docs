<?php
/**
 * Ad slot component. Set $adPlacementCode to one of the ADS_PLACEMENT_*
 * constants, then require this file. Renders nothing if no ad is available.
 *
 *   $adPlacementCode = ADS_PLACEMENT_HOME_TOP;
 *   require __DIR__ . '/includes/ad-slot.php';
 */
if (!defined('ADS_API_BASE')) {
    require_once __DIR__ . '/../config/config.php';
}

$__ad = AdEngine::getAd($adPlacementCode ?? '');

if ($__ad):
    $__clickUrl = $__ad['click_url'] ?? '';
    $__validClick = $__clickUrl !== ''
        && filter_var($__clickUrl, FILTER_VALIDATE_URL)
        && substr_count($__clickUrl, '://') === 1;
    $__trackedClickUrl = '/ads-track?event=click&placement=' . rawurlencode($adPlacementCode)
        . '&ad_id=' . rawurlencode((string) ($__ad['id'] ?? ''))
        . '&redirect=' . rawurlencode($__validClick ? $__clickUrl : '#');
    $__imageUrl = AdEngine::imageUrl($__ad['image_path'] ?? null);
?>
  <div class="ad-slot" data-placement="<?= htmlspecialchars($adPlacementCode) ?>">
    <span class="ad-slot-badge">Sponsored</span>
    <a href="<?= htmlspecialchars($__trackedClickUrl) ?>" target="_blank" rel="noopener sponsored" class="ad-slot-link">
      <?php if ($__imageUrl): ?>
        <span class="ad-slot-image-wrap">
          <img src="<?= htmlspecialchars($__imageUrl) ?>" alt="<?= htmlspecialchars($__ad['title'] ?? 'Advertisement') ?>" class="ad-slot-image" loading="lazy" />
        </span>
      <?php endif; ?>
      <span class="ad-slot-body">
        <?php if (!empty($__ad['title'])): ?>
          <span class="ad-slot-title" dir="auto"><?= htmlspecialchars($__ad['title']) ?></span>
        <?php endif; ?>
        <?php if (!empty($__ad['description'])): ?>
          <span class="ad-slot-desc" dir="auto"><?= htmlspecialchars($__ad['description']) ?></span>
        <?php endif; ?>
        <?php if (!empty($__ad['cta_text'])): ?>
          <span class="ad-slot-cta-btn"><?= htmlspecialchars($__ad['cta_text']) ?></span>
        <?php endif; ?>
      </span>
    </a>
  </div>
  <img src="/ads-track?event=impression&placement=<?= rawurlencode($adPlacementCode) ?>&ad_id=<?= rawurlencode((string) ($__ad['id'] ?? '')) ?>" alt="" width="1" height="1" style="position:absolute;left:-9999px;" aria-hidden="true" />
<?php
endif;
unset($__ad, $__clickUrl, $__validClick, $__trackedClickUrl, $__imageUrl);

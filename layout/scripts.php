<?php
// Shared scripts, loaded once at the end of every public page (before the footer).
// Same docs-aware prefix as head.php, so clean /docs/ URLs still find assets/.
$assetBase = str_contains(str_replace('\\', '/', $_SERVER['PHP_SELF'] ?? ''), '/docs/') ? '../' : '';
?>
<script type="module" src="<?= $assetBase ?>assets/js/data.js"></script>
<script type="module" src="<?= $assetBase ?>assets/js/layout.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

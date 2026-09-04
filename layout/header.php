<?php
$layoutBase = str_contains(str_replace('\\', '/', $_SERVER['PHP_SELF'] ?? ''), '/docs/') ? '../' : '';
$currentPage = basename($_SERVER['PHP_SELF'] ?? 'index.php');
// Keep the top header focused on the four most important destinations.
// Secondary pages remain available through the sidebar, footer, and search.
$mainNav = [
    // Keep the primary header navigation focused on the core documentation flow.
    // Secondary pages remain available through the sidebar, footer, search and in-page links.
    ['label' => 'Documentation', 'href' => 'index.php'],
    ['label' => 'Getting Started', 'href' => 'getting-started.php'],
    ['label' => 'Overview', 'href' => 'overview.php'],
    ['label' => 'Products', 'href' => 'products.php'],
    ['label' => 'Guides', 'href' => 'guides.php'],
    ['label' => 'Features', 'href' => 'features.php'],
    // ['label' => 'Versions', 'href' => 'versions.php'],
    // ['label' => 'Release Notes', 'href' => 'release-notes.php'],
    // ['label' => 'News', 'href' => 'news.php'],
    // ['label' => 'FAQ', 'href' => 'faq.php'],
    // ['label' => 'API', 'href' => 'developers.php'],
    // ['label' => 'About', 'href' => 'about.php'],
];
?>
<a href="#main-content" class="skip-link">Skip to main content</a>
<header class="site-header" role="banner">
  <div class="header-inner">
    <a href="<?= $layoutBase ?>index.php" class="logo-link" aria-label="Skoolyst Documentation Home">
      <span class="logo-mark">S</span>
      <span class="logo-text">Skoolyst<span class="docs-label">Documentation</span></span>
    </a>
    <nav class="header-nav" aria-label="Primary">
      <?php foreach ($mainNav as $item): ?>
        <a class="nav-link<?= $item['href'] === $currentPage ? ' active' : '' ?>" href="<?= $layoutBase . $item['href'] ?>"><?= htmlspecialchars($item['label']) ?></a>
      <?php endforeach; ?>
    </nav>
    <div class="header-actions">
      <div class="version-selector">
        <span class="version-label">Version</span>
        <select id="version-select" aria-label="Documentation version">
          <option value="latest">Current</option>
          <option value="teachers-v1">Teachers v1</option>
          <option value="ads-v1">Ads v1</option>
        </select>
      </div>
      <button class="search-trigger" id="search-trigger" aria-label="Search documentation">
        <span class="header-search-icon" aria-hidden="true">⌕</span>
        <span class="search-placeholder">Search docs...</span>
        <kbd>Ctrl K</kbd>
      </button>
      <button class="mobile-toggle" id="mobile-toggle" aria-label="Toggle navigation menu" aria-expanded="false">
        <span aria-hidden="true">☰</span>
      </button>
    </div>
  </div>
</header>

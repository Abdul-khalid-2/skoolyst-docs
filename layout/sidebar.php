<?php
$layoutBase = str_contains(str_replace('\\', '/', $_SERVER['PHP_SELF'] ?? ''), '/docs/') ? '../' : '';
$currentPage = basename($_SERVER['PHP_SELF'] ?? 'index.php');
$sidebarSections = [
    ['heading' => 'Getting Started', 'items' => [
        ['label' => 'Introduction', 'href' => 'getting-started.php'],
        ['label' => 'What is Skoolyst?', 'href' => 'overview.php'],
        ['label' => 'Product Ecosystem', 'href' => 'products.php'],
    ]],
    ['heading' => 'Documentation', 'items' => [
        ['label' => 'Guides', 'href' => 'guides.php'],
        ['label' => 'Features', 'href' => 'features.php'],
        ['label' => 'Versions', 'href' => 'versions.php'],
        ['label' => 'Release Notes', 'href' => 'release-notes.php'],
        ['label' => 'News & Updates', 'href' => 'news.php'],
        ['label' => 'FAQ', 'href' => 'faq.php'],
    ]],
    ['heading' => 'Resources', 'items' => [
        ['label' => 'API / Developers', 'href' => 'developers.php'],
        ['label' => 'About Skoolyst', 'href' => 'about.php'],
    ]],
];
?>
<aside class="doc-sidebar" id="doc-sidebar" aria-label="Documentation navigation">
  <?php foreach ($sidebarSections as $section): ?>
    <div class="sidebar-section">
      <div class="sidebar-heading"><?= htmlspecialchars($section['heading']) ?></div>
      <ul class="sidebar-nav">
        <?php foreach ($section['items'] as $item): ?>
          <li><a href="<?= $layoutBase . $item['href'] ?>" class="<?= $item['href'] === $currentPage ? 'active' : '' ?>"><?= htmlspecialchars($item['label']) ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endforeach; ?>
</aside>
<div class="sidebar-backdrop" id="sidebar-backdrop"></div>

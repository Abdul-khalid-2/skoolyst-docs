<?php
$layoutBase = str_contains(str_replace('\\', '/', $_SERVER['PHP_SELF'] ?? ''), '/docs/') ? '../' : '';
require __DIR__ . '/scripts.php';
require __DIR__ . '/skoolyst-apps.php';
?>
<footer class="site-footer" role="contentinfo">
  <div class="footer-inner">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="<?= $layoutBase ?: "./" ?>" class="logo-link" style="margin-bottom:0.5rem">
          <span class="logo-mark">S</span>
          <span class="logo-text">Skoolyst<span class="docs-label">Documentation</span></span>
        </a>
        <p>Official documentation for the Skoolyst educational technology ecosystem.</p>
      </div>
      <div><h4>Documentation</h4><ul>
        <li><a href="<?= $layoutBase ?>getting-started">Getting Started</a></li>
        <li><a href="<?= $layoutBase ?>overview">Overview</a></li>
        <li><a href="<?= $layoutBase ?>guides">Guides</a></li>
        <li><a href="<?= $layoutBase ?>features">Features</a></li>
      </ul></div>
      <div><h4>Resources</h4><ul>
        <li><a href="<?= $layoutBase ?>versions">Versions</a></li>
        <li><a href="<?= $layoutBase ?>release-notes">Release Notes</a></li>
        <li><a href="<?= $layoutBase ?>news">News</a></li>
        <li><a href="<?= $layoutBase ?>faq">FAQ</a></li>
      </ul></div>
      <div><h4>Ecosystem</h4><ul>
        <li><a href="<?= $layoutBase ?>products">Products</a></li>
        <li><a href="<?= $layoutBase ?>developers">API / Developers</a></li>
        <li><a href="<?= $layoutBase ?>about">About</a></li>
      </ul></div>
    </div>
    <div class="footer-bottom">
      <span>&copy; 2024-2026 Skoolyst. All rights reserved.</span>
      <span>docs.skoolyst.com</span>
    </div>
  </div>
</footer>
<button class="back-to-top" id="back-to-top" aria-label="Back to top">↑</button>

<?php $layoutBase = str_contains(str_replace('\\', '/', $_SERVER['PHP_SELF'] ?? ''), '/docs/') ? '../' : ''; ?>
<footer class="site-footer" role="contentinfo">
  <div class="footer-inner">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="<?= $layoutBase ?>index.php" class="logo-link" style="margin-bottom:0.5rem">
          <span class="logo-mark">S</span>
          <span class="logo-text">Skoolyst<span class="docs-label">Documentation</span></span>
        </a>
        <p>Official documentation for the Skoolyst educational technology ecosystem.</p>
      </div>
      <div><h4>Documentation</h4><ul>
        <li><a href="<?= $layoutBase ?>getting-started.php">Getting Started</a></li>
        <li><a href="<?= $layoutBase ?>overview.php">Overview</a></li>
        <li><a href="<?= $layoutBase ?>guides.php">Guides</a></li>
        <li><a href="<?= $layoutBase ?>features.php">Features</a></li>
      </ul></div>
      <div><h4>Resources</h4><ul>
        <li><a href="<?= $layoutBase ?>versions.php">Versions</a></li>
        <li><a href="<?= $layoutBase ?>release-notes.php">Release Notes</a></li>
        <li><a href="<?= $layoutBase ?>news.php">News</a></li>
        <li><a href="<?= $layoutBase ?>faq.php">FAQ</a></li>
      </ul></div>
      <div><h4>Ecosystem</h4><ul>
        <li><a href="<?= $layoutBase ?>products.php">Products</a></li>
        <li><a href="<?= $layoutBase ?>developers.php">API / Developers</a></li>
        <li><a href="<?= $layoutBase ?>about.php">About</a></li>
      </ul></div>
    </div>
    <div class="footer-bottom">
      <span>&copy; 2024-2026 Skoolyst. All rights reserved.</span>
      <span>docs.skoolyst.com</span>
    </div>
  </div>
</footer>
<button class="back-to-top" id="back-to-top" aria-label="Back to top">↑</button>

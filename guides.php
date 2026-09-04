<?php
// Static PHP view. Backend logic can be introduced later without changing the page structure.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Guides | Skoolyst Documentation</title>
  <meta name="description" content="Documentation guides organized by category — Getting Started, Schools, Stores, Media, MCQs, Accounts, Content Management, Platform Usage, Administration and Troubleshooting." />
  <link rel="canonical" href="https://docs.skoolyst.com/guides.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Guides | Skoolyst Documentation" />
  <meta property="og:description" content="Documentation guides organized by category and product." />
  <meta property="og:url" content="https://docs.skoolyst.com/guides.php" />
  <meta property="og:site_name" content="Skoolyst Documentation" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="Guides | Skoolyst Documentation" />
  <meta name="twitter:description" content="Documentation guides organized by category and product." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/style.css" rel="stylesheet" />
</head>
<body>
<?php
$isHomePage = false;
require __DIR__ . '/layout/header.php';
require __DIR__ . '/layout/sidebar.php';
require __DIR__ . '/layout/search.php';
?>

  <main id="main-content">
    <article class="doc-article">
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <a href="index.php">Home</a>
        <span class="breadcrumb-sep">/</span>
        <span class="breadcrumb-current">Guides</span>
      </nav>

      <h1>Guides</h1>
      <p class="lead">Browse documentation guides organized by category. Detailed guides will be added as the platform develops.</p>

      <h2 id="getting-started">Getting Started</h2>
      <div class="row g-3">
        <div class="col-md-6">
          <a href="getting-started.php" class="card-base guide-card">
            <span class="guide-category">Getting Started</span>
            <h3 class="guide-title">Introduction to Skoolyst</h3>
            <p class="guide-desc">Learn what Skoolyst is and how the ecosystem is organized.</p>
            <span class="guide-arrow">Read guide &rarr;</span>
          </a>
        </div>
        <div class="col-md-6">
          <a href="overview.php" class="card-base guide-card">
            <span class="guide-category">Getting Started</span>
            <h3 class="guide-title">Understanding the Ecosystem</h3>
            <p class="guide-desc">Overview of the Skoolyst ecosystem, vision and architecture.</p>
            <span class="guide-arrow">Read guide &rarr;</span>
          </a>
        </div>
      </div>

      <h2 id="schools">Schools</h2>
      <div class="row g-3">
        <div class="col-md-6">
          <a href="docs/guide-schools.php" class="card-base guide-card">
            <span class="guide-category">Schools</span>
            <h3 class="guide-title">Schools Listing Module</h3>
            <p class="guide-desc">How to use the Schools listing module within the Skoolyst application.</p>
            <span class="guide-arrow">Read guide &rarr;</span>
          </a>
        </div>
      </div>

      <h2 id="stores">Stores</h2>
      <div class="row g-3">
        <div class="col-md-6">
          <a href="docs/guide-stores.php" class="card-base guide-card">
            <span class="guide-category">Stores</span>
            <h3 class="guide-title">Stores Module</h3>
            <p class="guide-desc">How to use the Stores module for educational products and materials.</p>
            <span class="guide-arrow">Read guide &rarr;</span>
          </a>
        </div>
      </div>

      <h2 id="media">Media</h2>
      <div class="row g-3">
        <div class="col-md-6">
          <a href="docs/guide-media.php" class="card-base guide-card">
            <span class="guide-category">Media</span>
            <h3 class="guide-title">Media Module</h3>
            <p class="guide-desc">How to use the Media module for educational content.</p>
            <span class="guide-arrow">Read guide &rarr;</span>
          </a>
        </div>
      </div>

      <h2 id="mcqs">MCQs</h2>
      <div class="row g-3">
        <div class="col-md-6">
          <a href="docs/guide-mcqs.php" class="card-base guide-card">
            <span class="guide-category">MCQs</span>
            <h3 class="guide-title">MCQs Module</h3>
            <p class="guide-desc">How to use the MCQs module for practice and assessment.</p>
            <span class="guide-arrow">Read guide &rarr;</span>
          </a>
        </div>
      </div>

      <h2 id="ads">Ads</h2>
      <div class="row g-3">
        <div class="col-md-6">
          <a href="docs/guide-ads.php" class="card-base guide-card">
            <span class="guide-category">Ads</span>
            <h3 class="guide-title">Skoolyst Ads</h3>
            <p class="guide-desc">How the advertising engine works — placements, ad moderation and the API connected apps use.</p>
            <span class="guide-arrow">Read guide &rarr;</span>
          </a>
        </div>
      </div>

      <h2 id="accounts">Accounts</h2>
      <div class="row g-3">
        <div class="col-md-6">
          <div class="card-base guide-card">
            <span class="guide-category">Accounts</span>
            <h3 class="guide-title">Account Management</h3>
            <p class="guide-desc">Guide for creating and managing Skoolyst accounts.</p>
            <span class="guide-arrow" style="color:var(--text-muted)">Documentation will be added soon</span>
          </div>
        </div>
      </div>

      <h2 id="content-management">Content Management</h2>
      <div class="row g-3">
        <div class="col-md-6">
          <div class="card-base guide-card">
            <span class="guide-category">Content Management</span>
            <h3 class="guide-title">Managing Educational Content</h3>
            <p class="guide-desc">How to create, organize and manage content across Skoolyst modules.</p>
            <span class="guide-arrow" style="color:var(--text-muted)">Documentation will be added soon</span>
          </div>
        </div>
      </div>

      <h2 id="platform-usage">Platform Usage</h2>
      <div class="row g-3">
        <div class="col-md-6">
          <div class="card-base guide-card">
            <span class="guide-category">Platform Usage</span>
            <h3 class="guide-title">Using the Skoolyst Platform</h3>
            <p class="guide-desc">General guidance for navigating and using the Skoolyst platform.</p>
            <span class="guide-arrow" style="color:var(--text-muted)">Documentation will be added soon</span>
          </div>
        </div>
      </div>

      <h2 id="administration">Administration</h2>
      <div class="row g-3">
        <div class="col-md-6">
          <div class="card-base guide-card">
            <span class="guide-category">Administration</span>
            <h3 class="guide-title">Platform Administration</h3>
            <p class="guide-desc">Administrative guides for managing the Skoolyst platform.</p>
            <span class="guide-arrow" style="color:var(--text-muted)">Documentation will be added soon</span>
          </div>
        </div>
      </div>

      <h2 id="troubleshooting">Troubleshooting</h2>
      <div class="row g-3">
        <div class="col-md-6">
          <div class="card-base guide-card">
            <span class="guide-category">Troubleshooting</span>
            <h3 class="guide-title">Common Issues &amp; Solutions</h3>
            <p class="guide-desc">Troubleshooting guides for resolving common problems.</p>
            <span class="guide-arrow" style="color:var(--text-muted)">Documentation will be added soon</span>
          </div>
        </div>
      </div>

      <nav class="doc-prev-next" aria-label="Pagination">
        <a href="products.php">
          <span class="pn-label">&larr; Previous</span>
          <span class="pn-title">Product Ecosystem</span>
        </a>
        <a href="features.php" class="next">
          <span class="pn-label">Next &rarr;</span>
          <span class="pn-title">Features</span>
        </a>
      </nav>
    </article>
  </main>
  <script type="module" src="/assets/js/data.js"></script>
  <script type="module" src="/assets/js/layout.js"></script>

<?php require __DIR__ . '/layout/footer.php'; ?>
</body>
</html>

<?php
// Static PHP view. Backend logic can be introduced later without changing the page structure.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Media Module Guide | Skoolyst Documentation</title>
  <meta name="description" content="How to use the Media module for educational content within the Skoolyst application." />
  <link rel="canonical" href="https://docs.skoolyst.com/docs/guide-media.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Media Module Guide | Skoolyst Documentation" />
  <meta property="og:description" content="How to use the Media module within the Skoolyst application." />
  <meta property="og:url" content="https://docs.skoolyst.com/docs/guide-media.php" />
  <meta property="og:site_name" content="Skoolyst Documentation" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="Media Module Guide | Skoolyst Documentation" />
  <meta name="twitter:description" content="How to use the Media module within the Skoolyst application." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/style.css" rel="stylesheet" />
</head>
<body>
<?php
$isHomePage = false;
require __DIR__ . '/../layout/header.php';
require __DIR__ . '/../layout/sidebar.php';
require __DIR__ . '/../layout/search.php';
?>

  <main id="main-content">
    <article class="doc-article">
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <a href="../index.php">Home</a>
        <span class="breadcrumb-sep">/</span>
        <a href="../guides.php">Guides</a>
        <span class="breadcrumb-sep">/</span>
        <span class="breadcrumb-current">Media</span>
      </nav>

      <h1>Media Module</h1>
      <p class="lead">The Media module serves as an educational media hub for videos, audio and visual learning content within the Skoolyst platform.</p>

      <h2 id="overview">Overview</h2>
      <p>The Media module is one of the four core modules within the main Skoolyst application. It is designed to host and organize educational media content, making it accessible to students, teachers and parents.</p>
      <p><span class="status-badge status-development">In Development</span></p>

      <h2 id="current-capabilities">Current Capabilities</h2>
      <p>The Media module is currently in development. The following capabilities are planned:</p>
      <ul>
        <li>Browse a library of educational media content</li>
        <li>Search and filter media by type and category</li>
        <li>View and play media content within the platform</li>
      </ul>
      <p>Detailed documentation for each capability will be added as these features are developed and released.</p>

      <h2 id="future-plans">Future Plans</h2>
      <div class="info-banner">
        <span class="info-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
        </span>
        <div class="info-content">
          <p>Media is planned to become a separate application under <code>media.skoolyst.com</code>. Currently, it operates as a module within the main Skoolyst application. The separate subdomain represents the planned future architecture.</p>
        </div>
      </div>

      <h2 id="related">Related Documentation</h2>
      <ul>
        <li><a href="../getting-started.php">Getting Started</a></li>
        <li><a href="../features.php#media">Media Features</a></li>
        <li><a href="../products.php">Product Ecosystem</a></li>
      </ul>

      <nav class="doc-prev-next" aria-label="Pagination">
        <a href="guide-stores.php">
          <span class="pn-label">&larr; Previous</span>
          <span class="pn-title">Stores Module</span>
        </a>
        <a href="guide-mcqs.php" class="next">
          <span class="pn-label">Next &rarr;</span>
          <span class="pn-title">MCQs Module</span>
        </a>
      </nav>
    </article>
  </main>
  <script type="module" src="/assets/js/data.js"></script>
  <script type="module" src="/assets/js/layout.js"></script>

<?php require __DIR__ . '/../layout/footer.php'; ?>
</body>
</html>

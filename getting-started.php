<?php
// Static PHP view. Backend logic can be introduced later without changing the page structure.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Getting Started | Skoolyst Documentation</title>
  <meta name="description" content="A beginner-friendly guide to understanding the Skoolyst ecosystem, its main application, modules and future products." />
  <link rel="canonical" href="https://docs.skoolyst.com/getting-started.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Getting Started | Skoolyst Documentation" />
  <meta property="og:description" content="A beginner-friendly guide to understanding the Skoolyst ecosystem." />
  <meta property="og:url" content="https://docs.skoolyst.com/getting-started.php" />
  <meta property="og:site_name" content="Skoolyst Documentation" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="Getting Started | Skoolyst Documentation" />
  <meta name="twitter:description" content="A beginner-friendly guide to understanding the Skoolyst ecosystem." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/style.css" rel="stylesheet" />
</head>
<body>
  <main id="main-content">
    <article class="doc-article">
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <a href="index.php">Home</a>
        <span class="breadcrumb-sep">/</span>
        <span class="breadcrumb-current">Getting Started</span>
      </nav>

      <h1>Getting Started</h1>
      <p class="lead">New to Skoolyst? This guide walks you through the ecosystem, the main application, its modules and what is coming next.</p>

      <h2 id="what-is-skoolyst">What is Skoolyst?</h2>
      <p>Skoolyst is an educational technology ecosystem designed to connect schools, teachers, students, parents and educational services through digital platforms. Rather than a single product, Skoolyst is being built as a family of interconnected applications that share a common goal: making educational resources more accessible, organized and useful.</p>
      <p>For a deeper explanation, see the <a href="overview.php">Skoolyst Overview</a>.</p>

      <h2 id="understanding-the-ecosystem">Understanding the Skoolyst Ecosystem</h2>
      <p>The Skoolyst ecosystem consists of one main application and several planned subdomain applications. The main application currently contains multiple modules — Schools, Stores, Media and MCQs — that may later become independent applications under their own subdomains.</p>
      <p>This approach allows Skoolyst to start as a unified platform while building toward a modular architecture where each service can grow independently.</p>

      <h2 id="main-application">The Main Application</h2>
      <p>The main Skoolyst application is the current entry point for all services. It brings together four core modules:</p>
      <ul>
        <li><strong>Schools Listing</strong> — a directory of schools</li>
        <li><strong>Stores</strong> — a marketplace for educational materials</li>
        <li><strong>Media</strong> — educational media content</li>
        <li><strong>MCQs</strong> — multiple-choice question practice and assessment</li>
      </ul>

      <h2 id="schools">Schools</h2>
      <p>The Schools module provides a listing of schools within the platform. It is designed to help users discover and explore educational institutions. For detailed usage guidance, see the <a href="docs/guide-schools.php">Schools guide</a>.</p>

      <h2 id="stores">Stores</h2>
      <p>The Stores module is a marketplace for educational products, books and learning materials. It currently operates as a module within the main application. A separate <code>stores.skoolyst.com</code> subdomain is planned for the future. See the <a href="docs/guide-stores.php">Stores guide</a> for more.</p>

      <h2 id="media">Media</h2>
      <p>The Media module serves as an educational media hub for videos, audio and visual learning content. Like Stores, it is currently part of the main application with a separate subdomain planned. See the <a href="docs/guide-media.php">Media guide</a> for more.</p>

      <h2 id="mcqs">MCQs</h2>
      <p>The MCQs module provides multiple-choice question practice and assessment tools. It is currently integrated into the main application, with a separate <code>mcqs.skoolyst.com</code> subdomain planned. See the <a href="docs/guide-mcqs.php">MCQs guide</a> for more.</p>

      <h2 id="future-applications">Future Applications</h2>
      <p>Several additional applications are planned as separate subdomains:</p>
      <ul>
        <li><strong>Ads</strong> (<code>ads.skoolyst.com</code>) — Coming Soon</li>
        <li><strong>Blogs</strong> (<code>blogs.skoolyst.com</code>) — Coming Soon</li>
        <li><strong>MCQs</strong> (<code>mcqs.skoolyst.com</code>) — Planned / Coming Soon</li>
        <li><strong>Stores</strong> (<code>stores.skoolyst.com</code>) — Planned / Coming Soon</li>
        <li><strong>Media</strong> (<code>media.skoolyst.com</code>) — Planned / Coming Soon</li>
      </ul>
      <p>See the <a href="products.php">Products page</a> for the full ecosystem overview.</p>

      <h2 id="how-products-are-organized">How Products Are Organized</h2>
      <p>Skoolyst products follow a clear organizational model:</p>
      <ul>
        <li><strong>Current modules</strong> live inside the main Skoolyst application.</li>
        <li><strong>Planned applications</strong> have designated subdomains but are not yet independent.</li>
        <li><strong>Future products</strong> are announced with "Coming Soon" status.</li>
      </ul>
      <p>Each product has a status badge — Available, In Development, Coming Soon or Planned — so you always know the current state.</p>

      <h2 id="where-to-find-updates">Where to Find Updates</h2>
      <p>Stay informed about Skoolyst development through:</p>
      <ul>
        <li><a href="release-notes.php">Release Notes</a> — detailed changelogs for each version</li>
        <li><a href="news.php">News &amp; Updates</a> — announcements and product news</li>
        <li><a href="versions.php">Versions</a> — version history and development status</li>
      </ul>

      <h2 id="how-documentation-is-structured">How Documentation Is Structured</h2>
      <p>This documentation portal is organized into the following sections:</p>
      <ul>
        <li><strong>Getting Started</strong> — introductory guides for new users</li>
        <li><strong>Overview</strong> — what Skoolyst is and its vision</li>
        <li><strong>Products</strong> — ecosystem and product status</li>
        <li><strong>Guides</strong> — step-by-step documentation by category</li>
        <li><strong>Features</strong> — feature documentation by product</li>
        <li><strong>Release Notes &amp; Versions</strong> — development history</li>
        <li><strong>API / Developers</strong> — future developer documentation</li>
      </ul>

      <nav class="doc-prev-next" aria-label="Pagination">
        <a href="index.php">
          <span class="pn-label">&larr; Previous</span>
          <span class="pn-title">Home</span>
        </a>
        <a href="overview.php" class="next">
          <span class="pn-label">Next &rarr;</span>
          <span class="pn-title">Skoolyst Overview</span>
        </a>
      </nav>
    </article>
  </main>
  <script type="module" src="/assets/js/data.js"></script>
  <script type="module" src="/assets/js/layout.js"></script>
</body>
</html>

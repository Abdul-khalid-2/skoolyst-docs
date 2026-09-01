<?php
// Static PHP view. Backend logic can be introduced later without changing the page structure.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product Ecosystem | Skoolyst Documentation</title>
  <meta name="description" content="Overview of all Skoolyst products and applications, their current status and the planned ecosystem architecture." />
  <link rel="canonical" href="https://docs.skoolyst.com/products.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Product Ecosystem | Skoolyst Documentation" />
  <meta property="og:description" content="Overview of all Skoolyst products, their current status and planned architecture." />
  <meta property="og:url" content="https://docs.skoolyst.com/products.php" />
  <meta property="og:site_name" content="Skoolyst Documentation" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="Product Ecosystem | Skoolyst Documentation" />
  <meta name="twitter:description" content="Overview of all Skoolyst products, their current status and planned architecture." />
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
        <span class="breadcrumb-current">Products</span>
      </nav>

      <h1>Product Ecosystem</h1>
      <p class="lead">The Skoolyst ecosystem consists of a main application with integrated modules and several planned independent applications. Here is the full overview.</p>

      <h2 id="current-main-application">Current Main Application</h2>
      <div class="card-base version-card mb-4">
        <div class="d-flex align-items-center gap-2 mb-2">
          <h3 style="margin:0">Skoolyst</h3>
          <span class="status-badge status-available">Available</span>
        </div>
        <p class="product-subdomain mb-2">skoolyst.com</p>
        <p>The main Skoolyst platform currently containing the following modules:</p>
        <ul>
          <li><strong>Schools Listing</strong> — directory of educational institutions</li>
          <li><strong>Stores</strong> — marketplace for educational products and materials</li>
          <li><strong>Media</strong> — educational media content hub</li>
          <li><strong>MCQs</strong> — multiple-choice question practice and assessment</li>
        </ul>
        <div class="info-banner mt-3 mb-0">
          <span class="info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
          </span>
          <div class="info-content">
            <p>These modules are currently part of the main Skoolyst application. They may later become independent applications under their own subdomains.</p>
          </div>
        </div>
      </div>

      <h2 id="separate-future-applications">Separate &amp; Future Applications</h2>
      <p>The following products are planned as independent applications under their own subdomains. None are live yet.</p>

      <div class="row g-4 mt-2">
        <div class="col-md-6 col-lg-4">
          <div class="card-base product-card">
            <div class="product-icon icon-bg-gold" style="width:44px;height:44px;border-radius:8px;display:flex;align-items:center;justify-content:center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"/><circle cx="7.5" cy="7.5" r=".5" fill="currentColor"/></svg>
            </div>
            <h3 class="product-name">Ads</h3>
            <span class="product-subdomain">ads.skoolyst.com</span>
            <p class="product-desc">Classified advertising platform for educational services and resources.</p>
            <span class="status-badge status-coming-soon">Coming Soon</span>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card-base product-card">
            <div class="product-icon icon-bg-blue" style="width:44px;height:44px;border-radius:8px;display:flex;align-items:center;justify-content:center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6Z"/></svg>
            </div>
            <h3 class="product-name">Blogs</h3>
            <span class="product-subdomain">blogs.skoolyst.com</span>
            <p class="product-desc">Educational blogging platform for articles, insights and stories.</p>
            <span class="status-badge status-coming-soon">Coming Soon</span>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card-base product-card">
            <div class="product-icon icon-bg-green" style="width:44px;height:44px;border-radius:8px;display:flex;align-items:center;justify-content:center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m22 4-10 10.01-3-3"/></svg>
            </div>
            <h3 class="product-name">MCQs</h3>
            <span class="product-subdomain">mcqs.skoolyst.com</span>
            <p class="product-desc">Dedicated multiple-choice question platform for practice and assessment.</p>
            <span class="status-badge status-coming-soon">Planned / Coming Soon</span>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card-base product-card">
            <div class="product-icon icon-bg-purple" style="width:44px;height:44px;border-radius:8px;display:flex;align-items:center;justify-content:center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
            </div>
            <h3 class="product-name">Stores</h3>
            <span class="product-subdomain">stores.skoolyst.com</span>
            <p class="product-desc">Marketplace for educational products, books and learning materials.</p>
            <span class="status-badge status-coming-soon">Planned / Coming Soon</span>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card-base product-card">
            <div class="product-icon icon-bg-navy" style="width:44px;height:44px;border-radius:8px;display:flex;align-items:center;justify-content:center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/></svg>
            </div>
            <h3 class="product-name">Media</h3>
            <span class="product-subdomain">media.skoolyst.com</span>
            <p class="product-desc">Educational media hub for videos, audio and visual learning content.</p>
            <span class="status-badge status-coming-soon">Planned / Coming Soon</span>
          </div>
        </div>
      </div>

      <h2 id="architecture-explanation" class="mt-5">Understanding the Architecture</h2>
      <div class="info-banner">
        <span class="info-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
        </span>
        <div class="info-content">
          <p><strong>Important:</strong> MCQs, Stores and Media currently operate as modules inside the main Skoolyst application. Their separate subdomains (<code>mcqs.skoolyst.com</code>, <code>stores.skoolyst.com</code>, <code>media.skoolyst.com</code>) represent the planned future architecture, not the current state. They are listed here for transparency about the ecosystem direction.</p>
        </div>
      </div>

      <nav class="doc-prev-next" aria-label="Pagination">
        <a href="overview.php">
          <span class="pn-label">&larr; Previous</span>
          <span class="pn-title">Skoolyst Overview</span>
        </a>
        <a href="guides.php" class="next">
          <span class="pn-label">Next &rarr;</span>
          <span class="pn-title">Guides</span>
        </a>
      </nav>
    </article>
  </main>
  <script type="module" src="/assets/js/data.js"></script>
  <script type="module" src="/assets/js/layout.js"></script>
</body>
</html>

<?php
// Static PHP view. Backend logic can be introduced later without changing the page structure.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>News &amp; Updates | Skoolyst Documentation</title>
  <meta name="description" content="Latest news, product updates, announcements and ecosystem developments from Skoolyst." />
  <link rel="canonical" href="https://docs.skoolyst.com/news.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="News & Updates | Skoolyst Documentation" />
  <meta property="og:description" content="Latest news, product updates and announcements from Skoolyst." />
  <meta property="og:url" content="https://docs.skoolyst.com/news.php" />
  <meta property="og:site_name" content="Skoolyst Documentation" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="News & Updates | Skoolyst Documentation" />
  <meta name="twitter:description" content="Latest news, product updates and announcements from Skoolyst." />
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
        <span class="breadcrumb-current">News</span>
      </nav>

      <h1>News &amp; Updates</h1>
      <p class="lead">Stay informed about Skoolyst product updates, platform announcements and ecosystem developments.</p>

      <div class="info-banner">
        <span class="info-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
        </span>
        <div class="info-content">
          <p>The news items below are sample placeholder content. Real announcements will replace these as Skoolyst develops.</p>
        </div>
      </div>

      <h2 id="latest-news">Latest News</h2>
      <div class="row g-4">
        <div class="col-md-6">
          <div class="card-base news-card">
            <div class="news-meta">
              <span class="news-category cat-announcement">Announcement</span>
              <span class="news-date">Sample</span>
            </div>
            <h3 class="news-title">Skoolyst Documentation Portal Launched</h3>
            <p class="news-excerpt">The official Skoolyst documentation portal is now available, providing a central hub for guides, product information, release notes and developer resources.</p>
            <a href="#" class="news-read-more" onclick="return false">Read More &rarr;</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-base news-card">
            <div class="news-meta">
              <span class="news-category cat-development">Development</span>
              <span class="news-date">Sample</span>
            </div>
            <h3 class="news-title">Core Module Development Underway</h3>
            <p class="news-excerpt">Development of the core Skoolyst modules — Schools, Stores, Media and MCQs — is actively progressing within the main application.</p>
            <a href="#" class="news-read-more" onclick="return false">Read More &rarr;</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-base news-card">
            <div class="news-meta">
              <span class="news-category cat-ecosystem">Ecosystem</span>
              <span class="news-date">Sample</span>
            </div>
            <h3 class="news-title">Ecosystem Architecture Roadmap Published</h3>
            <p class="news-excerpt">The planned architecture for separating core modules into independent subdomain applications has been documented in the product ecosystem overview.</p>
            <a href="products.php" class="news-read-more">Read More &rarr;</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-base news-card">
            <div class="news-meta">
              <span class="news-category cat-product-update">Product Update</span>
              <span class="news-date">Sample</span>
            </div>
            <h3 class="news-title">Feature Documentation Structure Released</h3>
            <p class="news-excerpt">Feature documentation with status badges is now available, organized by product across the Skoolyst ecosystem.</p>
            <a href="features.php" class="news-read-more">Read More &rarr;</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-base news-card">
            <div class="news-meta">
              <span class="news-category cat-platform-update">Platform Update</span>
              <span class="news-date">Sample</span>
            </div>
            <h3 class="news-title">Version Tracking System Introduced</h3>
            <p class="news-excerpt">A structured version history and release notes system has been introduced to track Skoolyst development progress.</p>
            <a href="versions.php" class="news-read-more">Read More &rarr;</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-base news-card">
            <div class="news-meta">
              <span class="news-category cat-education">Education</span>
              <span class="news-date">Sample</span>
            </div>
            <h3 class="news-title">Educational Focus Remains Core Priority</h3>
            <p class="news-excerpt">Skoolyst continues to prioritize its educational mission, building tools that serve schools, teachers, students and parents.</p>
            <a href="about.php" class="news-read-more">Read More &rarr;</a>
          </div>
        </div>
      </div>

      <h2 id="news-categories">News Categories</h2>
      <ul>
        <li><span class="news-category cat-product-update me-1">Product Update</span> — new features and product changes</li>
        <li><span class="news-category cat-platform-update me-1">Platform Update</span> — infrastructure and platform-level changes</li>
        <li><span class="news-category cat-development me-1">Development</span> — development progress and milestones</li>
        <li><span class="news-category cat-announcement me-1">Announcement</span> — official announcements</li>
        <li><span class="news-category cat-ecosystem me-1">Ecosystem</span> — ecosystem-wide updates and plans</li>
        <li><span class="news-category cat-education me-1">Education</span> — educational focus and initiatives</li>
      </ul>

      <nav class="doc-prev-next" aria-label="Pagination">
        <a href="release-notes.php">
          <span class="pn-label">&larr; Previous</span>
          <span class="pn-title">Release Notes</span>
        </a>
        <a href="faq.php" class="next">
          <span class="pn-label">Next &rarr;</span>
          <span class="pn-title">FAQ</span>
        </a>
      </nav>
    </article>
  </main>
  <script type="module" src="/assets/js/data.js"></script>
  <script type="module" src="/assets/js/layout.js"></script>
</body>
</html>

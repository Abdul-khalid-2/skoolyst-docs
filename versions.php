<?php
// Static PHP view. Backend logic can be introduced later without changing the page structure.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Versions | Skoolyst Documentation</title>
  <meta name="description" content="Version history and development status of Skoolyst releases. All versions are currently in development stage." />
  <link rel="canonical" href="https://docs.skoolyst.com/versions.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Versions | Skoolyst Documentation" />
  <meta property="og:description" content="Version history and development status of Skoolyst releases." />
  <meta property="og:url" content="https://docs.skoolyst.com/versions.php" />
  <meta property="og:site_name" content="Skoolyst Documentation" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="Versions | Skoolyst Documentation" />
  <meta name="twitter:description" content="Version history and development status of Skoolyst releases." />
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
        <span class="breadcrumb-current">Versions</span>
      </nav>

      <h1>Versions</h1>
      <p class="lead">Skoolyst version history. All versions listed are in development stage — no production releases have been published yet.</p>

      <h2 id="versioning-approach">How Skoolyst Versioning Works</h2>
      <p>Skoolyst follows a <code>MAJOR.MINOR.PATCH</code> versioning approach. During the development phase, versions are numbered starting from <code>v0.1</code> and increment as development progresses. Once the platform reaches production readiness, version numbering will follow standard semantic versioning.</p>
      <ul>
        <li><strong>Major</strong> — significant changes or breaking changes</li>
        <li><strong>Minor</strong> — new features and improvements (backward compatible)</li>
        <li><strong>Patch</strong> — bug fixes and small adjustments</li>
      </ul>

      <h2 id="version-history">Version History</h2>

      <div class="card-base version-card mb-4">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
          <h3 style="margin:0" class="version-number">Skoolyst v0.2</h3>
          <span class="status-badge status-development">Development</span>
        </div>
        <p class="version-date">Release date: Not yet released</p>
        <p><strong>Highlights:</strong> Continued development of core modules and platform infrastructure.</p>
        <table>
          <thead><tr><th>Field</th><th>Details</th></tr></thead>
          <tbody>
            <tr><td>Version</td><td>v0.2</td></tr>
            <tr><td>Status</td><td>Development</td></tr>
            <tr><td>Release date</td><td>Not yet released</td></tr>
            <tr><td>Highlights</td><td>Continued module development</td></tr>
            <tr><td>Changes</td><td>Placeholder — details will be added when this version is released</td></tr>
            <tr><td>Known issues</td><td>Placeholder — will be documented upon release</td></tr>
          </tbody>
        </table>
        <p class="placeholder-notice">This is placeholder version information. Real details will be added when the version is released.</p>
      </div>

      <div class="card-base version-card mb-4">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
          <h3 style="margin:0" class="version-number">Skoolyst v0.1</h3>
          <span class="status-badge status-development">Development</span>
        </div>
        <p class="version-date">Release date: Development stage</p>
        <p><strong>Highlights:</strong> Initial development build with foundational platform architecture and core module scaffolding.</p>
        <table>
          <thead><tr><th>Field</th><th>Details</th></tr></thead>
          <tbody>
            <tr><td>Version</td><td>v0.1</td></tr>
            <tr><td>Status</td><td>Development</td></tr>
            <tr><td>Release date</td><td>Development stage</td></tr>
            <tr><td>Highlights</td><td>Initial platform architecture and module scaffolding</td></tr>
            <tr><td>Changes</td><td>Placeholder — initial development build</td></tr>
            <tr><td>Known issues</td><td>Placeholder — will be documented as development progresses</td></tr>
          </tbody>
        </table>
        <p class="placeholder-notice">This is placeholder version information. Real details will be added when the version is released.</p>
      </div>

      <h2 id="version-roadmap">Version Roadmap</h2>
      <p>As Skoolyst progresses through development, new versions will be documented here. The roadmap includes:</p>
      <ul>
        <li>Continued development of core modules (Schools, Stores, Media, MCQs)</li>
        <li>Platform stabilization and performance improvements</li>
        <li>Preparation for separating modules into independent applications</li>
        <li>Developer API design and implementation</li>
      </ul>
      <p>No specific release dates are announced. Development status will be reflected through <a href="release-notes.php">Release Notes</a> and <a href="news.php">News</a>.</p>

      <nav class="doc-prev-next" aria-label="Pagination">
        <a href="features.php">
          <span class="pn-label">&larr; Previous</span>
          <span class="pn-title">Features</span>
        </a>
        <a href="release-notes.php" class="next">
          <span class="pn-label">Next &rarr;</span>
          <span class="pn-title">Release Notes</span>
        </a>
      </nav>
    </article>
  </main>
  <script type="module" src="/assets/js/data.js"></script>
  <script type="module" src="/assets/js/layout.js"></script>
</body>
</html>

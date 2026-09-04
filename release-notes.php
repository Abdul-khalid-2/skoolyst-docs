<?php
// Static PHP view. Backend logic can be introduced later without changing the page structure.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Release Notes | Skoolyst Documentation</title>
  <meta name="description" content="Latest updates, changes, fixes and known issues for Skoolyst. Release notes will be added as development versions are published." />
  <link rel="canonical" href="https://docs.skoolyst.com/release-notes.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Release Notes | Skoolyst Documentation" />
  <meta property="og:description" content="Latest updates, changes, fixes and known issues for Skoolyst." />
  <meta property="og:url" content="https://docs.skoolyst.com/release-notes.php" />
  <meta property="og:site_name" content="Skoolyst Documentation" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="Release Notes | Skoolyst Documentation" />
  <meta name="twitter:description" content="Latest updates, changes, fixes and known issues for Skoolyst." />
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
        <span class="breadcrumb-current">Release Notes</span>
      </nav>

      <h1>Release Notes</h1>
      <p class="lead">Track the latest updates, changes, fixes and known issues across Skoolyst versions.</p>

      <div class="info-banner">
        <span class="info-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
        </span>
        <div class="info-content">
          <p>Skoolyst is currently in development. The release notes below contain placeholder information. Real release notes will be added as development versions are published.</p>
        </div>
      </div>

      <h2 id="latest-updates">Latest Updates</h2>

      <div class="release-entry" id="ads">
        <div class="release-header">
          <h3 class="release-version">Skoolyst Ads — v1.0</h3>
          <span class="status-badge status-available">Released</span>
          <span class="release-meta">Deployed at ads.skoolyst.com</span>
        </div>
        <div class="release-section added">
          <h4>Added</h4>
          <ul>
            <li>Advertiser and admin accounts with role-based access</li>
            <li>Ad creation with image, description, call-to-action text, click URL and optional start/end date scheduling</li>
            <li>Ad editing, pausing/resuming and soft delete</li>
            <li>Admin moderation workflow — approve, reject, pause, reactivate — with every action recorded in an audit log</li>
            <li>Connected app management with per-app API keys</li>
            <li>Placement management, scoped per connected app</li>
            <li>Multi-placement ad targeting — one ad can run on several of an app's placements at once</li>
            <li>Click and impression tracking, per ad and per day</li>
            <li>Public <code>GET /ads/serve</code> API for connected apps to request an eligible ad</li>
          </ul>
        </div>
        <div class="release-section changed">
          <h4>Changed</h4>
          <ul><li>Not applicable — this is the initial tracked release.</li></ul>
        </div>
        <div class="release-section fixed">
          <h4>Fixed</h4>
          <ul><li>Not applicable — this is the initial tracked release.</li></ul>
        </div>
        <div class="release-section removed">
          <h4>Removed</h4>
          <ul><li>Not applicable — this is the initial tracked release.</li></ul>
        </div>
        <div class="release-section known-issues">
          <h4>Known Issues</h4>
          <ul><li>None currently tracked. Future bug fixes and updates will be added here as new dated entries.</li></ul>
        </div>
      </div>

      <div class="release-entry">
        <div class="release-header">
          <h3 class="release-version">v0.2</h3>
          <span class="status-badge status-development">Development</span>
          <span class="release-meta">Not yet released</span>
        </div>
        <div class="release-section added">
          <h4>Added</h4>
          <ul><li>Placeholder — new features will be listed here when v0.2 is released.</li></ul>
        </div>
        <div class="release-section changed">
          <h4>Changed</h4>
          <ul><li>Placeholder — changes will be listed here when v0.2 is released.</li></ul>
        </div>
        <div class="release-section fixed">
          <h4>Fixed</h4>
          <ul><li>Placeholder — fixes will be listed here when v0.2 is released.</li></ul>
        </div>
        <div class="release-section removed">
          <h4>Removed</h4>
          <ul><li>Placeholder — removals will be listed here when v0.2 is released.</li></ul>
        </div>
        <div class="release-section known-issues">
          <h4>Known Issues</h4>
          <ul><li>Placeholder — known issues will be listed here when v0.2 is released.</li></ul>
        </div>
      </div>

      <div class="release-entry">
        <div class="release-header">
          <h3 class="release-version">v0.1</h3>
          <span class="status-badge status-development">Development</span>
          <span class="release-meta">Development stage</span>
        </div>
        <div class="release-section added">
          <h4>Added</h4>
          <ul>
            <li>Initial platform architecture and foundation</li>
            <li>Core module scaffolding: Schools, Stores, Media, MCQs</li>
            <li>Basic project structure and development environment</li>
          </ul>
        </div>
        <div class="release-section changed">
          <h4>Changed</h4>
          <ul><li>Not applicable — initial development build.</li></ul>
        </div>
        <div class="release-section fixed">
          <h4>Fixed</h4>
          <ul><li>Not applicable — initial development build.</li></ul>
        </div>
        <div class="release-section removed">
          <h4>Removed</h4>
          <ul><li>Not applicable — initial development build.</li></ul>
        </div>
        <div class="release-section known-issues">
          <h4>Known Issues</h4>
          <ul><li>Placeholder — known issues will be documented as development progresses.</li></ul>
        </div>
      </div>

      <h2 id="how-to-use-release-notes">How to Use Release Notes</h2>
      <p>Each release entry follows a consistent structure:</p>
      <ul>
        <li><strong>Version</strong> — the version number</li>
        <li><strong>Date</strong> — when the version was released</li>
        <li><strong>Status</strong> — Development, Beta, or Released</li>
        <li><strong>Added</strong> — new features and capabilities</li>
        <li><strong>Changed</strong> — modifications to existing features</li>
        <li><strong>Fixed</strong> — bug fixes and issue resolutions</li>
        <li><strong>Removed</strong> — features or capabilities that were removed</li>
        <li><strong>Known Issues</strong> — acknowledged issues not yet fixed</li>
      </ul>
      <p>This layout is designed to be easy to update when real releases happen. Simply add a new <code>release-entry</code> block at the top with the relevant details.</p>

      <nav class="doc-prev-next" aria-label="Pagination">
        <a href="versions.php">
          <span class="pn-label">&larr; Previous</span>
          <span class="pn-title">Versions</span>
        </a>
        <a href="news.php" class="next">
          <span class="pn-label">Next &rarr;</span>
          <span class="pn-title">News &amp; Updates</span>
        </a>
      </nav>
    </article>
  </main>
  <script type="module" src="/assets/js/data.js"></script>
  <script type="module" src="/assets/js/layout.js"></script>

<?php require __DIR__ . '/layout/footer.php'; ?>
</body>
</html>

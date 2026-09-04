<?php
// Static PHP view. Backend logic can be introduced later without changing the page structure.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Features | Skoolyst Documentation</title>
  <meta name="description" content="Feature documentation organized by product with status badges — Available, In Development, Coming Soon and Planned." />
  <link rel="canonical" href="https://docs.skoolyst.com/features.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Features | Skoolyst Documentation" />
  <meta property="og:description" content="Feature documentation organized by product with status badges." />
  <meta property="og:url" content="https://docs.skoolyst.com/features.php" />
  <meta property="og:site_name" content="Skoolyst Documentation" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="Features | Skoolyst Documentation" />
  <meta name="twitter:description" content="Feature documentation organized by product with status badges." />
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
        <span class="breadcrumb-current">Features</span>
      </nav>

      <h1>Features</h1>
      <p class="lead">Feature documentation organized by product. Each feature carries a status badge indicating its current state.</p>

      <div class="mb-4">
        <span class="status-badge status-available me-2">Available</span>
        <span class="status-badge status-development me-2">In Development</span>
        <span class="status-badge status-coming-soon me-2">Coming Soon</span>
        <span class="status-badge status-planned me-2">Planned</span>
      </div>

      <h2 id="skoolyst-core">Skoolyst Core</h2>
      <div class="card-base">
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Unified Platform</div><div class="feature-desc">Single application integrating Schools, Stores, Media and MCQs.</div></div>
          <span class="status-badge status-development">In Development</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">User Accounts</div><div class="feature-desc">Account creation and management for platform users.</div></div>
          <span class="status-badge status-development">In Development</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Search &amp; Discovery</div><div class="feature-desc">Search across modules and content types.</div></div>
          <span class="status-badge status-planned">Planned</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Developer API</div><div class="feature-desc">Public API for third-party integration.</div></div>
          <span class="status-badge status-planned">Planned</span>
        </div>
      </div>

      <h2 id="schools">Schools</h2>
      <div class="card-base">
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Schools Listing</div><div class="feature-desc">Directory of educational institutions with search and filtering.</div></div>
          <span class="status-badge status-development">In Development</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">School Profiles</div><div class="feature-desc">Detailed profile pages for listed schools.</div></div>
          <span class="status-badge status-planned">Planned</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">School Verification</div><div class="feature-desc">Verification system for listed institutions.</div></div>
          <span class="status-badge status-planned">Planned</span>
        </div>
      </div>

      <h2 id="stores">Stores</h2>
      <div class="card-base">
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Product Listings</div><div class="feature-desc">List educational products, books and learning materials.</div></div>
          <span class="status-badge status-development">In Development</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Categories &amp; Search</div><div class="feature-desc">Browse and search products by category.</div></div>
          <span class="status-badge status-planned">Planned</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Checkout &amp; Payments</div><div class="feature-desc">Purchase flow for educational products.</div></div>
          <span class="status-badge status-planned">Planned</span>
        </div>
      </div>

      <h2 id="media">Media</h2>
      <div class="card-base">
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Media Library</div><div class="feature-desc">Browse educational videos, audio and visual content.</div></div>
          <span class="status-badge status-development">In Development</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Content Upload</div><div class="feature-desc">Upload and manage educational media content.</div></div>
          <span class="status-badge status-planned">Planned</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Playlists &amp; Collections</div><div class="feature-desc">Organize media into curated collections.</div></div>
          <span class="status-badge status-planned">Planned</span>
        </div>
      </div>

      <h2 id="mcqs">MCQs</h2>
      <div class="card-base">
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Question Bank</div><div class="feature-desc">Library of multiple-choice questions across subjects.</div></div>
          <span class="status-badge status-development">In Development</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Practice Mode</div><div class="feature-desc">Practice questions with instant feedback.</div></div>
          <span class="status-badge status-planned">Planned</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Assessment Mode</div><div class="feature-desc">Timed assessments with scoring and results.</div></div>
          <span class="status-badge status-planned">Planned</span>
        </div>
      </div>

      <h2 id="teachers">Teachers</h2>
<p>Skoolyst Teachers is designed around the teacher-school connection. Teachers can maintain a professional online profile containing qualifications, experience, skills and achievements, update it when needed and share a single profile link with schools and recruiters.</p>
<ul>
<li>Online professional teacher profile</li>
<li>Education, experience, skills and achievements</li>
<li>Shareable profile link</li>
<li>Searchable teacher directory and hiring-focused filters as the platform develops</li>
</ul>

<h2 id="ads">Ads</h2>
      <p>Skoolyst Ads is deployed and documented in full in the <a href="docs/guide-ads.php">Skoolyst Ads guide</a>.</p>
      <div class="card-base">
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Ad Submission</div><div class="feature-desc">Advertisers submit ads with an image, description, call-to-action and click URL, targeting a connected app's placement(s).</div></div>
          <span class="status-badge status-available">Available</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Multi-Placement Targeting</div><div class="feature-desc">One ad can run on one, several, or all of a connected app's placements at once.</div></div>
          <span class="status-badge status-available">Available</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Admin Moderation</div><div class="feature-desc">Approve, reject, pause and reactivate ads, with every action recorded in an audit log.</div></div>
          <span class="status-badge status-available">Available</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Connected Apps &amp; Placements</div><div class="feature-desc">Register apps with their own API key, and define each app's own placement codes.</div></div>
          <span class="status-badge status-available">Available</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Scheduling</div><div class="feature-desc">Optional start/end dates so an ad only runs within a set window.</div></div>
          <span class="status-badge status-available">Available</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Click &amp; Impression Tracking</div><div class="feature-desc">Per-ad, per-day performance stats for advertisers and admins.</div></div>
          <span class="status-badge status-available">Available</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Ads API</div><div class="feature-desc">Public endpoint connected apps call to request and display an eligible ad for a placement.</div></div>
          <span class="status-badge status-available">Available</span>
        </div>
      </div>

      <h2 id="blogs">Blogs</h2>
      <div class="card-base">
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Article Publishing</div><div class="feature-desc">Write and publish educational articles and blog posts.</div></div>
          <span class="status-badge status-coming-soon">Coming Soon</span>
        </div>
        <div class="feature-item">
          <div class="feature-info"><div class="feature-name">Categories &amp; Tags</div><div class="feature-desc">Organize articles by topic and tag.</div></div>
          <span class="status-badge status-planned">Planned</span>
        </div>
      </div>

      <nav class="doc-prev-next" aria-label="Pagination">
        <a href="guides.php">
          <span class="pn-label">&larr; Previous</span>
          <span class="pn-title">Guides</span>
        </a>
        <a href="versions.php" class="next">
          <span class="pn-label">Next &rarr;</span>
          <span class="pn-title">Versions</span>
        </a>
      </nav>
    </article>
  </main>
  <script type="module" src="/assets/js/data.js"></script>
  <script type="module" src="/assets/js/layout.js"></script>

<?php require __DIR__ . '/layout/footer.php'; ?>
</body>
</html>

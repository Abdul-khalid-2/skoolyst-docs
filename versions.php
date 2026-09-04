<?php
// Static PHP view. Product/version status is maintained here until dynamic release management is introduced.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Versions & Product Status | Skoolyst Documentation</title>
  <meta name="description" content="Current versions, deployment status, and product status across the Skoolyst application ecosystem." />
  <link rel="canonical" href="https://docs.skoolyst.com/versions.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Versions & Product Status | Skoolyst Documentation" />
  <meta property="og:description" content="Current versions, deployment status, and product status across the Skoolyst ecosystem." />
  <meta property="og:url" content="https://docs.skoolyst.com/versions.php" />
  <meta property="og:site_name" content="Skoolyst Documentation" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="Versions & Product Status | Skoolyst Documentation" />
  <meta name="twitter:description" content="Current versions, deployment status, and product status across the Skoolyst ecosystem." />
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
        <span class="breadcrumb-current">Versions</span>
      </nav>

      <h1>Versions &amp; Product Status</h1>
      <p class="lead">Skoolyst is now a multi-application education ecosystem. The core applications have been developed, with fixes, testing, deployment improvements and further enhancements continuing.</p>

      <div class="card-base mb-4">
        <h2 style="margin-top:0">Current Ecosystem</h2>
        <p>Each Skoolyst application can have its own release lifecycle. A product being developed, deployed, or integrated should therefore be documented separately instead of treating the entire ecosystem as one version.</p>
        <table>
          <thead><tr><th>Product</th><th>Version / Stage</th><th>Status</th><th>Purpose</th></tr></thead>
          <tbody>
            <tr><td><strong>Skoolyst</strong></td><td>Core platform</td><td>Complete — fixes in progress</td><td>Schools, Shops, Blogs, Videos and MCQs</td></tr>
            <tr><td><strong>Skoolyst Teachers</strong></td><td>v1</td><td>Deployed</td><td>Teacher profiles, listings and professional online profiles</td></tr>
            <tr><td><strong>Skoolyst Docs</strong></td><td>Current documentation build</td><td>Available &amp; continuously updated</td><td>Official documentation and knowledge base</td></tr>
            <tr><td><strong>Skoolyst Ads</strong></td><td>v1</td><td>Deployed</td><td>Central advertising engine and API for Skoolyst applications</td></tr>
          </tbody>
        </table>
      </div>

      <h2 id="skoolyst">Skoolyst — Core Platform</h2>
      <p>The main Skoolyst application has been developed around the original goal of bringing education-related discovery, information, content and practice into one ecosystem.</p>
      <ul>
        <li><strong>Schools</strong> — school discovery and listings.</li>
        <li><strong>Shops</strong> — school-related businesses such as stationery, uniforms, shoes, bags and other education-related stores.</li>
        <li><strong>Blogs</strong> — education-focused articles, awareness and community knowledge.</li>
        <li><strong>Videos</strong> — educational and school-related video content.</li>
        <li><strong>MCQs</strong> — subject practice, tests, mock tests and preparation support.</li>
      </ul>
      <p><strong>Current status:</strong> The core application is developed and the current focus is on fixes, testing, refinement and ongoing improvements.</p>

      <h2 id="teachers">Skoolyst Teachers — v1</h2>
      <p><strong>Website:</strong> <a href="https://teachers.skoolyst.com">teachers.skoolyst.com</a></p>
      <p>Skoolyst Teachers v1 is deployed and provides teachers with a professional online identity that can be shared with schools, recruiters and other people.</p>
      <ul>
        <li>Teacher signup and login</li>
        <li>Professional teacher profile</li>
        <li>Education and qualifications</li>
        <li>Teaching experience</li>
        <li>Skills</li>
        <li>Awards and achievements</li>
        <li>Shareable professional profile link</li>
        <li>Teacher listings on the Skoolyst platform</li>
        <li>Profile editing and updating from anywhere</li>
      </ul>
      <p>The goal is to reduce the repeated work of creating, updating and sending CVs while making it easier for schools to discover suitable teachers.</p>

      <h2 id="docs">Skoolyst Docs</h2>
      <p><strong>Website:</strong> <a href="https://docs.skoolyst.com">docs.skoolyst.com</a></p>
      <p>Skoolyst Docs is the central documentation website for the application family. It explains the product vision, modules, features, guides, integrations, versions and development information.</p>

      <h2 id="ads">Skoolyst Ads — v1</h2>
      <p><strong>Website:</strong> <a href="https://ads.skoolyst.com">ads.skoolyst.com</a></p>
      <p>Skoolyst Ads is a centralized advertising engine for the Skoolyst ecosystem, currently on its first tracked release (v1). Advertisers and administrators manage advertisements while connected applications request advertisements through an API. See the <a href="docs/guide-ads.php">Skoolyst Ads guide</a> for the full walkthrough.</p>
      <h3>Advertisement management</h3>
      <ul>
        <li>Create advertisements, with an image, description, call-to-action text and click URL</li>
        <li>Edit and update advertisements (an edit resets the ad back to pending for re-review)</li>
        <li>Delete advertisements (soft delete — moderation history is preserved)</li>
        <li>Pause and resume advertisements</li>
        <li>Optional start/end date scheduling</li>
        <li>Admin approval/rejection workflow, with every action recorded in an audit log</li>
        <li>Manage advertisers and admin access</li>
        <li>Create and manage placements per connected app</li>
        <li>Target one, several, or all of a connected app's placements from a single ad</li>
        <li>Per-ad click and impression tracking</li>
      </ul>
      <h3>Application placements</h3>
      <p>A placement identifies where an advertisement can be displayed. Each connected app defines its own placements independently — for example an app might register:</p>
      <pre><code>header
footer
sidebar</code></pre>
      <p>Each connected app authenticates with its own API key. This allows multiple Skoolyst applications — <code>teachers.skoolyst.com</code>, <code>blog.skoolyst.com</code> and others — to share one advertising infrastructure instead of building separate ad-management systems for every application. See the <a href="developers.php#ads-api">Ads API reference</a> for the exact request/response contract connected apps use.</p>

      <h2 id="versioning">Versioning Approach</h2>
      <p>Product versions should describe real release stages rather than placeholder versions. For applications with formal releases, Skoolyst can use <code>MAJOR.MINOR.PATCH</code> semantic versioning.</p>
      <ul>
        <li><strong>Major</strong> — significant or breaking changes.</li>
        <li><strong>Minor</strong> — new backward-compatible features.</li>
        <li><strong>Patch</strong> — bug fixes and small improvements.</li>
      </ul>
      <p>For products that are currently in development or integration, the documentation uses clear status labels such as <strong>Development</strong>, <strong>Deployed</strong>, <strong>Integration</strong> and <strong>Fixes in progress</strong>.</p>

      <h2 id="roadmap">Current Direction</h2>
      <ul>
        <li>Fix and stabilize the completed Skoolyst modules.</li>
        <li>Continue improving the deployed Skoolyst Teachers v1 experience.</li>
        <li>Maintain and expand the documentation as products evolve.</li>
        <li>Continue integrating and expanding Skoolyst Ads across more Skoolyst properties.</li>
        <li>Document future releases and changes when they become actual releases.</li>
      </ul>

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

<?php require __DIR__ . '/layout/footer.php'; ?>
</body>
</html>

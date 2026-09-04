<?php
// Static PHP documentation view.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product Ecosystem | Skoolyst Documentation</title>
  <meta name="description" content="A precise overview of Skoolyst products, their purpose, current architecture and planned specialized applications." />
  <link rel="canonical" href="https://docs.skoolyst.com/products.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Product Ecosystem | Skoolyst Documentation" />
  <meta property="og:description" content="A precise overview of Skoolyst products, their purpose, current architecture and planned specialized applications." />
  <meta property="og:site_name" content="Skoolyst Documentation" />
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
      <a href="index.php">Home</a><span class="breadcrumb-sep">/</span><span class="breadcrumb-current">Products</span>
    </nav>
    <h1>Product Ecosystem</h1>
<p class="lead">Skoolyst is organized as a family of specialized educational products. Some capabilities begin as modules inside the main platform and can later evolve into independent applications.</p>

<h2 id="main">Main Skoolyst Platform</h2>
<div class="card-base version-card mb-4">
<div class="d-flex align-items-center gap-2 mb-2"><h3 style="margin:0">Skoolyst</h3><span class="status-badge status-available">Main Platform</span></div>
<p class="product-subdomain mb-2">skoolyst.com</p>
<p>The main platform is the central entry point for the ecosystem and currently includes core modules such as:</p>
<ul>
<li><strong>Schools</strong> — school discovery and structured school information</li>
<li><strong>Stores</strong> — school-related products and services</li>
<li><strong>Media</strong> — educational media and learning content</li>
<li><strong>MCQs</strong> — practice, tests and assessment</li>
</ul>
</div>

<h2 id="applications">Specialized Applications</h2>
<div class="card-base mb-3"><h3>Teachers — <code>teachers.skoolyst.com</code></h3><p>Professional online profiles for teachers, allowing them to maintain qualifications, experience, skills and achievements and share one profile link with schools and recruiters.</p><span class="status-badge status-development">In Development / Planned</span></div>
<div class="card-base mb-3"><h3>Ads — <code>ads.skoolyst.com</code></h3><p>A centralized advertising engine: advertisers submit ads for a connected app's placements, an admin moderates them, and connected Skoolyst properties request and display approved ads through a shared API, reporting impressions and clicks back.</p><span class="status-badge status-available">Available — v1</span></div>
<div class="card-base mb-3"><h3>Blogs — <code>blogs.skoolyst.com</code></h3><p>A dedicated education-focused publishing platform for articles, experiences, awareness and practical discussion among parents, teachers, students and schools.</p><span class="status-badge status-development">Planned</span></div>
<div class="card-base mb-3"><h3>MCQs — <code>mcqs.skoolyst.com</code></h3><p>A dedicated practice and assessment application for subject-wise MCQs, mock tests, progress tracking, competitive-exam preparation and future certification.</p><span class="status-badge status-development">Planned</span></div>
<div class="card-base mb-3"><h3>Stores — <code>stores.skoolyst.com</code></h3><p>A specialized marketplace/discovery application for stationery, uniforms, shoes, school bags, books and other school-related products and services.</p><span class="status-badge status-development">Planned</span></div>
<div class="card-base mb-3"><h3>Media — <code>media.skoolyst.com</code></h3><p>A dedicated educational media hub for video, audio, visual and other learning-oriented content.</p><span class="status-badge status-development">Planned</span></div>

<h2 id="architecture">Why specialized applications?</h2>
<p>Each product has a different purpose and user journey. Separating specialized applications can keep interfaces focused, make documentation clearer and allow individual products to evolve without turning the main platform into one complicated interface.</p>
<p>They remain part of one ecosystem through shared branding, product direction and API-based integration where required. The exact technical boundaries can evolve as Skoolyst develops.</p>

<h2 id="ecosystem-flow">The ecosystem in simple terms</h2>
<table><thead><tr><th>Need</th><th>Skoolyst direction</th></tr></thead>
<tbody>
<tr><td>Find the right school</td><td>Schools / Main Platform</td></tr>
<tr><td>Present a school professionally</td><td>Schools</td></tr>
<tr><td>Find or showcase teachers</td><td>Skoolyst Teachers</td></tr>
<tr><td>Read and share education knowledge</td><td>Skoolyst Blogs</td></tr>
<tr><td>Practice and test knowledge</td><td>Skoolyst MCQs</td></tr>
<tr><td>Find school supplies and services</td><td>Skoolyst Stores</td></tr>
<tr><td>Discover educational media</td><td>Skoolyst Media</td></tr>
<tr><td>Reach relevant education audiences</td><td>Skoolyst Ads</td></tr>
</tbody></table>

    <nav class="doc-prev-next" aria-label="Pagination"><a href="why-skoolyst.php"><span class="pn-label">&larr; Previous</span><span class="pn-title">Why Skoolyst?</span></a><a href="features.php" class="next"><span class="pn-label">Next &rarr;</span><span class="pn-title">Features</span></a></nav>
  </article>
</main>
<script type="module" src="/assets/js/data.js"></script>
<script type="module" src="/assets/js/layout.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php require __DIR__ . '/layout/footer.php'; ?>
</body>
</html>
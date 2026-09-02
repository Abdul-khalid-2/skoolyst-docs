<?php
// Static PHP documentation view.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skoolyst Overview | Skoolyst Documentation</title>
  <meta name="description" content="What Skoolyst is, who it serves, why the ecosystem exists and how its educational applications fit together." />
  <link rel="canonical" href="https://docs.skoolyst.com/overview.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Skoolyst Overview | Skoolyst Documentation" />
  <meta property="og:description" content="What Skoolyst is, who it serves, why the ecosystem exists and how its educational applications fit together." />
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
      <a href="index.php">Home</a><span class="breadcrumb-sep">/</span><span class="breadcrumb-current">Overview</span>
    </nav>
    <h1>Skoolyst Overview</h1>
<p class="lead">Skoolyst is an educational technology ecosystem designed to make education-related discovery, connection, learning and information sharing more organized.</p>

<h2 id="what-is-skoolyst">What is Skoolyst?</h2>
<p>Skoolyst is a family of educational web applications built around one connected idea: <strong>bring the people, information, tools and services surrounding education closer together</strong>.</p>
<p>The ecosystem is intended for parents, students, teachers, schools and businesses that provide school-related products or services. Different needs can be handled by specialized applications while still belonging to the same Skoolyst ecosystem.</p>

<h2 id="vision">Vision</h2>
<p>To build a connected education ecosystem where families can discover and compare schools, schools can communicate their value, teachers can showcase their professional experience, students can improve their knowledge, and education-related businesses can reach the people they serve.</p>

<h2 id="mission">Mission</h2>
<p>To reduce the fragmentation of education information and services by creating practical digital platforms that make discovery, comparison, communication, learning and sharing easier.</p>

<h2 id="who-it-serves">Who Skoolyst serves</h2>
<div class="row g-3">
<div class="col-md-6"><div class="card-base h-100"><h3>Parents & Families</h3><p class="mb-0">Discover schools, compare important information and make more informed education decisions for children.</p></div></div>
<div class="col-md-6"><div class="card-base h-100"><h3>Schools</h3><p class="mb-0">Present structured information, improve digital discoverability and connect with families and teachers.</p></div></div>
<div class="col-md-6"><div class="card-base h-100"><h3>Teachers</h3><p class="mb-0">Build a reusable professional profile containing qualifications, experience, skills and achievements.</p></div></div>
<div class="col-md-6"><div class="card-base h-100"><h3>Students</h3><p class="mb-0">Practice knowledge, take tests and use learning resources across the ecosystem.</p></div></div>
<div class="col-md-6"><div class="card-base h-100"><h3>Education Businesses</h3><p class="mb-0">Help school-related stores and service providers become discoverable to families and schools.</p></div></div>
<div class="col-md-6"><div class="card-base h-100"><h3>Education Community</h3><p class="mb-0">Share articles, experiences, ideas and practical knowledge focused specifically on education.</p></div></div>
</div>

<h2 id="how-it-works">How the ecosystem works</h2>
<ol>
<li><strong>Discover:</strong> people find schools, teachers, resources and school-related services.</li>
<li><strong>Understand:</strong> structured information makes important details easier to locate and compare.</li>
<li><strong>Connect:</strong> parents, schools, teachers and providers can reach relevant audiences.</li>
<li><strong>Learn:</strong> students and educators can use educational content, articles and MCQ practice.</li>
<li><strong>Share:</strong> the community can publish education-focused knowledge and experiences.</li>
</ol>

<h2 id="not-a-single-product">More than one website, one ecosystem</h2>
<p>Skoolyst is not intended to remain a single large application forever. The architecture can evolve into specialized applications and subdomains, each focused on a particular problem while following the same ecosystem direction.</p>
<p>The exact separation and availability of products may change during development. The documentation therefore distinguishes between <strong>current modules</strong>, <strong>products in development</strong> and <strong>future planned applications</strong>.</p>

<h2 id="core-principle">Core principle</h2>
<div class="info-banner"><span class="info-icon">✓</span><div class="info-content"><p><strong>Better information leads to better decisions.</strong> Skoolyst does not choose a school, teacher or service for a user. It aims to organize useful information so people can discover options, understand them and decide for themselves.</p></div></div>

    <nav class="doc-prev-next" aria-label="Pagination"><a href="why-skoolyst.php"><span class="pn-label">&larr; Previous</span><span class="pn-title">Why Skoolyst?</span></a><a href="products.php" class="next"><span class="pn-label">Next &rarr;</span><span class="pn-title">Product Ecosystem</span></a></nav>
  </article>
</main>
<script type="module" src="/assets/js/data.js"></script>
<script type="module" src="/assets/js/layout.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php require __DIR__ . '/layout/footer.php'; ?>
</body>
</html>
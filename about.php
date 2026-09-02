<?php
// Static PHP documentation view.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Skoolyst | Skoolyst Documentation</title>
  <meta name="description" content="The purpose, vision, mission and product philosophy behind the Skoolyst educational technology ecosystem." />
  <link rel="canonical" href="https://docs.skoolyst.com/about.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="About Skoolyst | Skoolyst Documentation" />
  <meta property="og:description" content="The purpose, vision, mission and product philosophy behind the Skoolyst educational technology ecosystem." />
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
      <a href="index.php">Home</a><span class="breadcrumb-sep">/</span><span class="breadcrumb-current">About Skoolyst</span>
    </nav>
    <h1>About Skoolyst</h1>
<p class="lead">Skoolyst is being built as an education-focused technology ecosystem rather than a collection of unrelated tools.</p>
<h2 id="purpose">Purpose</h2>
<p>The purpose of Skoolyst is to address practical problems caused by fragmented education information: parents struggle to discover and compare schools, schools struggle to reach the right families, teachers struggle to present their professional profiles and find opportunities, and students need better ways to practice and measure knowledge.</p>
<h2 id="vision">Vision</h2><p>A connected digital education environment where useful information is easier to discover, understand and act upon.</p>
<h2 id="mission">Mission</h2><p>Build focused products that simplify school discovery, teacher-school connection, educational publishing, assessment, media and school-related commerce.</p>
<h2 id="product-philosophy">Product philosophy</h2>
<ul><li><strong>Education first:</strong> products should solve real education-related problems.</li><li><strong>Simple discovery:</strong> important information should not be hidden behind unfamiliar navigation.</li><li><strong>Structured information:</strong> common fields and patterns make comparison easier.</li><li><strong>Specialized experiences:</strong> each application should stay focused on its primary job.</li><li><strong>Ecosystem thinking:</strong> products can work independently while contributing to one larger education network.</li><li><strong>Continuous improvement:</strong> the platform is expected to evolve through testing, feedback and real-world use.</li></ul>
<h2 id="community">The community layer</h2><p>Skoolyst is also intended to become a place where education stakeholders can share experiences and practical knowledge. Articles, school information, teacher profiles, assessments and media can create a useful knowledge network around the core platform.</p>
<h2 id="documentation">About this documentation</h2><p>This documentation explains the purpose, products, features, guides, architecture and development status of Skoolyst. Because the ecosystem is under development, planned features and future applications are clearly identified rather than presented as already released functionality.</p>

    <nav class="doc-prev-next" aria-label="Pagination"><a href="faq.php"><span class="pn-label">&larr; Previous</span><span class="pn-title">FAQ</span></a></nav>
  </article>
</main>
<script type="module" src="/assets/js/data.js"></script>
<script type="module" src="/assets/js/layout.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php require __DIR__ . '/layout/footer.php'; ?>
</body>
</html>
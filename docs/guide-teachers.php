<?php
// Static PHP documentation view.
require __DIR__ . '/../config/config.php';
?>
<!doctype html>
<html lang="en">
<head>
  <?php require __DIR__ . '/../layout/head.php'; ?>
  <title>Guide: Skoolyst Teachers | Skoolyst Documentation</title>
  <meta name="description" content="Understand the planned teacher profile workflow for qualifications, experience, profile sharing and school-teacher discovery." />
  <link rel="canonical" href="https://docs.skoolyst.com/guide-teachers.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Guide: Skoolyst Teachers | Skoolyst Documentation" />
  <meta property="og:description" content="Understand the planned teacher profile workflow for qualifications, experience, profile sharing and school-teacher discovery." />
  <meta property="og:site_name" content="Skoolyst Documentation" />
</head>
<body>
<?php
$isHomePage = false;
require __DIR__ . '/../layout/page-start.php';
?>
<main id="main-content">
  <article class="doc-article">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="index.php">Home</a><span class="breadcrumb-sep">/</span><span class="breadcrumb-current">Skoolyst Teachers</span>
    </nav>
    <h1>Guide: Skoolyst Teachers</h1>
<p class="lead">Understand the purpose of the teacher profile product and how it is intended to improve the connection between teachers, schools and recruiters.</p>

      <?php
        $adPlacementCode = ADS_PLACEMENT_DOC_GUIDE;
        require __DIR__ . '/../includes/ad-slot.php';
      ?>

<div class="info-banner"><span class="info-icon">i</span><div class="info-content"><p><strong>Status:</strong> The teacher product is under development/planning. The workflow below documents the intended experience and should not be treated as a statement that every feature is already live.</p></div></div>

<h2 id="teacher-problem">The problem it addresses</h2>
<p>Teachers may have years of experience and strong qualifications but still depend on printed or emailed CVs. They may not know which schools are hiring, whether a school has seen their CV, or how to keep one professional version updated everywhere.</p>

<h2 id="profile">One reusable professional profile</h2>
<p>A teacher can maintain a profile containing:</p>
<ul><li>Education and degrees</li><li>Teaching experience</li><li>Subjects and skills</li><li>Achievements and certifications</li><li>Professional summary</li><li>Other information relevant to school recruitment</li></ul>

<h2 id="share">Share one profile link</h2>
<p>Instead of repeatedly preparing and sending different copies of a CV, the intended workflow is to maintain one online profile, update it when necessary and share its link with schools, recruiters and other relevant people.</p>

<h2 id="schools">How schools can benefit</h2>
<p>A searchable teacher directory can help schools discover candidates using relevant filters. When a suitable teacher is already present on the platform, a school can review the public profile and contact the teacher according to the available communication features.</p>

<h2 id="goal">The bigger goal</h2>
<p>Skoolyst Teachers is not only a CV builder. Its larger purpose is to create a discoverable professional connection between teachers and schools, reducing dependence on scattered resumes and informal hiring networks.</p>

    <nav class="doc-prev-next" aria-label="Pagination"><a href="docs/guide-mcqs.php"><span class="pn-label">&larr; Previous</span><span class="pn-title">MCQs Module</span></a><a href="products.php" class="next"><span class="pn-label">Next &rarr;</span><span class="pn-title">Product Ecosystem</span></a></nav>
  </article>
</main>
<?php require __DIR__ . '/../layout/footer.php'; ?>
</body>
</html>
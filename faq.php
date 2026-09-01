<?php
// Static PHP view. Backend logic can be introduced later without changing the page structure.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FAQ | Skoolyst Documentation</title>
  <meta name="description" content="Frequently asked questions about Skoolyst, its products, the ecosystem architecture and the documentation portal." />
  <link rel="canonical" href="https://docs.skoolyst.com/faq.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="FAQ | Skoolyst Documentation" />
  <meta property="og:description" content="Frequently asked questions about Skoolyst products and ecosystem." />
  <meta property="og:url" content="https://docs.skoolyst.com/faq.php" />
  <meta property="og:site_name" content="Skoolyst Documentation" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="FAQ | Skoolyst Documentation" />
  <meta name="twitter:description" content="Frequently asked questions about Skoolyst products and ecosystem." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/style.css" rel="stylesheet" />
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {"@type":"Question","name":"What is Skoolyst?","acceptedAnswer":{"@type":"Answer","text":"Skoolyst is an educational technology ecosystem designed to connect schools, teachers, students, parents and educational services through digital platforms."}},
      {"@type":"Question","name":"What products are part of Skoolyst?","acceptedAnswer":{"@type":"Answer","text":"The main Skoolyst application contains Schools Listing, Stores, Media and MCQs. Planned separate applications include Ads, Blogs, MCQs, Stores and Media under their own subdomains."}},
      {"@type":"Question","name":"Are all Skoolyst products separate applications?","acceptedAnswer":{"@type":"Answer","text":"No. Currently, Schools, Stores, Media and MCQs exist as modules within the main Skoolyst application. Separate subdomains represent the planned future architecture."}},
      {"@type":"Question","name":"What is currently available?","acceptedAnswer":{"@type":"Answer","text":"The main Skoolyst application is currently in development with its core modules: Schools Listing, Stores, Media and MCQs."}},
      {"@type":"Question","name":"Which products are coming soon?","acceptedAnswer":{"@type":"Answer","text":"Ads (ads.skoolyst.com), Blogs (blogs.skoolyst.com), MCQs (mcqs.skoolyst.com), Stores (stores.skoolyst.com) and Media (media.skoolyst.com) are all planned as separate applications with Coming Soon status."}}
    ]
  }
  </script>
</head>
<body>
  <main id="main-content">
    <article class="doc-article">
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <a href="index.php">Home</a>
        <span class="breadcrumb-sep">/</span>
        <span class="breadcrumb-current">FAQ</span>
      </nav>

      <h1>Frequently Asked Questions</h1>
      <p class="lead">Common questions about Skoolyst, its products and the ecosystem architecture.</p>

      <div class="accordion faq-section" id="faqAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
              What is Skoolyst?
            </button>
          </h2>
          <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <p>Skoolyst is an educational technology ecosystem designed to connect schools, teachers, students, parents and educational services through digital platforms. It brings together multiple modules — Schools, Stores, Media and MCQs — into a unified application, with plans to expand into a family of interconnected applications.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
              What products are part of Skoolyst?
            </button>
          </h2>
          <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <p>The main Skoolyst application currently contains four modules: Schools Listing, Stores, Media and MCQs. Additionally, several separate applications are planned: Ads, Blogs, and independent versions of MCQs, Stores and Media under their own subdomains.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
              Are all Skoolyst products separate applications?
            </button>
          </h2>
          <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <p>No. Currently, Schools, Stores, Media and MCQs all exist as modules within the main Skoolyst application. While separate subdomains like <code>mcqs.skoolyst.com</code>, <code>stores.skoolyst.com</code> and <code>media.skoolyst.com</code> are planned, they represent the future architecture — not the current state.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
              What is currently available?
            </button>
          </h2>
          <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <p>The main Skoolyst application is currently in development. It contains the core modules — Schools Listing, Stores, Media and MCQs — which are being actively built. No production versions have been released yet.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
              Which products are coming soon?
            </button>
          </h2>
          <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <p>The following products are planned as separate applications with "Coming Soon" status:</p>
              <ul>
                <li><strong>Ads</strong> — <code>ads.skoolyst.com</code></li>
                <li><strong>Blogs</strong> — <code>blogs.skoolyst.com</code></li>
                <li><strong>MCQs</strong> — <code>mcqs.skoolyst.com</code> (Planned / Coming Soon)</li>
                <li><strong>Stores</strong> — <code>stores.skoolyst.com</code> (Planned / Coming Soon)</li>
                <li><strong>Media</strong> — <code>media.skoolyst.com</code> (Planned / Coming Soon)</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
              Will MCQs become a separate application?
            </button>
          </h2>
          <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <p>Yes, MCQs is planned to become a separate application under <code>mcqs.skoolyst.com</code>. However, it currently operates as a module inside the main Skoolyst application. The separate subdomain represents the planned future architecture.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
              Will Stores become a separate application?
            </button>
          </h2>
          <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <p>Yes, Stores is planned to become a separate application under <code>stores.skoolyst.com</code>. Currently, it operates as a module within the main Skoolyst application. The separate subdomain represents the planned future architecture.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
              Will Media become a separate application?
            </button>
          </h2>
          <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <p>Yes, Media is planned to become a separate application under <code>media.skoolyst.com</code>. Currently, it operates as a module within the main Skoolyst application. The separate subdomain represents the planned future architecture.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9">
              What is the purpose of Skoolyst documentation?
            </button>
          </h2>
          <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <p>The Skoolyst documentation portal serves as the official reference for understanding the Skoolyst ecosystem. It provides guides, feature documentation, version history, release notes, news, FAQs and future developer API documentation — all in one place. It is designed to be the permanent official documentation hub for the Skoolyst platform.</p>
            </div>
          </div>
        </div>
      </div>

      <nav class="doc-prev-next" aria-label="Pagination">
        <a href="news.php">
          <span class="pn-label">&larr; Previous</span>
          <span class="pn-title">News &amp; Updates</span>
        </a>
        <a href="developers.php" class="next">
          <span class="pn-label">Next &rarr;</span>
          <span class="pn-title">API / Developers</span>
        </a>
      </nav>
    </article>
  </main>
  <script type="module" src="/assets/js/data.js"></script>
  <script type="module" src="/assets/js/layout.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

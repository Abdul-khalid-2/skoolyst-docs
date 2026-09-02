<?php
// Static PHP entry page. No backend logic is required at this stage.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skoolyst Documentation | Official Guides &amp; Platform Documentation</title>
  <meta name="description" content="Official Skoolyst documentation portal. Explore products, features, guides, updates, versions and future services for the Skoolyst educational technology ecosystem." />
  <link rel="canonical" href="https://docs.skoolyst.com/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Skoolyst Documentation | Official Guides & Platform Documentation" />
  <meta property="og:description" content="Understand the idea, ecosystem and products behind Skoolyst. Explore products, features, guides, updates and more." />
  <meta property="og:url" content="https://docs.skoolyst.com/" />
  <meta property="og:site_name" content="Skoolyst Documentation" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Skoolyst Documentation | Official Guides & Platform Documentation" />
  <meta name="twitter:description" content="Understand the idea, ecosystem and products behind Skoolyst." />
  <meta name="twitter:description" content="Understand the idea, ecosystem and products behind Skoolyst." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/style.css" rel="stylesheet" />
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Skoolyst Documentation",
    "url": "https://docs.skoolyst.com/",
    "description": "Official documentation portal for the Skoolyst educational technology ecosystem.",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://docs.skoolyst.com/?q={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }
  </script>
</head>
<body>
<?php
$isHomePage = true;
require __DIR__ . '/layout/header.php';
require __DIR__ . '/layout/search.php';
?>

  <main id="main-content">
    <!-- Hero -->
    <section class="home-hero">
      <div class="hero-inner">
        <h1>Skoolyst Documentation</h1>
        <p class="hero-tagline">Understand the idea, ecosystem and products behind Skoolyst.</p>
        <p class="hero-desc">Learn why Skoolyst was created, what problems it aims to solve, how its products connect parents, schools, teachers and students, and how the ecosystem is evolving.</p>
        <div class="hero-buttons">
          <a href="getting-started.php" class="btn-hero-primary">Get Started</a>
          <a href="products.php" class="btn-hero-secondary">Explore Products</a>
        </div>
        <div class="hero-search">
          <span class="hero-search-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
          </span>
          <input type="text" id="hero-search-input" placeholder="Search documentation..." aria-label="Search documentation" />
        </div>
      </div>
    </section>

    <!-- Quick Links -->
    <section class="home-section">
      <div class="home-content">
        <div class="section-header">
          <div class="section-label">Quick Access</div>
          <h2>Start Here</h2>
          <p>Get up to speed with Skoolyst quickly.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <a href="getting-started.php" class="quick-link">
              <span class="quick-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/></svg>
              </span>
              <span class="quick-link-text">
                <p class="quick-link-title">Getting Started</p>
                <p class="quick-link-desc">New to Skoolyst? Start here.</p>
              </span>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="overview.php" class="quick-link">
              <span class="quick-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/></svg>
              </span>
              <span class="quick-link-text">
                <p class="quick-link-title">Overview</p>
                <p class="quick-link-desc">What Skoolyst is and why it exists.</p>
              </span>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="guides.php" class="quick-link">
              <span class="quick-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/></svg>
              </span>
              <span class="quick-link-text">
                <p class="quick-link-title">Guides</p>
                <p class="quick-link-desc">Step-by-step documentation.</p>
              </span>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="developers.php" class="quick-link">
              <span class="quick-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
              </span>
              <span class="quick-link-text">
                <p class="quick-link-title">API / Developers</p>
                <p class="quick-link-desc">Developer documentation.</p>
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Skoolyst -->
    <section class="home-section">
      <div class="home-content">
        <div class="section-header">
          <div class="section-label">The Idea</div>
          <h2>Why Skoolyst Exists</h2>
          <p>Education information is often scattered across school websites, social media, advertisements, paper CVs, separate learning platforms and word of mouth.</p>
        </div>
        <div class="row g-4">
          <div class="col-lg-4"><div class="card-base h-100"><h3>For Parents</h3><p class="mb-0">Make school discovery easier by finding structured information and comparing factors such as distance, fees, curriculum, facilities, transport and reviews.</p></div></div>
          <div class="col-lg-4"><div class="card-base h-100"><h3>For Schools</h3><p class="mb-0">Give schools a structured digital presence and a better way to become discoverable to families without relying only on banners, social posts or a separate website.</p></div></div>
          <div class="col-lg-4"><div class="card-base h-100"><h3>For Teachers & Students</h3><p class="mb-0">Help teachers showcase professional experience and help students practice knowledge through education-focused tools and content.</p></div></div>
        </div>
        <div class="text-center mt-4"><a href="why-skoolyst.php" class="btn-hero-secondary">Read the Skoolyst Story &rarr;</a></div>
      </div>
    </section>

    <!-- Current Platform -->
    <section class="home-section bg-subtle">
      <div class="home-content">
        <div class="section-header">
          <div class="section-label">Current Platform</div>
          <h2>The Skoolyst Main Application</h2>
          <p>The core platform currently containing Schools, Stores, Media and MCQs as integrated modules.</p>
        </div>
        <div class="row g-4">
          <div class="col-lg-6">
            <div class="card-base product-card">
              <div class="product-icon icon-bg-cyan" style="width:44px;height:44px;border-radius:8px;display:flex;align-items:center;justify-content:center;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 22v-4a2 2 0 0 0-4 0v4"/><path d="m18 10 4 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-8l4-2"/><path d="M18 10V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v5"/><path d="M2 10h20"/></svg>
              </div>
              <h3 class="product-name">Skoolyst</h3>
              <span class="product-subdomain">skoolyst.com</span>
              <p class="product-desc">The main Skoolyst application currently containing Schools Listing, Stores, Media and MCQs as integrated modules. These services are being actively developed as part of the Skoolyst ecosystem.</p>
              <span class="status-badge status-available">Available</span>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="info-banner">
              <span class="info-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
              </span>
              <div class="info-content">
                <p><strong>About the current platform:</strong> Although MCQs, Stores and Media are planned as separate applications with their own subdomains, they currently exist as modules inside the main Skoolyst application. Their separate subdomains represent the planned future architecture, not the current state.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Separate / Upcoming Products -->
    <section class="home-section">
      <div class="home-content">
        <div class="section-header">
          <div class="section-label">Ecosystem</div>
          <h2>Separate &amp; Upcoming Products</h2>
          <p>These products are planned as independent applications under their own subdomains.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <div class="card-base product-card">
              <div class="product-icon icon-bg-gold" style="width:44px;height:44px;border-radius:8px;display:flex;align-items:center;justify-content:center;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"/><circle cx="7.5" cy="7.5" r=".5" fill="currentColor"/></svg>
              </div>
              <h3 class="product-name">Ads</h3>
              <span class="product-subdomain">ads.skoolyst.com</span>
              <p class="product-desc">Classified advertising platform for educational services and resources.</p>
              <span class="status-badge status-coming-soon">Coming Soon</span>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card-base product-card">
              <div class="product-icon icon-bg-blue" style="width:44px;height:44px;border-radius:8px;display:flex;align-items:center;justify-content:center;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6Z"/></svg>
              </div>
              <h3 class="product-name">Blogs</h3>
              <span class="product-subdomain">blogs.skoolyst.com</span>
              <p class="product-desc">Educational blogging platform for articles, insights and stories.</p>
              <span class="status-badge status-coming-soon">Coming Soon</span>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card-base product-card">
              <div class="product-icon icon-bg-green" style="width:44px;height:44px;border-radius:8px;display:flex;align-items:center;justify-content:center;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m22 4-10 10.01-3-3"/></svg>
              </div>
              <h3 class="product-name">MCQs</h3>
              <span class="product-subdomain">mcqs.skoolyst.com</span>
              <p class="product-desc">Dedicated multiple-choice question platform for practice and assessment.</p>
              <span class="status-badge status-coming-soon">Coming Soon</span>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card-base product-card">
              <div class="product-icon icon-bg-purple" style="width:44px;height:44px;border-radius:8px;display:flex;align-items:center;justify-content:center;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
              </div>
              <h3 class="product-name">Stores</h3>
              <span class="product-subdomain">stores.skoolyst.com</span>
              <p class="product-desc">Marketplace for educational products, books and learning materials.</p>
              <span class="status-badge status-coming-soon">Coming Soon</span>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card-base product-card">
              <div class="product-icon icon-bg-navy" style="width:44px;height:44px;border-radius:8px;display:flex;align-items:center;justify-content:center;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/></svg>
              </div>
              <h3 class="product-name">Media</h3>
              <span class="product-subdomain">media.skoolyst.com</span>
              <p class="product-desc">Educational media hub for videos, audio and visual learning content.</p>
              <span class="status-badge status-coming-soon">Coming Soon</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Documentation Links -->
    <section class="home-section bg-subtle">
      <div class="home-content">
        <div class="section-header">
          <div class="section-label">Browse</div>
          <h2>Explore Documentation</h2>
          <p>Dive deeper into specific areas of the Skoolyst ecosystem.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <a href="features.php" class="quick-link">
              <span class="quick-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
              </span>
              <span class="quick-link-text">
                <p class="quick-link-title">Features</p>
                <p class="quick-link-desc">Feature documentation by product.</p>
              </span>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="versions.php" class="quick-link">
              <span class="quick-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
              </span>
              <span class="quick-link-text">
                <p class="quick-link-title">Versions</p>
                <p class="quick-link-desc">Version history and development status.</p>
              </span>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="release-notes.php" class="quick-link">
              <span class="quick-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8"/><path d="M15 18h-5"/></svg>
              </span>
              <span class="quick-link-text">
                <p class="quick-link-title">Release Notes</p>
                <p class="quick-link-desc">Latest updates and changes.</p>
              </span>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="news.php" class="quick-link">
              <span class="quick-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6Z"/></svg>
              </span>
              <span class="quick-link-text">
                <p class="quick-link-title">News &amp; Updates</p>
                <p class="quick-link-desc">Announcements and product news.</p>
              </span>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="faq.php" class="quick-link">
              <span class="quick-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
              </span>
              <span class="quick-link-text">
                <p class="quick-link-title">FAQ</p>
                <p class="quick-link-desc">Frequently asked questions.</p>
              </span>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="about.php" class="quick-link">
              <span class="quick-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
              </span>
              <span class="quick-link-text">
                <p class="quick-link-title">About Skoolyst</p>
                <p class="quick-link-desc">Vision, mission and philosophy.</p>
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script type="module" src="/assets/js/data.js"></script>
  <script type="module" src="/assets/js/layout.js"></script>

<?php require __DIR__ . '/layout/footer.php'; ?>
</body>
</html>

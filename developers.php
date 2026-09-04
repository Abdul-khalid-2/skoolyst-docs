<?php
// Static PHP view. Backend logic can be introduced later without changing the page structure.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>API &amp; Developer Documentation | Skoolyst</title>
  <meta name="description" content="Developer documentation for the Skoolyst platform. API overview, authentication, endpoints, webhooks, errors, rate limits and SDKs — currently being prepared." />
  <link rel="canonical" href="https://docs.skoolyst.com/developers.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="API & Developer Documentation | Skoolyst" />
  <meta property="og:description" content="Developer documentation for the Skoolyst platform. Currently being prepared." />
  <meta property="og:url" content="https://docs.skoolyst.com/developers.php" />
  <meta property="og:site_name" content="Skoolyst Documentation" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="API & Developer Documentation | Skoolyst" />
  <meta name="twitter:description" content="Developer documentation for the Skoolyst platform. Currently being prepared." />
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
        <span class="breadcrumb-current">API / Developers</span>
      </nav>

      <h1>API &amp; Developer Documentation</h1>
      <p class="lead">Developer resources for integrating with and building on the Skoolyst platform.</p>

      <div class="api-placeholder">
        <div class="api-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
        <h2>Documentation Being Prepared</h2>
        <p>Full developer API documentation for the Skoolyst platform is still being prepared. One real, live API is already documented below — <a href="#ads-api">Skoolyst Ads</a> — and more endpoints will be added here as other Skoolyst applications expose their own APIs.</p>
      </div>

      <h2 id="ads-api">Skoolyst Ads API</h2>
      <p>Skoolyst Ads (<a href="https://ads.skoolyst.com">ads.skoolyst.com</a>) is the first Skoolyst application with a real, public API. It lets a connected app request an eligible ad for one of its own placements. Full guide: <a href="../docs/guide-ads.php">Skoolyst Ads</a>.</p>
      <pre><code># Get an ad for a placement

## Description
Returns one eligible ad for the requesting app's given placement, or
null if nothing currently qualifies.

## Request
- Method: GET
- URL: /api/v1/ads/serve
- Headers: Authorization: Bearer &lt;connected-app-api-key&gt;
- Query: placement=&lt;placement-code&gt;

## Response
Status: 200 OK
Content-Type: application/json

{
  "success": true,
  "data": {
    "ad": {
      "id": 1,
      "title": "Speak Confidently in 8 Weeks",
      "description": "Small group classes",
      "image_path": "/uploads/ads/example.jpg",
      "cta_text": "Book Now",
      "click_url": "https://example.com/enroll"
    }
  }
}

## Errors
| Status | Description                   |
|--------|--------------------------------|
| 401    | Missing or invalid API key    |
| 404    | Unknown app or placement code |</code></pre>
      <p>Every connected app authenticates with its own API key, generated and, if needed, regenerated from Admin → Connected Apps. There is no shared/global key — one app's key can be revoked without affecting any other app's integration.</p>

      <h2 id="planned-documentation">Planned Documentation Sections</h2>
      <p>The following sections will be documented as more of the Skoolyst API is developed:</p>

      <div class="row g-3 mt-2">
        <div class="col-md-6 col-lg-4">
          <div class="card-base">
            <h3 style="font-size:1rem;margin-bottom:0.5rem">API Overview</h3>
            <p style="font-size:0.8125rem;color:var(--text-muted);margin:0">Introduction to the Skoolyst API, its architecture and capabilities.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card-base">
            <h3 style="font-size:1rem;margin-bottom:0.5rem">Authentication</h3>
            <p style="font-size:0.8125rem;color:var(--text-muted);margin:0">How to authenticate API requests using API keys and tokens.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card-base">
            <h3 style="font-size:1rem;margin-bottom:0.5rem">Endpoints</h3>
            <p style="font-size:0.8125rem;color:var(--text-muted);margin:0">Complete reference of available API endpoints and methods.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card-base">
            <h3 style="font-size:1rem;margin-bottom:0.5rem">Request / Response</h3>
            <p style="font-size:0.8125rem;color:var(--text-muted);margin:0">Request formats, response structures and data types.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card-base">
            <h3 style="font-size:1rem;margin-bottom:0.5rem">API Keys</h3>
            <p style="font-size:0.8125rem;color:var(--text-muted);margin:0">How to generate, manage and revoke API keys.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card-base">
            <h3 style="font-size:1rem;margin-bottom:0.5rem">Webhooks</h3>
            <p style="font-size:0.8125rem;color:var(--text-muted);margin:0">Subscribe to platform events via webhook notifications.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card-base">
            <h3 style="font-size:1rem;margin-bottom:0.5rem">Errors</h3>
            <p style="font-size:0.8125rem;color:var(--text-muted);margin:0">Error codes, error response format and troubleshooting.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card-base">
            <h3 style="font-size:1rem;margin-bottom:0.5rem">Rate Limits</h3>
            <p style="font-size:0.8125rem;color:var(--text-muted);margin:0">Rate limiting policies, headers and best practices.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card-base">
            <h3 style="font-size:1rem;margin-bottom:0.5rem">SDKs</h3>
            <p style="font-size:0.8125rem;color:var(--text-muted);margin:0">Official software development kits for popular languages.</p>
          </div>
        </div>
      </div>

      <h2 id="documentation-template">Documentation Template</h2>
      <p>When API documentation is added, it will follow a structure similar to this:</p>
      <pre><code># Endpoint Name

## Description
Brief description of what this endpoint does.

## Request
- Method: GET / POST / PUT / DELETE
- URL: /api/v1/resource
- Headers: Authorization: Bearer &lt;token&gt;

## Parameters
| Parameter | Type   | Required | Description |
|-----------|--------|----------|-------------|
| id        | string | Yes      | Resource ID |

## Response
Status: 200 OK
Content-Type: application/json

{
  "data": { ... },
  "status": "success"
}

## Errors
| Status | Code         | Description           |
|--------|------------- |-----------------------|
| 400    | bad_request  | Invalid parameters    |
| 401    | unauthorized | Authentication failed |
| 404    | not_found    | Resource not found    |</code></pre>

      <p class="placeholder-notice">This template is for illustration only, beyond the real Skoolyst Ads API documented above.</p>

      <nav class="doc-prev-next" aria-label="Pagination">
        <a href="faq.php">
          <span class="pn-label">&larr; Previous</span>
          <span class="pn-title">FAQ</span>
        </a>
        <a href="about.php" class="next">
          <span class="pn-label">Next &rarr;</span>
          <span class="pn-title">About Skoolyst</span>
        </a>
      </nav>
    </article>
  </main>
  <script type="module" src="/assets/js/data.js"></script>
  <script type="module" src="/assets/js/layout.js"></script>

<?php require __DIR__ . '/layout/footer.php'; ?>
</body>
</html>

<?php
// Static PHP view. Backend logic can be introduced later without changing the page structure.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Guide: Skoolyst Ads | Skoolyst Documentation</title>
  <meta name="description" content="How Skoolyst Ads works — the centralized advertising engine that lets advertisers submit ads and connected Skoolyst apps request and display them through a shared API." />
  <link rel="canonical" href="https://docs.skoolyst.com/docs/guide-ads.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Guide: Skoolyst Ads | Skoolyst Documentation" />
  <meta property="og:description" content="How Skoolyst Ads works — advertisers, admin moderation, placements and the API connected apps use to request ads." />
  <meta property="og:url" content="https://docs.skoolyst.com/docs/guide-ads.php" />
  <meta property="og:site_name" content="Skoolyst Documentation" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="Guide: Skoolyst Ads | Skoolyst Documentation" />
  <meta name="twitter:description" content="How Skoolyst Ads works — advertisers, admin moderation, placements and the API connected apps use to request ads." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/style.css" rel="stylesheet" />
</head>
<body>
<?php
$isHomePage = false;
require __DIR__ . '/../layout/header.php';
require __DIR__ . '/../layout/sidebar.php';
require __DIR__ . '/../layout/search.php';
?>

  <main id="main-content">
    <article class="doc-article">
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <a href="../index.php">Home</a>
        <span class="breadcrumb-sep">/</span>
        <a href="../guides.php">Guides</a>
        <span class="breadcrumb-sep">/</span>
        <span class="breadcrumb-current">Ads</span>
      </nav>

      <h1>Skoolyst Ads</h1>
      <p class="lead">Skoolyst Ads is the centralized advertising engine for the Skoolyst ecosystem. Advertisers submit ads, an admin reviews them, and any connected Skoolyst application can request and display approved ads for its own placements through one shared API.</p>
      <p><span class="status-badge status-available">Available — v1</span></p>

      <div class="info-banner">
        <span class="info-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
        </span>
        <div class="info-content">
          <p><strong>Website:</strong> <a href="https://ads.skoolyst.com">ads.skoolyst.com</a>. Unlike most other Skoolyst products in this documentation, Ads is not a planning-stage module — it is a deployed, working application with its own database, advertiser dashboard, admin panel and public API, currently on its first tracked release (v1). Future changes to it will be documented as bug fixes, modifications and updates in the <a href="../release-notes.php">Release Notes</a>.</p>
        </div>
      </div>

      <h2 id="overview">Overview</h2>
      <p>Every Skoolyst application could build its own ad-management system, but that would mean repeating the same advertiser dashboard, moderation workflow and ad-serving logic in every app. Skoolyst Ads exists so this only has to be built once: it is a separate application that any Skoolyst property can <strong>connect</strong> to, so all of them share one advertising infrastructure instead of maintaining separate ones.</p>
      <p>Three kinds of participants use it:</p>
      <ul>
        <li><strong>Advertisers</strong> — sign up, submit ads for a specific connected app, and track their own ad's clicks and impressions.</li>
        <li><strong>Admins</strong> — review and approve or reject submitted ads, manage which apps are connected, manage those apps' placements, and can pause or resume any ad.</li>
        <li><strong>Connected apps</strong> — any other Skoolyst property (for example <code>teachers.skoolyst.com</code>) that calls the Ads API to fetch an ad for one of its own placements and display it to its own users.</li>
      </ul>

      <h2 id="how-it-works">How it works, end to end</h2>
      <ol>
        <li>An admin registers a connected app in Admin → Connected Apps, which generates an API key for that app.</li>
        <li>The admin defines that app's placements — the named slots an ad can be shown in, for example <code>header</code>, <code>footer</code> or <code>sidebar</code>. Every connected app defines its own set of placements independently.</li>
        <li>An advertiser creates an ad: they pick the target app, choose which of that app's placements it should run on, and provide the ad's content and an optional schedule.</li>
        <li>The ad starts in <strong>Pending</strong> status. An admin reviews it and either approves it (making it <strong>Active</strong>) or rejects it.</li>
        <li>The connected app calls the Ads API, asking "what ad should I show for placement X?" Skoolyst Ads returns one eligible active ad for that app and placement, or nothing if none qualifies.</li>
        <li>The connected app displays the ad and is responsible for reporting clicks and impressions back so the advertiser and admin can see performance.</li>
      </ol>

      <h2 id="connected-apps">Connected apps, API keys and placements</h2>
      <p>An advertiser can only target apps that an admin has already connected. Each connected app has:</p>
      <ul>
        <li>A <strong>name</strong>, <strong>code</strong> and <strong>domain</strong>.</li>
        <li>Its own <strong>API key</strong>, used to authenticate that app's requests to the Ads API. Keys can be regenerated by an admin if one is ever compromised.</li>
        <li>A <strong>status</strong> — <code>active</code> or <code>paused</code>. A paused app's ads stop being requestable even if they were already approved.</li>
        <li>Its own list of <strong>placements</strong> — named ad slots such as <code>header</code>, <code>footer</code> or <code>sidebar</code>, managed from Admin → Connected Apps. Placement codes only need to be unique within that one app, not across the whole ecosystem, so two different apps can both have a placement called <code>header</code> without conflicting.</li>
      </ul>
      <p>A placement can only be deleted once no ad is still linked to it — this is a deliberate safeguard, since placements and ads are connected at the database level and removing an in-use placement would otherwise take its ads down with it.</p>

      <h2 id="creating-an-ad">Creating an advertisement</h2>
      <p>An advertiser submits an ad with the following:</p>
      <table>
        <thead><tr><th>Field</th><th>Description</th></tr></thead>
        <tbody>
          <tr><td>Advertiser name</td><td>The name shown as the ad's sender/sponsor.</td></tr>
          <tr><td>Title &amp; description</td><td>The ad's headline and supporting text.</td></tr>
          <tr><td>Image</td><td>The ad creative shown alongside the text.</td></tr>
          <tr><td>Call-to-action text</td><td>The button/link label, for example "Book Now" or "Learn More".</td></tr>
          <tr><td>Click URL</td><td>Where a click on the ad should lead.</td></tr>
          <tr><td>Target app</td><td>Which connected app this ad should run on.</td></tr>
          <tr><td>Placement(s)</td><td>One, several, or all of the target app's placements — see below.</td></tr>
          <tr><td>Start / end date</td><td>Optional schedule window. Left blank, an approved ad runs with no date restriction.</td></tr>
        </tbody>
      </table>
      <p>Once created, an ad's target app and placement selection are fixed — they cannot be changed afterward. Everything else (title, description, image, CTA, click URL, schedule) can still be edited, which resets the ad back to <strong>Pending</strong> for re-review.</p>

      <h2 id="multi-placement">Targeting more than one placement</h2>
      <p>An ad is not limited to a single placement. If a connected app defines several placements — for example <code>header</code>, <code>footer</code> and <code>sidebar</code> — an advertiser can select any one of them, several, or all of them for the same ad, and it will run on every placement selected. This is handled by linking the ad to each chosen placement individually, rather than the ad only ever being able to point at one slot.</p>

      <h2 id="moderation">Moderation and ad status</h2>
      <p>Every ad moves through a status lifecycle that both the advertiser and the admin can see:</p>
      <table>
        <thead><tr><th>Status</th><th>Meaning</th></tr></thead>
        <tbody>
          <tr><td><code>pending</code></td><td>Submitted (or just edited) and waiting for admin review. Not yet servable.</td></tr>
          <tr><td><code>active</code></td><td>Approved and within its schedule window — eligible to be returned by the API.</td></tr>
          <tr><td><code>paused</code></td><td>Temporarily stopped by an admin or advertiser without losing the ad's history.</td></tr>
          <tr><td><code>rejected</code></td><td>Reviewed and declined by an admin, with a reason recorded.</td></tr>
          <tr><td><code>ended</code></td><td>Past its scheduled end date.</td></tr>
          <tr><td><code>deleted</code></td><td>Removed by the advertiser or an admin. Kept as a soft delete rather than erased outright, so moderation history is preserved.</td></tr>
        </tbody>
      </table>
      <p>Every moderation action an admin takes — approving, rejecting, pausing, reactivating, regenerating an app's API key, or changing a connected app's or placement's setup — is written to an audit log, so there is a record of who did what and when.</p>

      <h2 id="tracking">Click and impression tracking</h2>
      <p>Skoolyst Ads records impressions (how often an ad was shown) and clicks (how often it was clicked) per day, per ad. Advertisers can see these numbers for their own ads, and the admin can see totals across every ad, to understand which ads are performing well.</p>

      <h2 id="api">The Ads API</h2>
      <p>Connected apps fetch ads through one public endpoint. Full request/response reference:</p>
      <pre><code># Get an ad for a placement

## Description
Returns one eligible ad for the requesting app's given placement, or
null if nothing currently qualifies (no approved ad targets that
placement, the app is paused, or nothing is within its schedule
window).

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

If nothing is eligible, "ad" is null rather than the request failing.

## Errors
| Status | Description                              |
|--------|-------------------------------------------|
| 401    | Missing or invalid API key                |
| 404    | Unknown app or placement code             |</code></pre>
      <p>Each connected app authenticates with its own API key rather than a shared one, so one app's key can be revoked or regenerated without affecting any other app's integration.</p>

      <h2 id="version">Version 1</h2>
      <p>What is documented on this page is Skoolyst Ads' first tracked release. It includes:</p>
      <ul>
        <li>Advertiser and admin accounts with role-based access</li>
        <li>Full ad CRUD: create, edit, pause/resume, delete (soft delete)</li>
        <li>Admin moderation: approve, reject, pause, reactivate, with an audit log of every action</li>
        <li>Connected app management with per-app API keys</li>
        <li>Placement management, scoped per connected app</li>
        <li>Multi-placement ad targeting — one ad can run on several of an app's placements at once</li>
        <li>Click and impression tracking, per ad and per day</li>
        <li>The public <code>GET /ads/serve</code> API used by connected apps</li>
      </ul>
      <p>See <a href="../versions.php#ads">Versions</a> for how this fits alongside the rest of the Skoolyst ecosystem, and <a href="../release-notes.php#ads">Release Notes</a> for the dated v1 entry. From here on, changes to Skoolyst Ads are tracked as bug fixes, modifications and updates against this baseline rather than as a from-scratch build.</p>

      <h2 id="related">Related Documentation</h2>
      <ul>
        <li><a href="../features.php#ads">Ads Features</a></li>
        <li><a href="../versions.php#ads">Ads Version Details</a></li>
        <li><a href="../developers.php#ads-api">Ads API Reference</a></li>
        <li><a href="../products.php">Product Ecosystem</a></li>
      </ul>

      <nav class="doc-prev-next" aria-label="Pagination">
        <a href="guide-mcqs.php">
          <span class="pn-label">&larr; Previous</span>
          <span class="pn-title">MCQs Module</span>
        </a>
        <a href="../guides.php" class="next">
          <span class="pn-label">Next &rarr;</span>
          <span class="pn-title">All Guides</span>
        </a>
      </nav>
    </article>
  </main>
  <script type="module" src="/assets/js/data.js"></script>
  <script type="module" src="/assets/js/layout.js"></script>

<?php require __DIR__ . '/../layout/footer.php'; ?>
</body>
</html>

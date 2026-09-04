<?php
/**
 * Static route map for the current documentation site.
 *
 * This file is intentionally declarative only. No controller/model/service
 * layer is created until the documentation site becomes dynamic.
 */
return [
    '/' => 'index.php',
    '/getting-started' => 'getting-started.php',
    '/overview' => 'overview.php',
    '/products' => 'products.php',
    '/guides' => 'guides.php',
    '/features' => 'features.php',
    '/versions' => 'versions.php',
    '/release-notes' => 'release-notes.php',
    '/news' => 'news.php',
    '/faq' => 'faq.php',
    '/developers' => 'developers.php',
    '/about' => 'about.php',

    '/docs/guide-schools' => 'docs/guide-schools.php',
    '/docs/guide-stores' => 'docs/guide-stores.php',
    '/docs/guide-media' => 'docs/guide-media.php',
    '/docs/guide-mcqs' => 'docs/guide-mcqs.php',
    '/docs/guide-ads' => 'docs/guide-ads.php',
];

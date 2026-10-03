/* ==========================================================================
   Skoolyst Documentation — Navigation Data
   ========================================================================== */

const NAV = {
  main: [
    { label: 'Documentation', href: './' },
    { label: 'Getting Started', href: 'getting-started' },
    { label: 'Why Skoolyst?', href: 'why-skoolyst' },
    { label: 'Overview', href: 'overview' },
    { label: 'Products', href: 'products' },
    { label: 'Guides', href: 'guides' },
    { label: 'Features', href: 'features' },
    { label: 'Versions', href: 'versions' },
    { label: 'Release Notes', href: 'release-notes' },
    { label: 'News', href: 'news' },
    { label: 'FAQ', href: 'faq' },
    { label: 'API', href: 'developers' },
    { label: 'About', href: 'about' },
  ],
  sidebar: [
    {
      heading: 'Getting Started',
      items: [
        { label: 'Introduction', href: 'getting-started' },
        { label: 'Why Skoolyst?', href: 'why-skoolyst' },
        { label: 'What is Skoolyst?', href: 'overview' },
        { label: 'Product Ecosystem', href: 'products' },
      ],
    },
    {
      heading: 'Documentation',
      items: [
        { label: 'Guides', href: 'guides' },
        { label: 'Features', href: 'features' },
        { label: 'Versions', href: 'versions' },
        { label: 'Release Notes', href: 'release-notes' },
        { label: 'News & Updates', href: 'news' },
        { label: 'FAQ', href: 'faq' },
      ],
    },
    {
      heading: 'Resources',
      items: [
        { label: 'API / Developers', href: 'developers' },
        { label: 'About Skoolyst', href: 'about' },
      ],
    },
  ],
};

const PRODUCTS = [
  {
    name: 'Skoolyst',
    subdomain: 'skoolyst.com',
    desc: 'Main platform containing Schools, Stores, Media & MCQs.',
    status: 'available',
    icon: 'icon-bg-cyan',
  },
  {
    name: 'Ads',
    subdomain: 'ads.skoolyst.com',
    desc: 'Centralized advertising engine — advertisers submit ads, admins moderate, connected apps request and display them via API.',
    status: 'available',
    icon: 'icon-bg-gold',
  },
  {
    name: 'Blogs',
    subdomain: 'blogs.skoolyst.com',
    desc: 'Educational blogging platform for articles, insights and stories.',
    status: 'coming-soon',
    icon: 'icon-bg-blue',
  },
  {
    name: 'MCQs',
    subdomain: 'mcqs.skoolyst.com',
    desc: 'Dedicated multiple-choice question platform for practice and assessment.',
    status: 'coming-soon',
    icon: 'icon-bg-green',
  },
  {
    name: 'Stores',
    subdomain: 'stores.skoolyst.com',
    desc: 'Marketplace for educational products, books and learning materials.',
    status: 'coming-soon',
    icon: 'icon-bg-purple',
  },
  {
    name: 'Media',
    subdomain: 'media.skoolyst.com',
    desc: 'Educational media hub for videos, audio and visual learning content.',
    status: 'coming-soon',
    icon: 'icon-bg-navy',
  },
];

const SEARCH_INDEX = [
  { title: 'Skoolyst Documentation', desc: 'Official guides, platform documentation and ecosystem overview.', url: 'index.php' },
  { title: 'Getting Started', desc: 'Beginner-friendly guide to understanding the Skoolyst ecosystem.', url: 'getting-started.php' },
  { title: 'Why Skoolyst?', desc: 'The story behind Skoolyst, the education problems it aims to solve and how the ecosystem helps.', url: 'why-skoolyst.php' },
  { title: 'Skoolyst Overview', desc: 'What Skoolyst is, who it serves, its vision, mission and ecosystem concept.', url: 'overview.php' },
  { title: 'Product Ecosystem', desc: 'Overview of Skoolyst products, their purpose and planned architecture.', url: 'products.php' },
  { title: 'Guides', desc: 'Documentation guides organized by category and product.', url: 'guides.php' },
  { title: 'Features', desc: 'Feature documentation organized by product with status badges.', url: 'features.php' },
  { title: 'Versions', desc: 'Version history and development status of Skoolyst releases.', url: 'versions.php' },
  { title: 'Release Notes', desc: 'Latest updates, changes, fixes and known issues.', url: 'release-notes.php' },
  { title: 'News & Updates', desc: 'Product updates, announcements and ecosystem news.', url: 'news.php' },
  { title: 'FAQ', desc: 'Frequently asked questions about Skoolyst products and ecosystem.', url: 'faq.php' },
  { title: 'API / Developers', desc: 'Developer documentation for future API integration.', url: 'developers.php' },
  { title: 'About Skoolyst', desc: 'Vision, mission, product philosophy and development approach.', url: 'about.php' },
  { title: 'Guide: Schools Listing', desc: 'How to use the Schools listing module in Skoolyst.', url: 'docs/guide-schools.php' },
  { title: 'Guide: Stores Module', desc: 'How to use the Stores module in Skoolyst.', url: 'docs/guide-stores.php' },
  { title: 'Guide: Media Module', desc: 'How to use the Media module in Skoolyst.', url: 'docs/guide-media.php' },
  { title: 'Guide: Teachers', desc: 'Teacher profiles, professional information and the planned school-teacher connection workflow.', url: 'docs/guide-teachers.php' },
  { title: 'Guide: MCQs Module', desc: 'How to use the MCQs module in Skoolyst.', url: 'docs/guide-mcqs.php' },
  { title: 'Guide: Skoolyst Ads', desc: 'How the advertising engine works — connected apps, placements, ad moderation and the API.', url: 'docs/guide-ads.php' },
];

if (typeof window !== 'undefined') {
  window.NAV = NAV;
  window.PRODUCTS = PRODUCTS;
  window.SEARCH_INDEX = SEARCH_INDEX;
}

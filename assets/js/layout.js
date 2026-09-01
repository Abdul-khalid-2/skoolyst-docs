/* ==========================================================================
   Skoolyst Documentation — Layout Injector
   Injects shared header, sidebar, footer, search modal, back-to-top
   ========================================================================== */

(function () {
  'use strict';

  const ICON_SVG = {
    search: '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>',
    menu: '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>',
    close: '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>',
    arrowUp: '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>',
    book: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/></svg>',
    grid: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="7" x="3" y="3" rx="1"/><rect width="7" height="7" x="14" y="3" rx="1"/><rect width="7" height="7" x="14" y="14" rx="1"/><rect width="7" height="7" x="3" y="14" rx="1"/></svg>',
    compass: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/></svg>',
    code: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>',
    info: '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>',
    rocket: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.16 5-1 5-1"/><path d="M12 15v5s3.03-.55 4-2c1.16-1.62 1-5 1-5"/></svg>',
    layers: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>',
    tag: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"/><circle cx="7.5" cy="7.5" r=".5" fill="currentColor"/></svg>',
    newspaper: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6Z"/></svg>',
    helpCircle: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>',
    arrowRight: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>',
    arrowLeft: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>',
    shoppingBag: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>',
    playCircle: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/></svg>',
    checkCircle: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m22 4-10 10.01-3-3"/></svg>',
    helpQuestion: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>',
    school: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 22v-4a2 2 0 0 0-4 0v4"/><path d="m18 10 4 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-8l4-2"/><path d="M18 10V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v5"/><path d="M2 10h20"/><path d="M2 14h20"/></svg>',
  };

  function getBasePath() {
    var path = window.location.pathname;
    if (path.indexOf('/docs/') !== -1) return '../';
    return '';
  }

  var BASE = '';

  function getCurrentPage() {
    var path = window.location.pathname.split('/').pop() || 'index.php';
    return path;
  }

  function isHome() {
    var path = window.location.pathname.split('/').pop();
    return path === '' || path === 'index.php';
  }

  function buildHeader() {
    var current = getCurrentPage();
    var navLinks = NAV.main.map(function (item) {
      var isActive = item.href === current;
      return '<a class="nav-link' + (isActive ? ' active' : '') + '" href="' + BASE + item.href + '">' + item.label + '</a>';
    }).join('');

    return '' +
      '<a href="#main-content" class="skip-link">Skip to main content</a>' +
      '<header class="site-header" role="banner">' +
        '<div class="header-inner">' +
          '<a href="' + BASE + 'index.php" class="logo-link" aria-label="Skoolyst Documentation Home">' +
            '<span class="logo-mark">S</span>' +
            '<span class="logo-text">Skoolyst<span class="docs-label">Documentation</span></span>' +
          '</a>' +
          '<nav class="header-nav" aria-label="Primary">' + navLinks + '</nav>' +
          '<div class="header-actions">' +
            '<div class="version-selector">' +
              '<span class="version-label">Version</span>' +
              '<select id="version-select" aria-label="Documentation version">' +
                '<option value="latest">Latest</option>' +
                '<option value="v0.2">v0.2 (Dev)</option>' +
                '<option value="v0.1">v0.1 (Dev)</option>' +
              '</select>' +
            '</div>' +
            '<button class="search-trigger" id="search-trigger" aria-label="Search documentation">' +
              ICON_SVG.search +
              '<span class="search-placeholder">Search docs...</span>' +
              '<kbd>Ctrl K</kbd>' +
            '</button>' +
            '<button class="mobile-toggle" id="mobile-toggle" aria-label="Toggle navigation menu" aria-expanded="false">' +
              ICON_SVG.menu +
            '</button>' +
          '</div>' +
        '</div>' +
      '</header>';
  }

  function buildSidebar() {
    var current = getCurrentPage();
    var sections = NAV.sidebar.map(function (section) {
      var items = section.items.map(function (item) {
        var isActive = item.href === current;
        return '<li><a href="' + BASE + item.href + '" class="' + (isActive ? 'active' : '') + '">' + item.label + '</a></li>';
      }).join('');
      return '' +
        '<div class="sidebar-section">' +
          '<div class="sidebar-heading">' + section.heading + '</div>' +
          '<ul class="sidebar-nav">' + items + '</ul>' +
        '</div>';
    }).join('');

    return '' +
      '<aside class="doc-sidebar" id="doc-sidebar" aria-label="Documentation navigation">' +
        sections +
      '</aside>' +
      '<div class="sidebar-backdrop" id="sidebar-backdrop"></div>';
  }

  function buildSearchModal() {
    return '' +
      '<div class="search-modal" id="search-modal" role="dialog" aria-label="Search documentation" aria-modal="true">' +
        '<div class="search-panel">' +
          '<div class="search-input-wrap">' +
            ICON_SVG.search +
            '<input type="text" class="search-input" id="search-input" placeholder="Search documentation..." autocomplete="off" />' +
            '<button class="search-close" id="search-close" aria-label="Close search">' + ICON_SVG.close + '</button>' +
          '</div>' +
          '<div class="search-results" id="search-results"></div>' +
        '</div>' +
      '</div>';
  }

  function buildFooter() {
    return '' +
      '<footer class="site-footer" role="contentinfo">' +
        '<div class="footer-inner">' +
          '<div class="footer-grid">' +
            '<div class="footer-brand">' +
              '<a href="' + BASE + 'index.php" class="logo-link" style="margin-bottom:0.5rem">' +
                '<span class="logo-mark">S</span>' +
                '<span class="logo-text">Skoolyst<span class="docs-label">Documentation</span></span>' +
              '</a>' +
              '<p>Official documentation for the Skoolyst educational technology ecosystem.</p>' +
            '</div>' +
            '<div>' +
              '<h4>Documentation</h4>' +
              '<ul>' +
                '<li><a href="' + BASE + 'getting-started.php">Getting Started</a></li>' +
                '<li><a href="' + BASE + 'overview.php">Overview</a></li>' +
                '<li><a href="' + BASE + 'guides.php">Guides</a></li>' +
                '<li><a href="' + BASE + 'features.php">Features</a></li>' +
              '</ul>' +
            '</div>' +
            '<div>' +
              '<h4>Resources</h4>' +
              '<ul>' +
                '<li><a href="' + BASE + 'versions.php">Versions</a></li>' +
                '<li><a href="' + BASE + 'release-notes.php">Release Notes</a></li>' +
                '<li><a href="' + BASE + 'news.php">News</a></li>' +
                '<li><a href="' + BASE + 'faq.php">FAQ</a></li>' +
              '</ul>' +
            '</div>' +
            '<div>' +
              '<h4>Ecosystem</h4>' +
              '<ul>' +
                '<li><a href="' + BASE + 'products.php">Products</a></li>' +
                '<li><a href="' + BASE + 'developers.php">API / Developers</a></li>' +
                '<li><a href="' + BASE + 'about.php">About</a></li>' +
              '</ul>' +
            '</div>' +
          '</div>' +
          '<div class="footer-bottom">' +
            '<span>&copy; 2024-2026 Skoolyst. All rights reserved.</span>' +
            '<span>docs.skoolyst.com</span>' +
          '</div>' +
        '</div>' +
      '</footer>';
  }

  function buildBackToTop() {
    return '<button class="back-to-top" id="back-to-top" aria-label="Back to top">' + ICON_SVG.arrowUp + '</button>';
  }

  function injectLayout() {
    BASE = getBasePath();
    var headerHtml = buildHeader();
    var sidebarHtml = buildSidebar();
    var searchHtml = buildSearchModal();
    var footerHtml = buildFooter();
    var backToTopHtml = buildBackToTop();

    // Insert header at the beginning of body
    document.body.insertAdjacentHTML('afterbegin', headerHtml + sidebarHtml + searchHtml);

    // Insert footer and back-to-top at the end of body
    document.body.insertAdjacentHTML('beforeend', footerHtml + backToTopHtml);

    // For non-home pages, wrap content in the proper layout
    if (!isHome()) {
      wrapContent();
    } else {
      // On home page, hide the sidebar and backdrop entirely
      var sb = document.getElementById('doc-sidebar');
      var bd = document.getElementById('sidebar-backdrop');
      if (sb) sb.style.display = 'none';
      if (bd) bd.style.display = 'none';
      document.body.classList.add('is-home');
    }

    initInteractions();
    initSearch();
    initBackToTop();
    initVersionSelector();
  }

  function wrapContent() {
    // Find the main content element
    var main = document.getElementById('main-content') || document.querySelector('main');
    if (!main) return;

    // Check if already wrapped
    if (main.closest('.doc-content-wrapper')) return;

    var wrapper = document.createElement('div');
    wrapper.className = 'doc-content-wrapper';
    var content = document.createElement('div');
    content.className = 'doc-content';

    // Move main into the content wrapper
    main.parentNode.insertBefore(wrapper, main);
    wrapper.appendChild(content);
    content.appendChild(main);

    // Build TOC if the article has headings
    buildTOC(content);
  }

  function buildTOC(container) {
    var article = container.querySelector('article.doc-article, .doc-article');
    if (!article) return;

    var headings = article.querySelectorAll('h2, h3');
    if (headings.length < 2) return;

    var tocItems = [];
    headings.forEach(function (h, i) {
      if (!h.id) {
        h.id = 'heading-' + i;
      }
      var isH3 = h.tagName === 'H3';
      tocItems.push('<li><a href="#' + h.id + '" class="' + (isH3 ? 'toc-h3' : '') + '">' + h.textContent + '</a></li>');
    });

    var toc = document.createElement('aside');
    toc.className = 'doc-toc';
    toc.setAttribute('aria-label', 'On this page');
    toc.innerHTML = '<div class="toc-heading">On this page</div><ul class="toc-nav">' + tocItems.join('') + '</ul>';

    container.appendChild(toc);

    // TOC scroll spy
    var tocLinks = toc.querySelectorAll('.toc-nav a');
    var headingEls = Array.from(headings);

    function updateActiveToc() {
      var scrollPos = window.scrollY + 120;
      var activeIndex = 0;
      for (var i = 0; i < headingEls.length; i++) {
        if (headingEls[i].offsetTop <= scrollPos) {
          activeIndex = i;
        }
      }
      tocLinks.forEach(function (link, i) {
        link.classList.toggle('active', i === activeIndex);
      });
    }

    window.addEventListener('scroll', updateActiveToc, { passive: true });
    updateActiveToc();
  }

  function initInteractions() {
    var mobileToggle = document.getElementById('mobile-toggle');
    var sidebar = document.getElementById('doc-sidebar');
    var backdrop = document.getElementById('sidebar-backdrop');

    function closeSidebar() {
      if (!sidebar) return;
      sidebar.classList.remove('show');
      if (backdrop) backdrop.classList.remove('show');
      if (mobileToggle) mobileToggle.setAttribute('aria-expanded', 'false');
    }

    if (mobileToggle && sidebar) {
      mobileToggle.addEventListener('click', function () {
        var isOpen = sidebar.classList.toggle('show');
        if (backdrop) backdrop.classList.toggle('show', isOpen);
        mobileToggle.setAttribute('aria-expanded', isOpen);
      });
    }

    if (backdrop) {
      backdrop.addEventListener('click', closeSidebar);
    }

    // Close sidebar when a sidebar link is clicked (mobile)
    if (sidebar) {
      sidebar.addEventListener('click', function (e) {
        if (e.target.tagName === 'A' && window.innerWidth < 992) {
          closeSidebar();
        }
      });
    }

    // Escape closes sidebar on mobile
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && sidebar && sidebar.classList.contains('show')) {
        closeSidebar();
      }
    });
  }

  function initSearch() {
    var trigger = document.getElementById('search-trigger');
    var modal = document.getElementById('search-modal');
    var input = document.getElementById('search-input');
    var results = document.getElementById('search-results');
    var closeBtn = document.getElementById('search-close');

    // Also handle hero search input if present
    var heroSearch = document.getElementById('hero-search-input');

    var lastFocusedElement = null;

    function openSearch(query) {
      if (!modal) return;
      lastFocusedElement = document.activeElement;
      modal.classList.add('open');
      if (input) {
        input.focus();
        if (query) {
          input.value = query;
          performSearch(query);
        } else {
          showDefaultResults();
        }
      }
    }

    function closeSearch() {
      if (!modal) return;
      modal.classList.remove('open');
      if (input) input.value = '';
      if (results) results.innerHTML = '';
      if (lastFocusedElement) lastFocusedElement.focus();
    }

    function showDefaultResults() {
      if (!results) return;
      results.innerHTML = '<div class="search-empty">Start typing to search the documentation...</div>';
    }

    function performSearch(query) {
      if (!results) return;
      query = query.trim().toLowerCase();

      if (!query) {
        showDefaultResults();
        return;
      }

      var matches = SEARCH_INDEX.filter(function (item) {
        return item.title.toLowerCase().indexOf(query) !== -1 || item.desc.toLowerCase().indexOf(query) !== -1;
      });

      if (matches.length === 0) {
        results.innerHTML = '<div class="search-empty">No results found for "' + escapeHtml(query) + '"</div>';
        return;
      }

      results.innerHTML = matches.map(function (item) {
        return '<a class="search-result-item" href="' + BASE + item.url + '">' +
          '<div class="result-title">' + escapeHtml(item.title) + '</div>' +
          '<div class="result-desc">' + escapeHtml(item.desc) + '</div>' +
        '</a>';
      }).join('');

      // Store results for keyboard navigation
      results.querySelectorAll('.search-result-item').forEach(function (el, i) {
        el.setAttribute('data-index', i);
      });
    }

    function escapeHtml(str) {
      var div = document.createElement('div');
      div.textContent = str;
      return div.innerHTML;
    }

    if (trigger) {
      trigger.addEventListener('click', function () { openSearch(); });
    }

    if (heroSearch) {
      heroSearch.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
          e.preventDefault();
          openSearch(heroSearch.value);
        }
      });
    }

    if (closeBtn) {
      closeBtn.addEventListener('click', closeSearch);
    }

    if (modal) {
      modal.addEventListener('click', function (e) {
        if (e.target === modal) closeSearch();
      });
    }

    if (input) {
      input.addEventListener('input', function () {
        performSearch(input.value);
      });
    }

    // Keyboard shortcut: Ctrl+K / Cmd+K
    document.addEventListener('keydown', function (e) {
      if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
        e.preventDefault();
        openSearch();
      }
      if (e.key === 'Escape' && modal && modal.classList.contains('open')) {
        closeSearch();
      }
    });
  }

  function initBackToTop() {
    var btn = document.getElementById('back-to-top');
    if (!btn) return;

    window.addEventListener('scroll', function () {
      btn.classList.toggle('show', window.scrollY > 400);
    }, { passive: true });

    btn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  function initVersionSelector() {
    var select = document.getElementById('version-select');
    if (!select) return;
    select.addEventListener('change', function () {
      // Placeholder: in production this would navigate to versioned docs
      // For now, just show a notice
      var val = select.value;
      if (val !== 'latest') {
        var banner = document.createElement('div');
        banner.style.cssText = 'position:fixed;bottom:20px;left:50%;transform:translateX(-50%);background:var(--navy-900);color:#fff;padding:0.75rem 1.5rem;border-radius:8px;font-size:0.875rem;z-index:3000;box-shadow:0 8px 24px rgba(10,22,40,0.2)';
        banner.textContent = 'Versioned documentation for ' + val + ' will be available when production releases begin.';
        document.body.appendChild(banner);
        setTimeout(function () { banner.remove(); }, 3000);
        select.value = 'latest';
      }
    });
  }

  // Expose icons globally for page-level use
  window.ICON_SVG = ICON_SVG;

  // Auto-inject when DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', injectLayout);
  } else {
    injectLayout();
  }
})();

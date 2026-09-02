# Skoolyst Documentation — Static PHP

This project is the current **Static PHP version** of the Skoolyst Documentation website.

The current objective is to keep the existing documentation website simple, fast, maintainable, and frontend-focused while preparing a clean foundation for a future dynamic PHP application.

---

## 1. Current Project Stage

The project is currently a **static PHP application**.

The existing HTML, CSS, JavaScript, Bootstrap UI, documentation content, navigation, responsive behavior, and visual design must be preserved unless a specific change is requested.

PHP is currently being used mainly for:

* Page files
* Shared layouts
* Reusable frontend components
* Basic route definitions
* Basic application configuration

The application is **not yet a full dynamic backend system**.

---

## 2. Important Development Rule

### DO NOT build unnecessary backend architecture at this stage.

Do **not** create the following unless specifically requested:

* Controllers
* Models
* Services
* Repositories
* Middleware
* Database classes
* Authentication system
* API controllers
* API services
* ORM
* Migrations
* Seeders
* Database tables
* Admin authentication
* User management
* Complex validation systems
* Business logic layers
* Dependency injection containers
* Unused helper classes
* Unused framework-style core classes

The current project must remain lightweight.

Only introduce architecture when an actual requirement needs it.

---

# 3. Current Architecture

The current architecture should remain approximately:

```text
skoolyst-documentation/
│
├── config/
│   └── app.php
│
├── routes/
│   └── web.php
│
├── layout/
│   ├── header.php
│   ├── sidebar.php
│   ├── search.php
│   └── footer.php
│
├── docs/
│   ├── guide-schools.php
│   ├── guide-stores.php
│   ├── guide-media.php
│   └── guide-mcqs.php
│
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   ├── data.js
│   │   └── layout.js
│   └── icons/
│       └── favicon.svg
│
├── index.php
├── getting-started.php
├── overview.php
├── products.php
├── guides.php
├── features.php
├── versions.php
├── release-notes.php
├── news.php
├── faq.php
├── developers.php
├── about.php
│
├── robots.txt
├── sitemap.xml
├── .htaccess
├── .gitignore
└── README.md
```

Do not expand this structure unnecessarily.

---

# 4. Shared Layout Architecture

The Header, Sidebar, Search UI, and Footer must **never be duplicated inside individual pages**.

All shared website UI must be maintained inside the `layout/` directory.

### Header

```text
layout/header.php
```

Contains common:

* HTML document opening
* Meta tags
* Bootstrap/CSS includes
* Website header
* Navigation
* Branding
* Common header elements

### Sidebar

```text
layout/sidebar.php
```

Contains common:

* Documentation sidebar
* Navigation links
* Sections
* Sidebar menu
* Mobile sidebar-related markup

### Search

```text
layout/search.php
```

Contains common:

* Search modal
* Search interface
* Search-related markup

### Footer

```text
layout/footer.php
```

Contains common:

* Footer
* Footer navigation
* Common JavaScript includes
* Closing HTML markup where applicable

---

# 5. Page Layout Rule

Every page must use the shared layout components.

A page should **not contain duplicate Header, Sidebar, Search, or Footer markup**.

Example:

```php
<?php require __DIR__ . '/layout/header.php'; ?>
<?php require __DIR__ . '/layout/sidebar.php'; ?>
<?php require __DIR__ . '/layout/search.php'; ?>

<!-- Page-specific content -->

<?php require __DIR__ . '/layout/footer.php'; ?>
```

For pages inside the `docs/` directory:

```php
<?php require __DIR__ . '/../layout/header.php'; ?>
<?php require __DIR__ . '/../layout/sidebar.php'; ?>
<?php require __DIR__ . '/../layout/search.php'; ?>

<!-- Page-specific content -->

<?php require __DIR__ . '/../layout/footer.php'; ?>
```

Always use the correct relative path based on the page location.

---

# 6. Single Source of Truth

Shared UI must have a **single source of truth**.

For example:

If the header needs to change:

```text
layout/header.php
```

should be modified.

Do not manually modify the same header HTML across multiple pages.

If the sidebar needs to change:

```text
layout/sidebar.php
```

should be modified.

If the footer needs to change:

```text
layout/footer.php
```

should be modified.

This prevents UI inconsistency and duplication.

---

# 7. Existing Frontend Must Be Preserved

When making future changes:

* Do not redesign the website unless explicitly requested.
* Do not replace Bootstrap unnecessarily.
* Do not replace the current CSS architecture unnecessarily.
* Do not remove existing JavaScript functionality.
* Do not remove existing documentation content.
* Do not change working URLs unnecessarily.
* Do not change the current responsive behavior unnecessarily.
* Do not replace working components with a different framework.
* Do not introduce React, Vue, Laravel Blade, Livewire, or another frontend framework unless explicitly requested.

The existing frontend is the source of truth.

---

# 8. PHP Usage Rules

PHP should currently be used primarily for:

* Page rendering
* Shared layouts
* Reusable PHP components
* Basic configuration
* Basic route definitions

Keep PHP files simple and readable.

Avoid putting large amounts of business logic directly into page files.

If a future requirement introduces real business logic, first evaluate whether a dedicated class/service/controller is actually required.

Do not create architecture just because it might be useful someday.

---

# 9. Routes

The project may maintain a simple route map:

```text
routes/web.php
```

The route file is currently **declarative only**.

It can document or prepare application URLs for future migration.

Do not build a complete custom routing framework at this stage.

Do not create:

```text
app/Core/Router.php
```

unless a real dynamic routing requirement is introduced.

---

# 10. Configuration

Current configuration should remain minimal.

```text
config/app.php
```

should contain only necessary application-level information such as:

* Application name
* Application URL
* Environment information
* Basic metadata

Do not create large configuration systems.

Do not create database configuration until the application actually requires a database.

---

# 11. Assets

Frontend assets belong inside:

```text
assets/
```

Current structure:

```text
assets/
├── css/
├── js/
└── icons/
```

Keep assets organized by purpose.

Do not duplicate CSS or JavaScript files for individual pages unless there is a genuine page-specific requirement.

Before creating a new asset file, check whether the existing CSS/JS files can handle the requirement.

---

# 12. JavaScript Rules

JavaScript should remain responsible for frontend interactions such as:

* Mobile navigation
* Sidebar behavior
* Search interaction
* UI toggles
* Documentation navigation
* Table of contents
* Frontend-only interactions

Do not move backend/business logic into JavaScript.

Do not introduce a JavaScript framework for simple interactions.

Do not add npm or a frontend build system unless explicitly requested.

---

# 13. Bootstrap

Bootstrap is already part of the existing project.

Future changes should reuse the existing Bootstrap components/classes wherever practical.

Do not replace Bootstrap with another CSS framework without an explicit requirement.

Do not unnecessarily rewrite existing Bootstrap-based UI.

---

# 14. Responsive Design

Every future frontend change must work on:

* Desktop
* Laptop
* Tablet
* Mobile

After changing:

* Header
* Sidebar
* Navigation
* Search
* Cards
* Tables
* Documentation content

the responsive behavior must be checked.

Do not fix desktop layout by breaking mobile layout.

---

# 15. Documentation Pages

Documentation pages currently exist under:

```text
docs/
```

Examples:

```text
docs/guide-schools.php
docs/guide-stores.php
docs/guide-media.php
docs/guide-mcqs.php
```

Future documentation pages should follow the same layout and visual structure.

A new documentation page should:

1. Use the shared header.
2. Use the shared sidebar.
3. Use the shared search.
4. Contain only page-specific content.
5. Use the shared footer.
6. Follow the existing documentation styling.
7. Be responsive.
8. Be added to the appropriate navigation/sidebar when required.
9. Be included in sitemap/navigation where applicable.

---

# 16. Adding a New Page

When adding a new static PHP page:

### Step 1

Create the page in the appropriate location.

Example:

```text
new-page.php
```

or:

```text
docs/new-guide.php
```

### Step 2

Include the shared layout.

For root pages:

```php
require __DIR__ . '/layout/header.php';
require __DIR__ . '/layout/sidebar.php';
require __DIR__ . '/layout/search.php';
```

For documentation pages:

```php
require __DIR__ . '/../layout/header.php';
require __DIR__ . '/../layout/sidebar.php';
require __DIR__ . '/../layout/search.php';
```

### Step 3

Add only the page-specific content.

### Step 4

Include the shared footer.

### Step 5

Update navigation/sidebar if the page should be discoverable.

### Step 6

Update sitemap if the page should be indexed.

### Step 7

Test desktop and mobile layouts.

---

# 17. Changing the Header

If a future request says:

> Change the header

Only modify:

```text
layout/header.php
```

Do not copy the new header into every page.

After modification, check:

* Home page
* Main pages
* Documentation pages
* Mobile navigation
* Desktop navigation
* Logo
* Links
* Search
* Responsive behavior

---

# 18. Changing the Sidebar

If a future request says:

> Add/remove/change a sidebar item

Modify:

```text
layout/sidebar.php
```

Do not modify every documentation page individually.

After modification, verify all documentation pages.

---

# 19. Changing the Footer

If a future request says:

> Change footer

Modify:

```text
layout/footer.php
```

Do not duplicate the change across pages.

---

# 20. Search

Search-related shared markup should remain centralized:

```text
layout/search.php
```

Search JavaScript should remain inside:

```text
assets/js/
```

Do not duplicate the search modal on every page.

If search functionality becomes dynamic in the future, it can later be connected to a backend/API.

For now, keep it frontend/static unless otherwise requested.

---

# 21. URL and Link Rules

Existing working URLs should be preserved whenever possible.

Before changing a URL:

1. Check where it is used.
2. Check navigation.
3. Check sidebar.
4. Check sitemap.
5. Check internal documentation links.
6. Check `.htaccess`.
7. Check whether external references may depend on it.

Avoid unnecessary URL changes.

---

# 22. `.htaccess`

The current `.htaccess` is intended to support the static PHP application and extensionless URLs where Apache configuration allows it.

Do not turn `.htaccess` into a complex routing system.

If URL rewriting is changed, verify:

* `/`
* Main pages
* Documentation pages
* Assets
* robots.txt
* sitemap.xml
* 404 behavior

---

# 23. SEO

The documentation website should remain SEO-friendly.

Future page changes should consider:

* `<title>`
* Meta description
* Canonical URL
* Open Graph metadata where applicable
* Proper heading hierarchy
* Semantic HTML
* Internal links
* Sitemap
* Robots configuration

Do not remove existing SEO metadata without a reason.

---

# 24. Sitemap

Current sitemap:

```text
sitemap.xml
```

When a new publicly indexable page is added, evaluate whether it should be added to the sitemap.

Do not add:

* Temporary pages
* Internal-only pages
* Test pages
* Duplicate URLs

---

# 25. Robots

Current file:

```text
robots.txt
```

Do not unnecessarily block documentation pages from search engines.

If robots rules are changed, verify that important public documentation URLs remain crawlable.

---

# 26. Error Handling

At the current static stage, do not build a complete backend exception-handling system.

If custom error pages are required, implement only the pages/features actually needed.

Do not create a full:

```text
500 exception framework
404 exception framework
403 authorization framework
```

until the application becomes dynamic.

---

# 27. Security

Even though this is currently static, basic security practices must be followed.

Do not:

* Expose secrets in frontend files.
* Commit real passwords.
* Commit API keys.
* Commit database credentials.
* Put private configuration into public assets.
* Trust user input if forms are introduced.

If authentication, uploads, APIs, or database functionality are introduced later, proper security architecture must be added at that time.

---

# 28. Forms

If a static form is added:

* Use semantic HTML.
* Validate basic frontend input where appropriate.
* Do not pretend a form is securely processed by PHP unless backend processing exists.

When real form processing is introduced, then add the required:

* Request handling
* Validation
* CSRF protection
* Authentication/authorization where required
* Database/storage logic

Only when actually needed.

---

# 29. Future Dynamic PHP Migration

The project is intentionally designed so that it can evolve into a dynamic PHP application.

The migration should happen **incrementally**.

Do not convert everything at once.

Possible future structure:

```text
app/
├── Controllers/
├── Models/
├── Services/
├── Helpers/
├── Middleware/
└── Core/
```

But these directories should be introduced only when the corresponding functionality is actually implemented.

---

# 30. Future Database Stage

A database should only be introduced when documentation requires dynamic data.

Potential future functionality could include:

* Dynamic documentation
* Categories
* Search
* Admin management
* Users
* Content management
* Version management
* News management

At that stage, introduce only the required database architecture.

For example:

```text
database/
├── migrations/
├── seeders/
└── sql/
```

Do not create database tables before they are needed.

---

# 31. Future Authentication Stage

Authentication should be introduced only when an admin/dashboard or protected functionality is required.

At that stage, implement:

* Login
* Logout
* Password security
* Sessions
* CSRF protection
* Authentication middleware
* Authorization/roles where required

Do not create authentication files in the current static stage.

---

# 32. Future API Stage

An API should only be introduced when an actual frontend/backend integration requires it.

Possible future structure:

```text
routes/
├── web.php
└── api.php
```

Then introduce appropriate:

* API controllers
* Request validation
* API authentication
* API responses
* Services

Do not create an API simply for future possibility.

---

# 33. Future Admin Panel

If an admin panel is required later, it should be added separately from the public documentation frontend.

A future structure could become:

```text
app/
├── Controllers/
│   ├── Admin/
│   └── Frontend/
│
├── Models/
├── Services/
└── Middleware/
```

The existing public documentation UI should continue to use the shared frontend layout.

---

# 34. Future View Migration

If the project later adopts a more structured PHP view architecture, existing pages can gradually move into:

```text
resources/
└── views/
```

For example:

```text
resources/views/
├── layouts/
├── components/
├── pages/
└── docs/
```

However, this migration should only happen when the application genuinely requires a view/template system.

Do not move files merely for architectural appearance.

---

# 35. Reusable Components

Whenever the same UI appears in multiple pages, first evaluate whether it belongs in:

```text
layout/
```

or another reusable component.

Examples:

* Header
* Footer
* Sidebar
* Search
* Navigation
* Alerts
* Common documentation elements

Avoid copy-paste duplication.

---

# 36. Before Making Any Change

Before changing the project:

1. Inspect the existing file.
2. Understand how the page currently works.
3. Check whether the functionality already exists.
4. Check shared layout files.
5. Check CSS.
6. Check JavaScript.
7. Check links and dependencies.
8. Make the smallest required change.
9. Preserve existing functionality.
10. Test the affected pages.

Do not immediately rewrite existing code.

---

# 37. Change Management Rule

For every future task:

### First priority

Preserve existing functionality.

### Second priority

Reuse existing architecture.

### Third priority

Remove duplication.

### Fourth priority

Add only the required functionality.

### Fifth priority

Introduce new architecture only when necessary.

Avoid over-engineering.

---

# 38. Do Not Rebuild Existing UI

If the user asks for:

> Fix this page

Do not rebuild the entire website.

If the user asks for:

> Add this section

Do not redesign unrelated sections.

If the user asks for:

> Change sidebar

Do not change the header/footer unless required.

If the user asks for:

> Fix mobile

Do not rewrite the desktop design unnecessarily.

Always keep changes scoped to the requested requirement.

---

# 39. Testing After Changes

After any meaningful change, test:

### PHP

```bash
php -l filename.php
```

### Local server

```bash
php -S localhost:8000
```

Then verify the affected URLs.

### Frontend

Check:

* Desktop
* Tablet
* Mobile
* Navigation
* Sidebar
* Search
* Links
* Images
* CSS
* JavaScript

### Shared layout

If `layout/header.php`, `layout/sidebar.php`, `layout/search.php`, or `layout/footer.php` changes, test multiple pages because the change affects the whole website.

---

# 40. Local Development

PHP is currently the only required runtime.

Start the application:

```bash
php -S localhost:8000
```

Then open:

```text
http://localhost:8000/
```

No Node.js installation is required for the current application.

No npm installation is required.

No Composer installation is required.

No database is required.

No migration command is required.

No Artisan command is required.

---

# 41. Dependency Rule

Do not add a new dependency unless it is actually required.

Before adding a package/library:

1. Check whether the functionality already exists.
2. Check whether native PHP/HTML/CSS/JS can handle it.
3. Check whether Bootstrap already provides the required functionality.
4. Add a dependency only if it provides meaningful value.

Avoid unnecessary dependencies.

---

# 42. Git Rules

Do not commit:

* `.env` secrets
* Passwords
* API keys
* Database credentials
* Temporary files
* Local logs
* Cache files
* Generated unnecessary files

Keep `.gitignore` updated when new local/generated files are introduced.

---

# 43. Code Quality

Future code should be:

* Simple
* Readable
* Consistent
* Reusable
* Maintainable
* Properly indented
* Properly named

Avoid:

* Duplicate code
* Giant PHP files
* Unnecessary abstractions
* Dead code
* Unused classes
* Unused configuration
* Unused dependencies

---

# 44. Architecture Growth Rule

The application should grow according to actual requirements.

### Current

```text
Static PHP
+
Shared Layout
+
Frontend Assets
+
Basic Routes
+
Basic Config
```

### Later, if required

```text
Static PHP
        ↓
Shared Views
        ↓
Controllers
        ↓
Services
        ↓
Models
        ↓
Database
        ↓
Authentication
        ↓
API
        ↓
Admin Panel
```

Each layer should be introduced only when it solves a real requirement.

---

# 45. Golden Rule

**Do not build architecture for the sake of architecture.**

The current goal is a clean, maintainable **Static PHP Documentation website**.

Keep it simple until dynamic functionality is actually required.

When dynamic functionality becomes necessary, introduce the required architecture incrementally without unnecessarily rewriting the existing frontend.

---

# 46. Final Development Checklist

Before completing any future task, confirm:

* [ ] Existing UI is preserved.
* [ ] Existing functionality still works.
* [ ] Header remains centralized.
* [ ] Sidebar remains centralized.
* [ ] Search remains centralized.
* [ ] Footer remains centralized.
* [ ] No unnecessary duplicate markup was introduced.
* [ ] No unnecessary backend architecture was created.
* [ ] No unnecessary dependency was added.
* [ ] Responsive layout still works.
* [ ] Internal links work.
* [ ] Assets load correctly.
* [ ] SEO metadata is preserved.
* [ ] Sitemap is updated when necessary.
* [ ] PHP syntax is valid.
* [ ] No secrets were added.
* [ ] Changes are limited to the requested scope.
* [ ] The project remains easy to migrate to dynamic PHP in the future.

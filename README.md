# Skoolyst Documentation — Static PHP

This project is the current static PHP version of the Skoolyst Documentation website.

## Current stage

- PHP page files (`.php`) with the existing HTML/CSS/JS UI preserved.
- Bootstrap and existing frontend assets preserved.
- No controllers, models, services, helpers, middleware, database, authentication, API layer, or other backend classes.
- `routes/web.php` contains a small declarative route map for future migration.
- `config/app.php` contains only minimal application metadata.
- `.htaccess` supports `index.php` and extensionless PHP routes where Apache allows it.
- `public/` contains the existing `robots.txt` and `sitemap.xml`.

## Main pages

`index.php`, `getting-started.php`, `overview.php`, `products.php`, `guides.php`, `features.php`, `versions.php`, `release-notes.php`, `news.php`, `faq.php`, `developers.php`, `about.php`

## Documentation guides

`docs/guide-schools.php`, `docs/guide-stores.php`, `docs/guide-media.php`, `docs/guide-mcqs.php`

## Local run

PHP is the only runtime required:

```bash
php -S localhost:8000
```

Then open `http://localhost:8000/`.

No `npm install`, `npm run dev`, Composer, database migration, or Artisan command is required for this static version.

## Future migration

When the project becomes dynamic, backend layers can be introduced incrementally under `app/` and existing page files can be moved into `resources/views/` without adding unused architecture now.

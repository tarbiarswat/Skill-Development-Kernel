# Skill Development Kernel

A minimal, stylish PHP site template for listing courses, programs and internships, ready for local development and safe review. 🎯

## Quick start

- Start the built-in PHP server from the project root:

```powershell
php -S localhost:8000 -t .
# then open http://localhost:8000
```

- Import the provided database (MySQL) for local testing:

```powershell
mysql -u root -p < .\sdk_db.sql
```

- Update database connection in `configs/dbconfig.php` (or `admin/includes/dbconfig.php`).

## Why this repo is useful

- Lightweight and self-contained, no Composer required.
- Ready-made public pages (`index.php`, `programs.php`, `coursedetails.php`, `internships.php`, `contact.php`) and a small admin panel (`admin/`).

## Important security notes

- Do not commit production credentials. Move DB secrets out of the web root or read them from environment variables.
- Inspect `sdk_db.sql` and remove any real production data or passwords before sharing or publishing.
- Ensure admin routes are protected (check `admin/session.php`) and use `session_set_cookie_params()` with `httponly` and `secure` when serving over HTTPS.
- Use prepared statements (PDO / mysqli) and `password_hash()` / `password_verify()` for user passwords.

## Minimal structure

- `index.php` — public home page
- `includes/` — shared templates (`header.php`, `footer.php`, etc.)
- `configs/dbconfig.php` — DB configuration (consolidate and secure)
- `admin/` — admin UI and its includes
- `sdk_db.sql` — dev database dump (keep private)
- `stylesheets/`, `javascript/`, `images/` — static assets

## Maintenance tips

- Target PHP 8.0+ (8.1 recommended).
- Add static analysis (PHPStan or Psalm) and a linter (PHPCS).
- Consider package-managing frontend libs (npm) for easy upgrades.

## License

See `LICENSE` in the project root.

---

If you want, I can: migrate DB config into an `.env` loader, add a small PHPUnit smoke test, or harden session and CSRF protections. Tell me which and I’ll make a focused change.

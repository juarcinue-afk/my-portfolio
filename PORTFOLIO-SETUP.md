# Jude Arcinue Portfolio – Setup & Editing Guide

Laravel 13 portfolio (needs PHP 8.4+ and Composer; XAMPP with a recent PHP works).

## Run it
```
php artisan migrate        # creates the contact_messages table
php artisan serve          # open http://localhost:8000
```
Dependencies are already in `vendor/`. If not: `composer install`.

## Edit your content (one file)
Everything personal lives in **`config/portfolio.php`**:

| Setting | What it does |
|---|---|
| `email` | Shown on the site and receives contact-form emails |
| `social.github` / `social.linkedin` | Profile links (hidden/"coming soon" while `null`) |
| `profile_image` | Put your photo at `public/images/profile.jpg` |
| `cv` | Put your CV at `public/cv/Jude-Arcinue-CV.pdf` to enable Download CV |
| `titles` | Rotating typing-effect titles |
| `about`, `skills` | About text/details and skill cards |
| `projects` | Title, description, tech tags, `image`, `github` per project |
| `education` | Course, school, academic year |

Project screenshots go in `public/images/projects/` (set each project's `image`, e.g. `images/projects/happy-bean.jpg`).

## Contact form email
Messages are always saved to the `contact_messages` table. To also receive email, set `email` in the config and real SMTP values in `.env`, for example Gmail with an app password:
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=you@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_SCHEME=null
MAIL_FROM_ADDRESS=you@gmail.com
```
With `MAIL_MAILER=log`, emails are only written to `storage/logs/laravel.log`.
Run `php artisan config:clear` after changing `.env`.

## Using MySQL (XAMPP) instead of SQLite
In `.env`: `DB_CONNECTION=mysql`, `DB_HOST=127.0.0.1`, `DB_PORT=3306`, `DB_DATABASE=portfolio`, `DB_USERNAME=root`, `DB_PASSWORD=`
Create the `portfolio` database in phpMyAdmin, then `php artisan migrate`.

## Files
- `resources/views/layouts/app.blade.php`, `components/` (navbar, footer, project-card), `sections/`
- `public/css/style.css`, `public/js/script.js`
- `app/Http/Controllers/{PortfolioController,ContactController}.php`

## External libraries (CDN)
Font Awesome, Typed.js, Google Fonts. Internet is needed to load them; the site still works without Typed.js (shows the first title).

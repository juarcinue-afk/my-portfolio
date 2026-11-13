Jude Arcinue Portfolio

Author: Jude M. Arcinue

block:C

A personal student portfolio built with Laravel 13, Blade, custom CSS, and JavaScript. The site presents Jude’s profile, skills, projects, education, social links, downloadable CV, and a contact form.

Features

•
Responsive personal portfolio website

•
Home section with animated professional titles

•
About section with profile details and career goals

•
Skills section grouped by frontend, backend, database, and tools

•
Projects showcase with descriptions, technology tags, images, and repository links

•
Education timeline

•
Profile image and downloadable CV support

•
Contact form with server-side validation and rate limiting

•
Contact messages saved to the database

•
Optional email delivery through SMTP

•
GitHub and LinkedIn profile links

•
Reusable Blade components and section templates

Technology Stack

•
PHP 8.4+

•
Laravel 13

•
Blade templates

•
SQLite by default, with MySQL support available

•
Custom CSS and JavaScript

•
Vite configuration included

•
PHPUnit feature tests

•
Font Awesome, Typed.js, and Google Fonts loaded through CDN

Requirements

•
PHP 8.4 or newer

•
Composer

•
SQLite with the PHP PDO SQLite extension, or MySQL/MariaDB

•
PHP extensions including mbstring, openssl, and fileinfo

•
Node.js and npm are optional for the current public-asset workflow

•
Internet access for external fonts, icons, and Typed.js assets

Installation

1.
Clone the repository and enter the project directory:

Bash


git clone <your-repository-url>
cd jude-portfolio





2.
Install PHP dependencies:

Bash


composer install





3.
Create the environment file:

Bash


cp .env.example .env



On Windows Command Prompt, use:

Plain Text


copy .env.example .env





4.
Generate the Laravel application key:

Bash


php artisan key:generate





5.
Create the database tables:

Bash


php artisan migrate





6.
Start the development server:

Bash


php artisan serve





7.
Open the site at 
http://127.0.0.1:8000.

If the project already includes its vendor/ directory, the composer install step may not be necessary. If dependencies are missing, run it before starting the application.

Configure the Portfolio

Most personal content is managed in config/portfolio.php. Update this file to customize:

•
Name and logo

•
Email and social links

•
Profile image and CV path

•
Rotating professional titles

•
About section

•
Skills

•
Projects and technology tags

•
Education history

Images and CV

Place the profile image here:

Plain Text


public/images/profile.jpg



Place the CV here to enable the download button:

Plain Text


public/cv/Jude-Arcinue-CV.pdf



Project screenshots can be stored in:

Plain Text


public/images/projects/



Then update each project’s image value in config/portfolio.php.

Contact Form

The contact form is available at the /contact endpoint and is protected by server-side validation and a limit of five requests per minute.

Messages are always saved in the contact_messages database table. In local development, the default mail configuration writes outgoing mail to the Laravel log:

Plain Text


MAIL_MAILER=log



To send real email through SMTP, configure values similar to the following in .env:

Plain Text


MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@example.com
MAIL_PASSWORD=your-app-password
MAIL_SCHEME=null
MAIL_FROM_ADDRESS=your-email@example.com



Set the portfolio recipient in .env if required by the application configuration, then clear cached configuration:

Bash


php artisan config:clear



Never commit .env or real email credentials to GitHub.

Using MySQL Instead of SQLite

Update .env with your MySQL connection details:

Plain Text


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=root
DB_PASSWORD=



Create the portfolio database in phpMyAdmin or MySQL, then run:

Bash


php artisan migrate



Useful Commands

Bash


# Start the local server
php artisan serve

# Run the test suite
php artisan test

# Clear cached application and configuration files
php artisan optimize:clear

# Run migrations from a clean database and reseed it
php artisan migrate:fresh --seed

# Start the Vite development server, if frontend assets are being changed
npm run dev

# Build frontend assets
npm run build



Testing

Run the automated tests with:

Bash


php artisan test



The test suite covers portfolio page rendering, configured content, navigation sections, project and skill displays, and contact-form validation and behavior.

Project Structure

Plain Text


app/
├── Http/Controllers/       Portfolio and contact-form controllers
├── Http/Requests/           Contact-form validation
├── Mail/                    Contact email classes and templates
└── Models/                  Contact-message model

config/portfolio.php         Main editable portfolio content
database/migrations/         Database schema
public/css/                  Site styles
public/js/                   Client-side scripts
public/images/               Profile and project images
resources/views/             Blade layouts, sections, and components
routes/web.php               Portfolio and contact routes
tests/                       Feature and unit tests



Security Notes

•
Do not commit .env files, passwords, SMTP credentials, or application keys.

•
Set APP_DEBUG=false in production.

•
Use HTTPS when publishing the portfolio.

•
Use an app password or secure SMTP credential instead of a personal email password.

•
Keep the contact-form rate limit enabled to reduce spam.

License

This project is released under the MIT License. See LICENSE if a license file is included in the repository.


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

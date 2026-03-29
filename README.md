# Nepa Rudraksha — Local Setup Guide

## Prerequisites

Make sure you have the following installed before starting:

- PHP >= 8.1
- Composer
- Node.js >= 20.x and npm
- MySQL or any supported database
- Git

---

## 1. Clone the Repository
```bash
git clone https://github.com/Shreyaa-Pathak/neparudraksha.git
cd nepa-rudraksha
```

---

## 2. Install PHP Dependencies
```bash
composer install
```

---

## 3. Install Node Dependencies
```bash
npm install
```

---

## 4. Environment Setup

Copy the example environment file and generate your app key:
```bash
cp .env.example .env
php artisan key:generate
```

Then open `.env` and update the following values to match your local setup:
```env
APP_NAME="Nepa Rudraksha"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nepa_rudraksha
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password
```

---

## 5. Create the Database

In your MySQL client or terminal, create the database:
```sql
CREATE DATABASE nepa_rudraksha;
```

---

## 6. Run Migrations
```bash
php artisan migrate
```

If the project includes seed data:
```bash
php artisan db:seed
```

Or both together:
```bash
php artisan migrate --seed
```

---

## 7. Link Storage
```bash
php artisan storage:link
```

---

## 8. Add Project Images

Place the required image assets inside `public/images/`:
```
public/
└── images/
    ├── saturn.png
    ├── mars.png
    ├── rudmid.png
    ├── shiva.png
    └── book.jpg
```

These are used across the planet section, banners, and hero components.

---

## 9. Build Frontend Assets

For development (with hot reload):
```bash
npm run dev
```

For production:
```bash
npm run build
```

---

## 10. Start the Development Server
```bash
php artisan serve
```

The app will be available at [http://localhost:8000](http://localhost:8000).

---

## Folder Structure (Key Files)
```
resources/
└── views/
    └── layouts/
        └── components/
            ├── navbar.blade.php
            ├── hero.blade.php
            ├── badges.blade.php
            ├── heritage.blade.php
            ├── stats.blade.php
            ├── planet.blade.php
            ├── dis.blade.php
public/
└── images/
```

---

## Common Issues

**Vite manifest not found**
Run `npm run build` or `npm run dev` before serving the app.

**Class not found / Composer errors**
Run `composer dump-autoload` to refresh the autoloader.

**Images not showing**
Ensure all image files are placed in `public/images/` and that `php artisan storage:link` has been run.

**Permission errors on storage or cache**
```bash
chmod -R 775 storage bootstrap/cache
```

---

## Tech Stack

- Laravel 10+
- Blade templating
- Tailwind CSS v4 (via `@tailwindcss/vite`)
- Bootstrap Icons v1.13
- Alpine.js v3 with `@alpinejs/intersect`
- Font Awesome v7 (free)
- Vanilla JS (scroll reveal, nav behavior)
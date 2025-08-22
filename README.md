# Prodly - Laravel Authentication & Product Module

A clean, beginner-friendly Laravel 10 project demonstrating **authentication**, **email verification**, and a **CRUD product module** with multiple images.

---

## Features

### Authentication

* Sign up / Login / Logout
* Password reset
* Email verification (optional, toggle with `.env`)
* Queued email notifications for better performance
* Clean separation of concerns using **services** for business logic
* Form Requests for validation

### Product Module

* Create, view, edit, delete products
* Upload multiple images per product
* Display products in table with image count
* View product details with Bootstrap carousel
* Fully responsive interface
* Blade layouts & partials for reusable UI components

---

## Layouts & Blade

* Uses **Blade templating engine** for clean separation of UI and logic
* **Layouts** allow consistent headers, footers, and sidebar navigation
* **Partials** used for reusable components like navigation menus, alerts, and modals
* Flash messages displayed using Blade conditionals
* Bootstrap 5 for responsive design

---

## Setup Instructions

1. **Clone the repo**

```bash
git clone https://github.com/akineni/laravel-product-module.git
cd laravel-product-module
```

2. **Install dependencies**

```bash
composer install
npm install
npm run dev
```

3. **Configure environment**

```bash
cp .env.example .env
php artisan key:generate
```

* Set your DB credentials in `.env`
* Toggle email verification if desired:

```env
EMAIL_VERIFICATION=true
```

4. **Run migrations & seeders**

```bash
php artisan migrate --seed
```

5. **Create storage symlink (for product images)**

```bash
php artisan storage:link
```

6. **Serve the application**

```bash
php artisan serve
```

---

## Demo Accounts

You create your own account by signing up or can log in with any of the following demo usernames or emails.  
The password for all accounts is:

```
12345678
```

| Username           | Email                          |
|--------------------|--------------------------------|
| daisha.steuber     | jan92@example.com              |
| sporer.sheldon     | mosciski.mabelle@example.org   |
| derick21           | lowe.dina@example.net          |
| zoie01             | tod36@example.net              |
| upton.alden        | tamara46@example.net           |
| dickinson.harmon   | kamille13@example.net          |
| acorkery           | maurice54@example.net          |
| lucio.schiller     | eric.vonrueden@example.com     |
| morissette.jayda   | giovanny95@example.net         |
| eino28             | jaycee.crist@example.net       |

---

## Notes

* Flash messages use Blade conditionals and session keys for alerts.
* Queued email notifications ensure signup verification does not block UI.
* Products can have multiple images; displayed using a **Bootstrap carousel**.
* Clean, structured **services** handle authentication and product logic separately from controllers.

---

## Folder Structure Highlights

* `app/Http/Controllers` → Controller logic
* `app/Services` → Business logic services
* `app/Models` → Eloquent models
* `app/Http/Requests` → Form requests for validation
* `resources/views` → Blade templates (layouts, partials, pages)
* `database/migrations` → Migrations for users & products
* `database/seeders` → Seeders for demo data

---

## Tech Stack

* Laravel 10
* PHP 8+
* Blade Templates
* Bootstrap 5
* Queued notifications for emails
* SQLite / MySQL (configurable)

---

## Future Improvements

* Pagination for products listing
* Search & filter products
* Role-based access control
* API endpoints for product module
* Frontend React/Angular integration for dynamic UI

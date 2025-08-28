# 👥 User Role App

A full-stack web application using **Laravel 10** and **React 18 with TypeScript** that allows the creation of users with **multiple roles** and displays users filtered by role.

---

## 🚀 Features

- Create users with full name, email, and multiple roles
- Roles: `Author`, `Editor`, `Subscriber`, `Administrator`
- API validation for required fields and unique email
- Display users grouped or filtered by role
- Fully typed React frontend using hooks and Axios

---

## 🧰 Tech Stack

| Layer     | Tech                      |
|-----------|---------------------------|
| Backend   | Laravel 10 (PHP 8.1+)     |
| Frontend  | React 18 with TypeScript  |
| API       | RESTful JSON API (Axios)  |
| Database  | MySQL / SQLite            |
| Dev Env   | Laravel Sail (optional)   |

---

## ⚙️ Backend Setup (Laravel 10)

### ✅ Requirements
- PHP 8.1+
- Composer
- MySQL or SQLite
- Docker (optional for Laravel Sail)

### 🛠 Installation

```bash
# Clone repository
git clone <your-repo-url>
cd user-role-app

# Install dependencies
composer install

# Copy and configure environment
cp .env.example .env
php artisan key:generate

# Configure DB in .env
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password

# Run migrations and seed roles
php artisan migrate --seed

# Start Laravel server
php artisan serve

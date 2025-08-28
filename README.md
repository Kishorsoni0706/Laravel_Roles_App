User Role Application

This is a full-stack application built with Laravel 10 and React 18 with TypeScript, allowing the creation of users with multiple roles and listing them by role.

🧰 Technologies Used

Backend: Laravel 10/11 (with Sail optional)

Frontend: React 17/18 with TypeScript

API Communication: Axios

Database: MySQL or SQLite

Extras: Laravel Eloquent Relationships (Many-to-Many), CORS enabled

📦 Backend Installation (Laravel)
Prerequisites:

PHP 8.1+

Composer

MySQL or SQLite

Node.js & npm (optional for Sail)

Docker (optional for Laravel Sail)

Steps:
# Clone the project
git clone <repo-url>
cd user-role-app

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Configure DB in `.env` file
DB_DATABASE=your_db
DB_USERNAME=your_user
DB_PASSWORD=your_pass

# Run migrations and seed roles
php artisan migrate --seed

# Start the server
php artisan serve
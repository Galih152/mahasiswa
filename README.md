<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🎓 Laravel Student Management System

This project is a **web-based student management system** built with Laravel. It allows you to manage students, courses, and their grades, including features for CRUD (Create, Read, Update, Delete) operations and a dashboard with summary and grade statistics.

## ✨ Features

- Manage student data (name, student number, major)
- Manage course data (code, name, credits)
- Manage grades with relationship between students and courses
- Dashboard with:
  - Student, course, and grade counters
  - Table showing average grade per student
  - Table showing detailed grades for each student in each course
- Fully styled using Tailwind CSS
- Responsive design
- Clean and modern interface

## 📂 Project Structure

- **app/Models/**  
  Contains models: `Student`, `Course`, and `Grade` with their relationships.

- **app/Http/Controllers/**  
  Contains controllers to handle CRUD and routing logic for students, courses, and grades.

- **resources/views/**  
  Blade templates, with Tailwind styling, separated for each feature (student, course, grade, dashboard).

- **routes/web.php**  
  Defines the routes for each CRUD feature and dashboard view.

## 🚀 Getting Started

If you clone this repository, here’s how to set it up:

```bash
# Clone the repository
git clone https://github.com/Galih152/mahasiswa.git

# Move to project folder
cd mahasiswa

# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Build Tailwind assets
npm run dev

# Copy .env
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure your database in .env
# DB_CONNECTION=mysql
# DB_DATABASE=your_db
# DB_USERNAME=your_user
# DB_PASSWORD=your_password

# Run migrations
php artisan migrate

# Start the local server
php artisan serve
```

Then you can access the app at  
👉 **http://localhost:8000**

## 🛠 Technologies Used

- Laravel (PHP Framework)
- MySQL (or any compatible relational DB)
- Tailwind CSS
- Blade template engine
- Eloquent ORM

## 🙌 Contribution

If you’d like to contribute, just fork the repository, create a branch, and make a pull request! Feel free to improve the styling or add new features.

## 📄 License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).

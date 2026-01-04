# 📝 TaskFlow – Simple Task Management System

TaskFlow is a simple and clean single-user Task Management System built using Laravel.  
It allows users to create, view, update, complete, and delete tasks with a modern UI and dark mode support.

This project was developed as part of a technical assessment to demonstrate Laravel fundamentals, MVC architecture, and clean coding practices.

---

## 🚀 Features

- Create new tasks
- View task list
- Edit tasks
- Mark tasks as Completed or Pending
- Delete tasks with confirmation
- Light and Dark Mode UI
- Form validation
- Clean MVC architecture
- Database-driven application

---

## 🛠️ Technology Stack

- PHP 8.1 or above
- Laravel 11
- MySQL
- Blade Templating Engine
- Bootstrap 5
- Git & GitHub

---

## 📂 Project Structure (MVC)

- Model: App\Models\Task
- Controller: App\Http\Controllers\TaskController
- Views: resources/views/tasks
- Routes: routes/web.php

The application follows Laravel’s MVC pattern with resource routing and proper separation of concerns.

---

## 🧩 Task Fields

- Title (Required)
- Description (Optional)
- Priority (Low / Medium / High)
- Status (Pending / Completed)

---

## ⚙️ Installation and Setup

Follow the steps below to run the project locally.

### Step 1: Clone the Repository

git clone https://github.com/your-username/taskflow.git  
cd taskflow

---

### Step 2: Install Dependencies

composer install

---

### Step 3: Environment Setup

Copy the example environment file and generate the application key.

cp .env.example .env  
php artisan key:generate

---

### Step 4: Database Configuration

In .env file:

DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=taskflow  
DB_USERNAME=root  
DB_PASSWORD=

---

### Step 5: Run Database Migrations

php artisan migrate

---

### Step 6: Start the Development Server

php artisan serve

Open the browser and visit:

http://127.0.0.1:8000

---

## 🌙 Dark Mode

- Dark mode toggle available in the navigation bar
- User preference is stored using browser localStorage
- Fully styled dark mode including tables, buttons, and layout

---

## 📦 Deployment

The application can be deployed on platforms such as Railway or Render.

Deployment steps include:
- Pushing the project to GitHub
- Connecting the repository to the hosting platform
- Setting production environment variables
- Running migrations using php artisan migrate --force

---

## 🧠 Learning Outcomes

- Laravel CRUD operations
- Resource controllers and routing
- Blade templating
- Form validation
- Database migrations
- UI/UX enhancement
- Dark mode implementation
- Clean and maintainable code structure

---

## 🧑‍💻 Author

Ishika Amin  

---

## 📄 License

This project is created for educational and assessment purposes.

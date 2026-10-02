# Tasks for Today Management System - TSA2

A task management web application developed using CodeIgniter 4 and MySQL for IT0049 - Web System Technologies.

## Features

- Welcome page showing today's active tasks
- Full Task List
- User Profile
- About page
- User login and logout
- Password hashing and verification
- Protected task management actions
- Add new tasks
- Edit and update tasks
- Form validation
- Soft deletion / task archiving
- Archived tasks are hidden from public task pages
- MySQL database integration
- CodeIgniter MVC architecture

## Database

Database name: `tasks_tsa2_db`

Tables:
- `tasks`
- `users`

The database export is included as `tasks_tsa2_db.sql`.

## Main Pages

- `/` - Tasks for Today
- `/tasks` - Full Task List
- `/profile` - Demo User Profile
- `/about` - About
- `/login` - Login

Task creation, editing, and deletion require authentication.

## Demo Login

Username: `demo_user`

Password: `password123`

The password is stored as a hash in the database.

## How to Run

1. Install XAMPP and Composer.
2. Place the project inside the XAMPP `htdocs` folder.
3. Start MySQL in XAMPP.
4. Open phpMyAdmin.
5. Create a database named `tasks_tsa2_db`.
6. Import `tasks_tsa2_db.sql`.
7. Configure the database connection in `.env`.
8. Open Command Prompt inside the project folder.
9. Run:

   php spark serve --port 8082

10. Open `http://localhost:8082` in a browser.

## Soft Deletion

Deleting a task does not permanently remove it from the database. Instead, its `is_archived` value is changed to `1`. Archived tasks are excluded from the Welcome and Task List pages.

## Developer

Angelo Buen
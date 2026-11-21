# Tasks for Today Management System

A Laravel task management application that displays tasks scheduled for today and provides a full task list organized by date.

## Features

- View today's tasks and the complete task list.
- Register and log in with Laravel Breeze.
- Create, edit, and archive tasks while logged in.
- Validate task titles, statuses, and dates.
- Send a task-completed notification when a task changes from Pending to Completed.
- Log notification emails locally for testing; editing an already completed task does not resend the notification.
- View the Profile and About pages.

## Technology

- Laravel 12
- PHP
- SQLite
- Laravel Breeze
- Vite and npm

## Database

The project includes migrations and a task seeder.

- `tasks`: title, status, task date, archive flag, and timestamps.
- `users`: username, full name, email, password, remember token, and timestamps.

Archived tasks are marked with `is_archived` and are excluded from the active task list.

## Setup on Windows

From the project folder, run these commands in PowerShell:

```powershell
composer install
Copy-Item .env.example .env
New-Item -ItemType File database\database.sqlite
php artisan key:generate
```

If `database\database.sqlite` already exists, skip the `New-Item` command.

In `.env`, configure SQLite and the log mailer. Add or update these values:

```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
MAIL_MAILER=log
MAIL_TASK_RECIPIENT=recipient@example.test
```

The recipient is a test address; with the log mailer, no real email is sent. After configuring `.env`, run:

```powershell
php artisan migrate --seed
npm install
npm run build
php artisan serve
```

Open `http://127.0.0.1:8000` in your browser. Register an account at `/register` to manage tasks.

## Email testing

When a task changes from Pending to Completed, Laravel writes the generated email to:

```text
storage/logs/laravel.log
```

The `MAIL_TASK_RECIPIENT` value in `.env` is used as the recipient. Do not commit `.env` or real mail credentials to the repository.

## Submission

- GitHub repository: https://github.com/inquiregian/IT0049-TSA3
- Hosted application: **Add the deployed application URL here**
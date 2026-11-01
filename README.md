# Tasks for Today Management System

A Laravel application that displays tasks scheduled for today, lists all tasks by date, and shows a user profile.

## Features

- Shows tasks scheduled for the current day.
- Lists all tasks in date order.
- Displays the user profile.
- Includes an About page identifying the developer.
- Uses Laravel migrations, seeders, and Eloquent models.

## Database tables

### tasks

- `id`
- `title`
- `status` — defaults to `pending`
- `task_date`
- `created_at` and `updated_at`

### users

- `id`
- `username` — unique
- `full_name`
- `email`
- `created_at` and `updated_at`

## Requirements

- PHP
- Composer
- Laravel 12

## Run locally

1. Install the project dependencies:

   ```bash
   composer install
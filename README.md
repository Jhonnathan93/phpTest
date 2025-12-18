# phpTest

Simple PHP demo application that shows a small form to save first and last names into a MySQL database using **PDO** and **prepared statements**.

## Overview

This project is a small demo intended to practice:

- Handling HTML forms with PHP.
- Connecting to a MySQL database using PDO.
- Using prepared statements to prevent SQL injection.
- Quick layout with **Bootstrap 5**.

From the main page (`index.php`), the user enters their first name and last name in a form. When the form is submitted, the data is sent to `includes/formhandler.inc.php`, which inserts it into the `users` table of the database defined in `includes/dbh.inc.php`.

## Project structure

- `index.php`: main page with the Bootstrap form.
- `includes/dbh.inc.php`: database connection file (PDO).
- `includes/formhandler.inc.php`: form processing logic and insertion into the `users` table.

## Requirements

- PHP 7.4 or higher.
- Web server (Apache, Nginx, etc.).
- MySQL/MariaDB.
- PDO extension enabled for MySQL.

## Setup

1. **Clone or copy this project** into your web server directory (for example, `htdocs` in XAMPP or `www` in Laragon).

2. **Create the database** in MySQL:

```sql
CREATE DATABASE php_test CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE php_test;

CREATE TABLE users (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  lastname VARCHAR(100) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

3. **Configure the connection in `includes/dbh.inc.php`** if needed:

- `host`: default is `localhost`.
- `dbname`: `php_test`.
- `dbusername`: your database user (often `root` in local environments).
- `dbpassword`: your database user password.

Example (already in the project):

```php
$dsn = "mysql:host=localhost;dbname=php_test";
$dbusername = "root";
$dbpassword = "";
```

4. **Start your local server stack** (XAMPP, Laragon, Wamp, etc.) and make sure the MySQL service is running.

## Usage

1. Open your browser and go to the URL where the project is hosted, for example:
   - `http://localhost/phpTest/index.php`

2. Fill in the form with:
   - First name (`name`).
   - Last name (`lastname`).

3. Click **Guardar / Save**.

4. The script will:
   - Check that the request method is `POST`.
   - Insert the data into the `users` table using a prepared statement.
   - Redirect back to `index.php` after the operation completes.

5. You can verify the inserted rows directly in your database tool (phpMyAdmin, TablePlus, DBeaver, etc.).

## Tech stack

- **PHP** (PDO).
- **MySQL**.
- **Bootstrap 5** (via CDN) for the form layout.

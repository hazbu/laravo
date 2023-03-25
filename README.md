# Laravo - Awesome Laravel Admin
Made with ❤️ by [Triptasoft](https://www.triptasoft.com)

Built with package from [The Control Group](https://www.thecontrolgroup.com)

Laravel Admin & BREAD System (Browse, Read, Edit, Add, & Delete), supporting Laravel 8 and 9!

## Installation Steps

### 1. Add the DB Credentials & APP_URL

Next make sure to create a new database and add your database credentials to your .env file:

```
DB_HOST=localhost
DB_DATABASE=laravo
DB_USERNAME=root
DB_PASSWORD=
```

You will also want to update your website URL inside of the `APP_URL` variable inside the .env file:

```
APP_URL=http://localhost:8000
```

### 2. Run Composer

Make sure you have installed composer, then run composer:

```
composer install
```

### 3. Run The Installer

Lastly, we can install Laravo.
The dummy data will include 1 admin account (if no users already exists), 1 demo page, 4 demo posts, 2 categories and 7 settings.

```bash
php artisan voyager:install --with-dummy
```

And we're all good to go!

Start up a local development server with `php artisan serve` And, visit [http://localhost:8000/admin](http://localhost:8000/admin).

After install, a user should have been created for you with the following login credentials:

>**email:** `admin@admin.com`   
>**password:** `password`

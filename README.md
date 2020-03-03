# API-Laravel

This is a API project for '2X3Global'.
For detailed explanation on how things work, checkout [Laravel docs](https://laravel.com/docs/).

## How to use

Required:

-   php
-   mysql
-   composer

```bash
# init project
$ composer install
$ cp .env.example .env
$ php artisan generate:key

# make migration and seeders
$ php artisan migrate
$ php artisan db:seed

# up server at localhost:8000
$ php artisan server

# listen job localhost:8000
$ php artisan job:work

# others configurations
$ QUEUE_CONNECTION=database
$ MAIL_HOST=smtp.mailtrap.io

```

start server [https://localhost:8000/api](https://localhost:8000/api)

## Authors

Developed by [Daniel Jara Pezzuoli](http://dpezz.me).
For help, please contact the [mail](mailto:jara.pezzuoli@gmail.com).

:-)

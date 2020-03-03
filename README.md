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
$ git clone https://github.com/Dpezz/test_2x3global.git
$ cd test_2x3global
$ composer install
$ cp .env.example .env
$ php artisan key:generate

# make migration and seeders
$ configure database .env
$ php artisan migrate
$ php artisan db:seed

# others configurations .env
$ QUEUE_CONNECTION=database
$ MAIL_HOST=smtp.mailtrap.io
$ configure mailtrap .env

# up server at localhost:8000
$ php artisan serve

# listen job localhost:8000
$ php artisan queue:work

```

start server [https://localhost:8000/api](https://localhost:8000/api)

## Authors

Developed by [Daniel Jara Pezzuoli](http://dpezz.me).
For help, please contact the [mail](mailto:jara.pezzuoli@gmail.com).

:-)

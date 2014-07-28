# Laravel Sextant

The idea for this package is based on [Rails' Sextant
gem](https://github.com/schneems/sextant). It allows you to easily view all
registered routes in the browser.

## How

Visit `http://$myapp/laravel/info/routes` to view your routes in a similair
fashion to `artisan routes`.

POST A SCREENSHOT

## Installation

- Add `app/config/app.php` => Service
- `php artisan asset:publish LeonBo/Sextant`
- `php artisan asset:publish leonbo-sextant`
- sass src/assets/sextant.scss public/sextant.css

- http://laravel.com/docs/packages
- https://github.com/jaiwalker/setup-laravel4-package
- vendor/laravel/framework/src/Illuminate/Foundation/Console/RoutesCommand.php

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## How to create this project

```console
composer create-project laravel/laravel admin
```

```console
composer require filament/filament
```

```console
php artisan filament:install --panels
```

```console
php artisan filament:install --panels
```

- Then config environments.

```console
php artisan migrate
```

```console
php artisan make:filament-user
```

- To serve static files (optional).

```console
php artisan storage:link
```

- To generate model and migration files and give the entity properties for DB.

```console
php artisan make:model Product -m
```

```console
php artisan make:model Gallery -m
```

- To generate resource form and list.

```console
php artisan make:filament-resource Product -G --soft-deletes
```

- (Optional) If you want to add a View page to an existing resource, create a new page in your resource's Pages directory:

```console
php artisan make:filament-page ViewProduct --resource=ProductResource --type=ViewRecord
```

- If you'd also like a View page, use the --view flag.

```console
php artisan make:filament-resource Gallery -G --soft-deletes --view
```

- Artisan command to create a relation manager.

- ProductResource is the name of the resource class. Since galleries belong to products, the galleries should be displayed on the Edit Product page.

- galleriies is the name of the relationship in the Product model.

- name is the column to display from the galleries table.

```console
php artisan make:filament-relation-manager ProductResource galleries name
```

- Register the new relation manager in the getRelations() method of the ProductResource.

- (Optional) Create a stats widget using the following artisan command:

```console
php artisan make:filament-widget ProductTypeOverview --stats-overview
```

- (Optional) Create a chart widget using the following artisan command:

```console
php artisan make:filament-widget ProductsChart --chart
```

- (Optional) To populate chart data from an Eloquent model, Filament recommends that you install the flowframe/laravel-trend package:

```console
composer require flowframe/laravel-trend
```


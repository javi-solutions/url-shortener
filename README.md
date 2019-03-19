# url-shortener

 Easy package that brings easy url shortening functionality to laravel framework.

 Structure of the package is based on two easy models for url shortening and its visits - with migrations of two main tables.

## Installation

composer require javi-solutions/url-shortener

## Settings

The package can be configurable trought appServiceProvider registration of class values.

### Turn off routes

If you want to use the package *without routes* add:

```php
JaviSolutions\UrlShortener\UrlShortener::withoutRoutes();
```

### Customizing route prefix

If you add other than Default route, use named route with name *urlShortening*.

to *register* method of your *AppServiceProvider*.

If you want to *change prefix* of route add:

```php
JaviSolutions\UrlShortener\UrlShortener::withPrefix('some-prefix');
```

to register method of your AppServiceProvider. Othervise the default prefix is */link/{id}*

If you want to *use redirect on route /{id}* pass null value in.

### Customizing observers

If you want to *turn off default observers* of visit and shortening add:

```php
JaviSolutions\UrlShortener\UrlShortener::withoutObservers();
```

to register method of your AppServiceProvider.
Default observer of shortening adds user_id to model data in creating method in case it is not set.
Default observer of shortening visit adds ip and user agent to model data in creating method in case they are not set.

## Seeding

If you want to seed in your application use package seeders:

```php
$this->call(JaviSolutions\UrlShortener\Database\Seeds\UrlShorteningSeeder::class);
$this->call(JaviSolutions\UrlShortener\Database\Seeds\UrlShorteningVisitSeeder::class);
```
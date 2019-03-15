# url-shortener
URL shortener Laravel package.

## Installation

composer require javi-solutions/url-shortener

## Settings

If you want to use the package *without routes* add:

```php
JaviSolutions\UrlShortener\UrlShortener::withoutRoutes();
```

If you add other than Default route, use named route with name *urlShortening*.

to *register* method of your *AppServiceProvider*.

If you want to *change prefix* of route add:

```php
JaviSolutions\UrlShortener\UrlShortener::withPrefix('some-prefix');
```

to register method of your AppServiceProvider.

If you want to *turn off default observer* of visit add:

```php
JaviSolutions\UrlShortener\UrlShortener::withoutObserver();
```

to register method of your AppServiceProvider. Default observer adds ip and user agent to model data in creating method in case they are not set.

## Seeding

If you want to seed in your application use package seeders:

```php
$this->call(JaviSolutions\UrlShortener\Database\Seeds\UrlShorteningSeeder::class);
$this->call(JaviSolutions\UrlShortener\Database\Seeds\UrlShorteningVisitSeeder::class);
```
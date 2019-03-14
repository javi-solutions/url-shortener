# url-shortener
URL shortener Laravel package.

## Installation

composer require javi-solutions/url-shortener

## Settings

If you want to use the package without routes add JaviSolutions\UrlShortener\UrlShortener::withoutRoutes(); to register method of your AppServiceProvider.

If you want to change prefix of route add JaviSolutions\UrlShortener\UrlShortener::withPrefix('some-prefix'); to register method of your AppServiceProvider.

## Seeding

If you want to seed in your application add:

use JaviSolutions\UrlShortener\Database\Seeds\UrlShorteningSeeder;
use JaviSolutions\UrlShortener\Database\Seeds\UrlShorteningVisitSeeder;

to your seeder and use as:

$this->call(UrlShorteningSeeder::class);
$this->call(UrlShorteningVisitSeeder::class);
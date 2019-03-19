<?php

namespace JaviSolutions\UrlShortener;

use Illuminate\Database\Eloquent\Factory as EloquentFactory;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use JaviSolutions\UrlShortener\Models\UrlShortening;
use JaviSolutions\UrlShortener\Models\UrlShorteningVisit;
use JaviSolutions\UrlShortener\Observers\UrlShorteningObserver;
use JaviSolutions\UrlShortener\Observers\UrlShorteningVisitObserver;

class UrlShorteninerServiceProvider extends ServiceProvider
{

    public function register()
    {

    }

    public function boot()
    {
        Relation::morphMap([
            'urlShortening' => JaviSolutions\UrlShortener\Models\UrlShortening::class,
            'urlShorteningVisit' => JaviSolutions\UrlShortener\Models\urlShorteningVisit::class,
        ]);

        if ($this->app->runningInConsole()) {
            $this->registerMigrations();
            $this->registerFactories();
        }

        // set observer for visits
        if (UrlShortener::getWithObservers() === true) {
            // register observer for generated IDs in URL shortening model
            UrlShortening::observe(UrlShorteningObserver::class);
            // register observer for URL shortening visit model
            UrlShorteningVisit::observe(UrlShorteningVisitObserver::class);
        }

        // register routes
        if (UrlShortener::getWithDefaultRoutes() === true) {
            require __DIR__ . '/Routes.php';
        }
    }

    protected function registerMigrations()
    {

        $this->publishes([
            __DIR__ . '/database/migrations' => database_path('migrations'),
        ], 'javi-url-shortener-migrations');

        return $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    /**
     * Register factories.
     *
     * @param  string  $path
     * @return void
     */
    protected function registerFactories()
    {
        $this->app->make(EloquentFactory::class)->load(__DIR__ . '/database/factories');
    }

}

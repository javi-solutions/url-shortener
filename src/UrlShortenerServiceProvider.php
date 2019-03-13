<?php

namespace JaviSolutions\UrlShortener;

use Illuminate\Database\Eloquent\Factory as EloquentFactory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

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

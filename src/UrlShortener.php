<?php

namespace JaviSolutions\UrlShortener;

class UrlShortener
{
    private static $withDefaultRoutes = true;
    private static $prefix = 'UrlShortening';

    /**
     * Binds the UrlShorteniner routes into the controller.
     *
     * @param  callable|null  $callback
     * @param  array  $options
     * @return void
     */
    public static function withoutRoutes()
    {
        self::$withDefaultRoutes = false;
    }

    public static function getWithDefaultRoutes()
    {
        return self::$withDefaultRoutes;
    }

    public static function getPrefix()
    {
        return self::$prefix;
    }

    public static function withPrefix( $prefix)
    {
        self::$prefix = $prefix;
    }

}

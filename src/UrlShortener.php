<?php

namespace JaviSolutions\UrlShortener;

class UrlShortener
{
    private static $withDefaultRoutes = true;
    private static $withObservers = true;
    private static $prefix = 'link';

    /**
     * Setting for without routes
     *
     * @return void
     */
    public static function withoutRoutes()
    {
        self::$withDefaultRoutes = false;
    }

    /**
     * Getter for default route setting parameter
     *
     * @return void
     */
    public static function getWithDefaultRoutes()
    {
        return self::$withDefaultRoutes === true;
    }

    /**
     * Getter for actual used route prefix
     *
     * @return void
     */
    public static function getPrefix()
    {
        return self::$prefix;
    }

    /**
     * Setter for prefix
     *
     * @param [type] $prefix
     * @return void
     */
    public static function withPrefix( $prefix)
    {
        self::$prefix = $prefix;
    }

    /**
     * Getter - if observers are turned on
     *
     * @return void
     */
    public static function getWithObservers()
    {
        return self::$withObservers === true;
    }

    /**
     * Setter for observers
     *
     * @return void
     */
    public static function withoutObserver()
    {
        self::$withObservers = false;
    }

    /**
     * Methode for route string for router
     *
     * @return void
     */
    public static function route()
    {
        return self::$prefix === null ? '/' : '/' . UrlShortener::getPrefix();
    }
}

<?php

namespace JaviSolutions\UrlShortener;

class UrlShortener
{
    private static $withDefaultRoutes = true;
    private static $withObservers = true;
    private static $prefix = 'UrlShortening';

    public static function withoutRoutes()
    {
        self::$withDefaultRoutes = false;
    }

    public static function getWithDefaultRoutes()
    {
        return self::$withDefaultRoutes === true;
    }

    public static function getPrefix()
    {
        return self::$prefix;
    }

    public static function withPrefix( $prefix)
    {
        self::$prefix = $prefix;
    }

    public static function getWithObservers()
    {
        return self::$withObservers === true;
    }

    public static function withoutObserver()
    {
        self::$withObservers = false;
    }

    public static function route()
    {
        return self::$prefix === null ? '/' : '/' . UrlShortener::getPrefix();
    }
}

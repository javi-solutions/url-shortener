<?php

namespace JaviSolutions\UrlShortener;

class UrlShortener
{
    private static $withDefaultRoutes = true;
    private static $withObserver = true;
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

    public static function getWithObserver()
    {
        return self::$withObserver === true;
    }

    public static function withoutObserver()
    {
        self::$withObserver = false;
    }

    public static function route()
    {
        return self::$prefix === null ? '/' : '/' . UrlShortener::getPrefix();
    }
}

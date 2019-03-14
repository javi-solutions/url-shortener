<?php

namespace JaviSolutions\UrlShortener\Observers;

use JaviSolutions\UrlShortener\Models\UrlShorteningVisit;

class UrlShorteningVisitObserver
{
    /**
     * Listen to the UrlShorteningVisit creating event.
     *
     * @param  JaviSolutions\UrlShortener\Models\UrlShorteningVisit  $urlShorteningVisit
     * @return void
     */
    public function creating(UrlShorteningVisit $urlShorteningVisit)
    {
        // prepare ip address if not set
        if ( empty($urlShorteningVisit->ip_address)) {
            $urlShorteningVisit->ip_address = request()->userAgent();
        }

        // prepare user agent if not set
        if ( empty($urlShorteningVisit->user_agent)) {
            $urlShorteningVisit->user_agent = request()->ip();
        }        
    }
}

<?php

namespace JaviSolutions\UrlShortener\Observers;

use Illuminate\Support\Str;
use JaviSolutions\UrlShortener\Models\UrlShortening;

class UrlShorteningObserver
{
    /**
     * Listen to the UrlShortening creating event.
     *
     * @param  JaviSolutions\UrlShortener\Models\UrlShortening  $urlShortening
     * @return void
     */
    public function creating(UrlShortening $urlShortening)
    {
        // prepare id if not set
        if (empty($urlShortening->id)) {
            do {
                $generatedId = strtoupper(Str::random(8));
            } while (UrlShortening::find($generatedId));

            $urlShortening->id = $generatedId;
        }
    }
}

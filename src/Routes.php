<?php

use JaviSolutions\UrlShortener\Models\UrlShortening;
use JaviSolutions\UrlShortener\UrlShortener;
use JaviSolutions\UrlShortener\Models\UrlShorteningVisit;

Route::get('/'. UrlShortener::getPrefix() . '/{id}', function ($id) {
    $urlShortening = UrlShortening::findOrFail($id);

    UrlShorteningVisit::create([
        'url_shortening_id' => $urlShortening->id
    ]);
    return redirect( UrlShortening::findOrFail($id)->url_target);
});
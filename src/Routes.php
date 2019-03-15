<?php

use Illuminate\Support\Facades\Redirect;
use JaviSolutions\UrlShortener\Models\UrlShortening;
use JaviSolutions\UrlShortener\Models\UrlShorteningVisit;
use JaviSolutions\UrlShortener\UrlShortener;

Route::get('/' . UrlShortener::getPrefix() . '/{id}', function ($id) {
    $urlShortening = UrlShortening::findOrFail($id);

    UrlShorteningVisit::create([
        'url_shortening_id' => $urlShortening->id,
    ]);
    return Redirect::to(UrlShortening::findOrFail($id)->url_target, 301);
})->name('urlShortener');

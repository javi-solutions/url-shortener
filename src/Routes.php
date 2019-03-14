<?php

use JaviSolutions\UrlShortener\Models\UrlShortening;
use JaviSolutions\UrlShortener\UrlShortener;

Route::get('/'. UrlShortener::getPrefix() . '/{id}', function ($id) {
    return redirect( UrlShortening::findOrFail($id)->url_target);
});
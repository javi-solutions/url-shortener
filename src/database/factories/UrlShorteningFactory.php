<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define( JaviSolutions\UrlShortener\Models\UrlShortening::class, function (Faker $faker) {
    return [
        'id' => strtoupper(Str::random(8)),
        'url_target' => $faker->url(),
        'user_id' => App\User::inRandomOrder()->firstOrFail()->id,
    ];
});

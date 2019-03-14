<?php

use Faker\Generator as Faker;

$factory->define(JaviSolutions\UrlShortener\Models\UrlShortening::class, function (Faker $faker) {
    return [
        'url_target' => $faker->url(),
        'user_id' => App\User::inRandomOrder()->firstOrFail()->id,
    ];
});

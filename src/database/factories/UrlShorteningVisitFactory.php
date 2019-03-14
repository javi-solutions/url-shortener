<?php

use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define( JaviSolutions\UrlShortener\Models\UrlShorteningVisit::class, function (Faker $faker) {
    return [
        'url_shortening_id' => JaviSolutions\UrlShortener\Models\UrlShortening::inRandomOrder()->firstOrFail()->id,
        'ip_address' => $faker->ipv6(),
        'user_agent' => $faker->userAgent(),
        'created_at' => Carbon::createFromTimestamp(rand(Carbon::now()->subDays(7)->timestamp, Carbon::now()->timestamp))
    ];
});

<?php

use Faker\Generator as Faker;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Relations\Relation;

$factory->define(Relation::$morphMap['urlShorteningVisit'], function (Faker $faker) {
    return [
        'url_shortening_id' => App\UrlShortening::inRandomOrder()->firstOrFail()->id,
        'ip_address' => $faker->ipv6(),
        'user_agent' => $faker->userAgent(),
        'created_at' => Carbon::createFromTimestamp(rand(Carbon::now()->subDays(7)->timestamp, Carbon::now()->timestamp))
    ];
});

<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\Relation;

$factory->define(Relation::$morphMap['urlShortening'], function (Faker $faker) {
    return [
        'id' => strtoupper(Str::random(8)),
        'url_target' => $faker->url(),
        'user_id' => App\User::inRandomOrder()->firstOrFail()->id,
    ];
});

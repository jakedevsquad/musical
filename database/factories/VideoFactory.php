<?php

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'url' => $faker->url,
        'description' => $faker->sentence(6),
    ];
});

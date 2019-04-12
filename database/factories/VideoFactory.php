<?php

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'url' => 'videos/7daoVTMXJDoWM4Lq6O0z7sthUAoPZFSatkmn0Zrg.mp4',
        'description' => $faker->sentence(6),
    ];
});

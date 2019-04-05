<?php

use App\Category;
use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->sentence(3, true),
        'category_id' => Category::inRandomOrder()->first()
    ];
});

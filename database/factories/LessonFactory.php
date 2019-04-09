<?php

use App\Course;
use App\Lesson;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3, true),
        'description' => $faker->sentence,
        'course_id' => Course::inRandomOrder()->first()
    ];
});

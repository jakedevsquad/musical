<?php

use App\Course;
use App\Lesson;
use App\Video;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3, true),
        'description' => $faker->sentence,
        'course_id' => Course::inRandomOrder()->first(),
        'video_id' => Video::inRandomOrder()->first(),
        'order' => '0',
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LessonTag;
use Faker\Generator as Faker;

$factory->define(LessonTag::class, function (Faker $faker) {
    return [
        'lesson_id'=>$faker->numberBetween(1,100),
        'tag_id'=>$faker->numberBetween(1,10),
    ];
});

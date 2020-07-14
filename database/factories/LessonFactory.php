<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lesson;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->numberBetween(1,50),
        'title' => $faker->word,
        'body' => $faker->paragraph,
    ];
});

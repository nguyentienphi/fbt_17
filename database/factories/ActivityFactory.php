<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Activity::class, function (Faker $faker) {
    return [
        'user_id' => App\Models\User::all()->random()->id,
        'book_id' => App\Models\Book::all()->random()->id,
        'action' => $faker->realText,
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'review_id' => App\Models\Review::all()->random()->id,
        'user_id' => App\Models\User::all()->random()->id,
        'content' => $faker->realText,
        'create_at' => $faker->dateTime(),
        'update_at' => $faker->dateTime(),
    ];
});

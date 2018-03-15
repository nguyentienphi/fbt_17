<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Request::class, function (Faker $faker) {
    return [
        'user_id' => App\Models\User::all()->random()->id,
        'book_name' => $faker->name,
        'status' => $faker->realText,
    ];
});

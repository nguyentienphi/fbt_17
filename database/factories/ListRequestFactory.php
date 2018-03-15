<?php

use Faker\Generator as Faker;

$factory->define(App\Models\ListRequest::class, function (Faker $faker) {
    return [
        'user_id' => App\Models\User::all()->random()->id,
        'book_id' => App\Models\User::all()->random()->id,
        'name' => $faker->name,
        'borrow_day' => $faker->dateTime(),
        'pay_day' => $faker->dateTime(),
    ];
});

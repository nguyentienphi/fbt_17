<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Following::class, function (Faker $faker) {
    return [
        'user_id' => App\Models\User::all()->random()->id,
        'following_id' => $faker->numberBetween(1, 11),
    ];
});

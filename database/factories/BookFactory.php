<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Book::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'author' => $faker->name,
        'number_page' => $faker->numberBetween(1, 250),
        'description' => $faker->realText,
        'category_id' => App\Models\Categories::all()->random()->id,
        'status' => $faker->realText,
        'create_at' => $faker->dateTime(),
    ];
});

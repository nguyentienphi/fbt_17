<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Book::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'author' => $faker->name,
        'description' => $faker->realText,
        'page_number' => $faker->numberBetween(1, 250),
        'category_id' => App\Models\Category::all()->random()->id,
        'status' => $faker->realText,
        'activity_id' => App\Models\Activity::all()->random()->id,
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Picture::class, function (Faker $faker) {
    return [
        'book_id' => App\Models\Book::all()->random()->id,
        'url' => $faker->image('public/uploads',400, 300, null, false),
    ];
});

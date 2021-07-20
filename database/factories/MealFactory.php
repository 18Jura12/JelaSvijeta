<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Meal;
use Faker\Generator as Faker;

$factory->define(Meal::class, function (Faker $faker) {
    $category = Category::all()->random();

    return [
        'title' => $faker->word(),
        'description' => $faker->paragraph(),
        'category_id' => $category->id,
    ];
});

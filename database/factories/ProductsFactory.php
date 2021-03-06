<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Model\Product::class, function (Faker $faker) {
    $categories = \App\Model\Category::get()->random();
    return [
        'name' => $faker->name,
        'prise' => rand(99,1200),
        'picture' => $faker->imageUrl(),
        'description' => $faker->text,
        'categories_id' =>$categories->id,
    ];
});

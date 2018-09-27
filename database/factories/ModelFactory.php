<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => 'secret'
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Restaurant::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Menu::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'restaurant_id' => $faker->numberBetween(1,20)
    ];
});

$factory->define(App\Address::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'restaurant_id' => $faker->numberBetween(1,20)
    ];
});

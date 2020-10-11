<?php

use App\Model\Category;
use App\Model\City;
use App\Model\Country;
use App\Model\Product;
use App\Model\State;
use App\User;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
$factory->define(Country::class, function (Faker $faker) {
    return [
        'country_name' => $faker->country,
    ];
});
$factory->define(State::class, function (Faker $faker) {
    return [
        'state_name' => $faker->state,
        'country_id'=>function(){
        return Country::all()->random();
        }
    ];
});
$factory->define(City::class, function (Faker $faker) {
    return [
        'city_name' => $faker->city,
        'state_id'=>function(){
        return State::all()->random();
        }
    ];
});
$factory->define(Category::class, function (Faker $faker) {
    return [
        'category_title' => $faker->company,
    ];
});
$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->paragraph(3, 30),
        'imageUrl' => $faker->imageUrl(500, 500),
        'score' => $faker->numberBetween(1, 20),
        'offer' => $faker->randomDigitNotNull,
        'price' => $faker->numberBetween(10000, 100000),
        'count' => $faker->randomDigitNotNull,
        'category_id' => function () {
            return Category::all()->random();
        },
    ];
});
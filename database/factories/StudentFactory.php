<?php

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

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'first_name' => str_random(5),
        'last_name' => str_random(5),
        'email' => $faker->unique()->safeEmail,
        'phone' => rand(5,11),

    ];
});

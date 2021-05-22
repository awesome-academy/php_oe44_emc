<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
        'user_name' => $faker->name,
        'password' => $faker->md5,
        'full_name' => $faker->name,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'birthday' => $faker->date,
        'gender' => $faker->numberBetween(0,1),
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'remember_token' => Str::random(10),
        'role_id' => $faker->numberBetween(1,2),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});

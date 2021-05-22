<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'parent_id' => $faker->numberBetween(1,10),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});

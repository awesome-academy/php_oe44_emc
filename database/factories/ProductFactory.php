<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'content' => $faker->text(100),
        'price' => $faker->numberBetween(5,50),
        'quantity' => $faker->numberBetween(5,10),
        'star' => $faker->numberBetween(1,5),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});

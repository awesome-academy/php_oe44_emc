<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product_Image;
use Faker\Generator as Faker;

$factory->define(Product_Image::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'product_id' => $faker->numberBetween(1,10),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});

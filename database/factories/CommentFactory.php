<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->text(100),
        'user_id' => $faker->numberBetween(1,10),
        'product_id' => $faker->numberBetween(1,10),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,   
    ];
});

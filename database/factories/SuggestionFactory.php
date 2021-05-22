<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Suggestion;
use Faker\Generator as Faker;

$factory->define(Suggestion::class, function (Faker $faker) {
    return [
        'content' => $faker->text(100),
        'status' => $faker->numberBetween(0,1),
        'user_id' => $faker->numberBetween(1,10),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});

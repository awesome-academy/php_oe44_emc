<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'delivery_address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'status' => $faker->numberBetween(0,1),
        'user_id' => $faker->numberBetween(1,10),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});

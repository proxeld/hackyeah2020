<?php

/* @var $factory Factory */

use App\Models\Service;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Service::class, function (Faker $faker) {

    return [
        'image' => $faker->imageUrl(),
        'title' => $faker->realText(40),
        'description' => $faker->text(120),
        'fee_int' => $faker->numberBetween(50, 200) * 100,
        'max_voucher_numbers' => $faker->numberBetween(1, 5) * 200,
        'discount_int' => $faker->numberBetween(1, 4) * 5,
        'user_id' => User::inRandomOrder()->first()->id,
    ];
});

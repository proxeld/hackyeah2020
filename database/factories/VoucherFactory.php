<?php

/* @var $factory Factory */

use App\Models\Service;
use App\Models\User;
use App\Models\Voucher;
use App\Services\Common\StaticArray;
use App\Services\Voucher\VoucherService;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Voucher::class, function (Faker $faker) {

    return [
        'code' => VoucherService::create_unique_code(),
        'voucher_status' => $faker->numberBetween(StaticArray::VOUCHER_STATUS_PENDING, StaticArray::VOUCHER_STATUS_USED),
        'service_id' => Service::inRandomOrder()->first()->id,
        'user_id' => User::inRandomOrder()->first()->id,
    ];
});

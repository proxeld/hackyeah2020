<?php

/* @var $factory Factory */

use App\Models\Service;
use App\Models\User;
use App\Models\Voucher;
use App\Services\Common\StaticArray;
use App\Services\Voucher\VoucherService;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Voucher::class, function (Faker $faker) {

    $kind = random_int(StaticArray::VOUCHER_RECEIVER_KIND_GUEST, StaticArray::VOUCHER_RECEIVER_KIND_CLIENT);
    $user = $kind ? User::inRandomOrder()->first() : null;

    return [
        'voucher_receiver_kind' => $kind,
        'code' => VoucherService::create_unique_code(),
        'voucher_status' => $faker->numberBetween(StaticArray::VOUCHER_STATUS_PENDING, StaticArray::VOUCHER_STATUS_USED),
        'service_id' => Service::inRandomOrder()->first()->id,
        'user_id' => $user ? $user->id : null,
        'voucher_receiver_email' => $user ? null : $faker->email,
        'voucher_receiver_name' => $user ? null : $faker->name,
        'created_at' => Carbon::now()->subDays(random_int(1, 10))->toDateTimeString(),
    ];
});

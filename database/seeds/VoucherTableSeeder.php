<?php

use App\Models\Voucher;
use Illuminate\Database\Seeder;

class VoucherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($k = 0; $k < 50; $k++) {
            factory(Voucher::class)->create();
        }
    }
}
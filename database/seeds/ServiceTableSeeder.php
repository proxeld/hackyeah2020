<?php

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($k = 0; $k < 10; $k++) {
            factory(Service::class)->create();
        }
    }
}
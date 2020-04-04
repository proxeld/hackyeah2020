<?php

use App\Models\User;
use App\Services\Common\StaticArray;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 2;
        for ($k = 0; $k < 20; $k++) {
            /** @var User $user */
            $user = factory(User::class)->create();
            if ($k % $i === 0) {
                $user->role = StaticArray::USER_ROLE_COMPANY;
                $user->save();
            } else if ($k % $i === 1) {
                $user->role = StaticArray::USER_ROLE_CLIENT;
                $user->save();
            }
        }
    }
}
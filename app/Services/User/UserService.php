<?php

namespace App\Services\User;

use App\Models\User;
use App\Services\Common\StaticArray;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;


/**
 * Class UserService
 * @package App\Services\User
 */
class UserService
{
    /**
     * @param $email
     * @param array $exclude
     * @return Builder|Model|object|null
     */
    public static function check_exist($email, $exclude = [])
    {
        return User::where('email', 'ilike', '%' . $email . '%')->whereNotIn('id', $exclude)->first();
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function check_client(User $user)
    {
        return self::check_role($user, StaticArray::USER_ROLE_CLIENT);
    }

    /**
     * @param User $user
     * @param $role
     * @return bool
     */
    protected static function check_role(User $user, $role)
    {
        return $user->role === $role;
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function check_company(User $user)
    {
        return self::check_role($user, StaticArray::USER_ROLE_COMPANY);
    }
}

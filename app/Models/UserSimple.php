<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Laravel\Passport\Client;
use Laravel\Passport\Token;

/**
 * App\Models\UserSimple
 *
 * @property-read Collection|Client[] $clients
 * @property-read int|null $clients_count
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection|Service[] $services
 * @property-read int|null $services_count
 * @property-write mixed $password
 * @property-read Collection|Token[] $tokens
 * @property-read int|null $tokens_count
 * @property-read Collection|Voucher[] $vouchers
 * @property-read int|null $vouchers_count
 * @method static Builder|UserSimple newModelQuery()
 * @method static Builder|UserSimple newQuery()
 * @method static Builder|UserSimple query()
 * @mixin Eloquent
 */
class UserSimple extends User
{
    protected $table = 'users';
    protected $visible = [
        'first_name', 'last_name', 'avatar'
    ];
}

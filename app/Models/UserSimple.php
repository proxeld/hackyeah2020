<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Support\Carbon;
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
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string $email
 * @property string|null $avatar
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property int $role
 * @property string|null $company_name
 * @property string|null $company_description
 * @property string|null $company_address
 * @property string|null $bank_account_number
 * @property string|null $bank_title
 * @property string|null $verification_video_url
 * @property string|null $verification_image_url
 * @method static Builder|UserSimple whereAvatar($value)
 * @method static Builder|UserSimple whereBankAccountNumber($value)
 * @method static Builder|UserSimple whereBankTitle($value)
 * @method static Builder|UserSimple whereCompanyAddress($value)
 * @method static Builder|UserSimple whereCompanyDescription($value)
 * @method static Builder|UserSimple whereCompanyName($value)
 * @method static Builder|UserSimple whereCreatedAt($value)
 * @method static Builder|UserSimple whereDeletedAt($value)
 * @method static Builder|UserSimple whereEmail($value)
 * @method static Builder|UserSimple whereFirstName($value)
 * @method static Builder|UserSimple whereId($value)
 * @method static Builder|UserSimple whereLastName($value)
 * @method static Builder|UserSimple wherePassword($value)
 * @method static Builder|UserSimple whereRememberToken($value)
 * @method static Builder|UserSimple whereRole($value)
 * @method static Builder|UserSimple whereUpdatedAt($value)
 * @method static Builder|UserSimple whereVerificationImageUrl($value)
 * @method static Builder|UserSimple whereVerificationVideoUrl($value)
 */
class UserSimple extends User
{
    protected $table = 'users';
    protected $visible = [
        'first_name', 'last_name', 'avatar'
    ];
}

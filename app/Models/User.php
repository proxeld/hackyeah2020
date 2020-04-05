<?php

namespace App\Models;

use Balping\HashSlug\HasHashSlug;
use Eloquent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Passport\Client;
use Laravel\Passport\HasApiTokens;
use Laravel\Passport\Token;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string $email
 * @property string $password
 * @property string|null $avatar
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $role
 * @property string|null $company_name
 * @property string|null $company_description
 * @property string|null $company_address
 * @property string|null $bank_account_number
 * @property string|null $bank_title
 * @property string|null $verification_video_url
 * @property string|null $verification_image_url
 * @property-read Collection|Client[] $clients
 * @property-read int|null $clients_count
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection|Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User whereAvatar($value)
 * @method static Builder|User whereBankAccountNumber($value)
 * @method static Builder|User whereBankTitle($value)
 * @method static Builder|User whereCompanyAddress($value)
 * @method static Builder|User whereCompanyDescription($value)
 * @method static Builder|User whereCompanyName($value)
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereFirstName($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereLastName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereRole($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @method static Builder|User whereVerificationImageUrl($value)
 * @method static Builder|User whereVerificationVideoUrl($value)
 * @mixin Eloquent
 * @property Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static Builder|User onlyTrashed()
 * @method static bool|null restore()
 * @method static Builder|User whereDeletedAt($value)
 * @method static Builder|User withTrashed()
 * @method static Builder|User withoutTrashed()
 * @property-read Collection|Service[] $services
 * @property-read int|null $services_count
 * @property-read Collection|Voucher[] $vouchers
 * @property-read int|null $vouchers_count
 */
class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasHashSlug, SoftDeletes;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'avatar',
        'company_name', 'company_address', 'company_description'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $hash = resolve('Illuminate\Contracts\Hashing\Hasher');
        $this->attributes['password'] = $hash->make($password);
    }

    public function services()
    {
        return $this->hasMany('\App\Models\Service');
    }

    public function vouchers()
    {
        return $this->hasMany('\App\Models\Voucher');
    }
}

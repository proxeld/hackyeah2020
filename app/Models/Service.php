<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Carbon;

/**
 * App\Models\Service
 *
 * @property int $id
 * @property int $user_id
 * @property string $image
 * @property string $title
 * @property string|null $description
 * @property int $fee_int
 * @property int $max_voucher_numbers
 * @property int|null $discount_int
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read User $user
 * @property-read Collection|Voucher[] $vouchers
 * @property-read int|null $vouchers_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static Builder|Service onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDiscountInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereFeeInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUserId($value)
 * @method static Builder|Service withTrashed()
 * @method static Builder|Service withoutTrashed()
 * @mixin Eloquent
 * @property-read UserCompany $company
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereMaxVoucherNumbers($value)
 */
class Service extends ValidModel
{
    // use soft delete instead of permanent delete
    use SoftDeletes;

    protected $visible = ['id', 'image', 'title', 'description', 'fee_int', 'max_voucher_numbers', 'discount_int', 'created_at', 'company'];

    protected $fillable = ['image', 'title', 'description', 'fee_int', 'max_voucher_numbers', 'discount_int'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('\App\Models\User');
    }

    public function company()
    {
        return $this->belongsTo('\App\Models\UserCompany', 'user_id');
    }

    public function vouchers()
    {
        return $this->hasMany('\App\Models\Voucher');
    }
}

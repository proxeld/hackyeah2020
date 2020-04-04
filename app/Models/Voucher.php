<?php

namespace App\Models;

use App\Services\Common\StaticArray;
use Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Carbon;

/**
 * App\Models\Voucher
 *
 * @property int $id
 * @property string $code
 * @property int $status
 * @property int $service_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Service $service
 * @property-read User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher newQuery()
 * @method static Builder|Voucher onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereVoucherStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereUserId($value)
 * @method static Builder|Voucher withTrashed()
 * @method static Builder|Voucher withoutTrashed()
 * @mixin Eloquent
 * @property int $voucher_status
 * @property int $voucher_receiver_kind
 * @property int|null $voucher_receiver_email
 * @property int|null $voucher_receiver_name
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereVoucherReceiverEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereVoucherReceiverKind($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereVoucherReceiverName($value)
 */
class Voucher extends ValidModel
{
    // use soft delete instead of permanent delete
    use SoftDeletes;

    protected $attributes = [
        'voucher_status' => StaticArray::VOUCHER_STATUS_PENDING,
        'voucher_receiver_kind' => StaticArray::VOUCHER_RECEIVER_KIND_GUEST,
        'voucher_receiver_email' => null,
        'voucher_receiver_name' => null,
    ];

    protected $visible = [
        'id', 'code', 'voucher_status', 'service', 'user',
        'voucher_receiver_kind', 'voucher_receiver_email', 'voucher_receiver_name',
        'created_at'
    ];

    protected $fillable = [
        'code', 'voucher_status', 'service_id', 'user_id',
        'voucher_receiver_kind', 'voucher_receiver_email',
        'voucher_receiver_name'
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function fill_update($data)
    {
        $this->fillable = ['voucher_status'];
        $this->fill($data);
    }

    public function user()
    {
        return $this->belongsTo('\App\Models\UserSimple', 'user_id');
    }

    public function service()
    {
        return $this->belongsTo('\App\Models\Service')->with('company');
    }
}

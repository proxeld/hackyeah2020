<?php

namespace App\Services\Voucher;

use App\Exceptions\WebException;
use App\Models\Service;
use App\Models\User;
use App\Models\Voucher;
use App\Services\Common\StaticArray;
use App\Services\Service\ServiceService;
use Exception;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class VoucherService
{

    /**
     * @param User $client
     * @param bool $query
     * @return Voucher|Voucher[]|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Collection
     */
    public static function index_client(User $client, $query = false)
    {
        $data = Voucher::with('service')->where('user_id', $client->id);
        if ($query) {
            return $data;
        }
        return $data->get();
    }


    /**
     * @param User $admin
     * @param bool $query
     * @return Voucher|\Illuminate\Database\Eloquent\Builder|Builder|Collection
     */
    public static function index_company(User $admin, $query = false)
    {
        $data = Voucher::with('user')->whereIn('service_id', ServiceService::get_user_services($admin)->pluck('id'));
        if ($query) {
            return $data;
        }
        return $data->get();
    }

    /**
     * @param $data
     * @return Voucher
     * @throws WebException
     */
    public static function store_for_guest($data)
    {
        $data = array_merge($data,
            [
                'voucher_receiver_kind' => StaticArray::VOUCHER_RECEIVER_KIND_GUEST,
                'user_id' => null
            ]
        );
        return self::store($data);
    }

    /**
     * @param User $user
     * @param $data
     * @return Voucher
     * @throws WebException
     */
    public static function store_for_client(User $user, $data)
    {
        $data = array_merge($data,
            [
                'voucher_receiver_kind' => StaticArray::VOUCHER_RECEIVER_KIND_CLIENT,
                'voucher_receiver_email' => null,
                'voucher_receiver_name' => null,
                'user_id' => $user->id
            ]
        );
        return self::store($data);
    }

    /**
     * @param $data
     * @return Voucher
     * @throws WebException
     */
    protected static function store($data)
    {
        $voucher = new Voucher();
        $voucher->fill($data);
        if (!$voucher->save()) {
            throw new WebException('Save error');
        }
        $service = Service::whereId($voucher->service_id)->first();
        if (!$service) {
            throw new WebException('Wrong Service');
        }
        ServiceService::check_limit($service);
        $voucher->voucher_status = StaticArray::VOUCHER_STATUS_PENDING;
        $voucher->code = self::create_unique_code();
        $voucher->save();
        return $voucher;
    }


    /**
     * @return string
     */
    public static function create_unique_code()
    {
        $code = strtoupper(Str::random(12));
        if (Voucher::whereCode($code)->exists()) {
            return self::create_unique_code();
        }
        return $code;
    }

    /**
     * @param Voucher $voucher
     * @param $data
     * @return Voucher
     * @throws WebException
     */
    public static function update(Voucher $voucher, $data)
    {
        $voucher->fill_update($data);
        if (!$voucher->save()) {
            throw new WebException('Save error');
        }
        $voucher->save();
        return $voucher;
    }

    /**
     * @param Voucher $voucher
     * @return Voucher
     */
    public static function delete(Voucher $voucher)
    {
        try {
            $voucher->delete();
        } catch (Exception $e) {
        }
        return $voucher;
    }


}
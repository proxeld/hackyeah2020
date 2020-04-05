<?php

namespace App\Services\Service;

use App\Exceptions\WebException;
use App\Models\Service;
use App\Models\User;
use App\Models\Voucher;
use App\Services\Common\StaticArray;
use DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Query\Builder;

class ServiceService
{
    /**
     * @param Service $service
     * @param $limit
     * @return \Illuminate\Support\Collection
     */
    public static function get_vouchers_statistics_status(Service $service, $limit)
    {
        $vouchers = DB::table('vouchers')->where('service_id', $service->id);
        if ($limit) {
            $vouchers = $vouchers->limit($limit);
        }
        return $vouchers->select('voucher_status', DB::raw('count(*) as total'))
            ->groupBy('voucher_status')->get();
    }


    /**
     * @param Service $service
     * @param $limit
     * @return Voucher[]|\Illuminate\Database\Eloquent\Builder[]|Collection|Builder[]|\Illuminate\Support\Collection
     */
    public static function get_vouchers_statistics_day(Service $service, $limit)
    {
        $vouchers = DB::table('vouchers')->where('service_id', $service->id);
        if ($limit) {
            $vouchers = $vouchers->limit($limit);
        }
        return $vouchers->select(DB::raw('date_trunc(\'day\', created_at)::date as created_at'), DB::raw('count(*) as total'))
            ->groupBy('created_at')
            ->get()
            ->sortBy(function ($product) {
                return $product->created_at;
            })
            ->values()->all();
    }

    /**
     * @param Service $service
     * @throws WebException
     */
    public static function check_limit(Service $service)
    {
        if ($service->max_voucher_numbers &&
            $service->vouchers()->where('voucher_status', StaticArray::VOUCHER_STATUS_USED)->count()
            >= $service->max_voucher_numbers) {
            throw new WebException('Limit reached');
        }
    }

    /**
     * @param User $user
     * @return Service[]|Collection
     */
    public static function get_user_services(User $user)
    {
        return $user->services;
    }


    /**
     * @return Service[]|Collection
     */
    public static function index_company(User $user)
    {
        return Service::whereUserId($user->id)->get();
    }

    /**
     * @param $data
     * @return Service
     * @throws WebException
     */
    public static function store($data)
    {
        $service = new Service($data);
        if (!$service->save()) {
            throw new WebException('Save error');
        }
        $service->save();
        return $service;
    }

    /**
     * @param Service $service
     * @param $data
     * @return Service
     * @throws WebException
     */
    public static function update(Service $service, $data)
    {
        $service->fill($data);
        if (!$service->save()) {
            throw new WebException('Save error');
        }
        $service->save();
        return $service;
    }


}
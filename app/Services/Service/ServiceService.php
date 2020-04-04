<?php

namespace App\Services\Service;

use App\Exceptions\WebException;
use App\Models\Service;
use App\Models\User;
use App\Services\Common\StaticArray;
use Illuminate\Database\Eloquent\Collection;

class ServiceService
{

    /**
     * @param Service $service
     * @throws WebException
     */
    public static function check_limit(Service $service)
    {
        if ($service->max_voucher_numbers && $service->vouchers()->where('voucher_status', StaticArray::VOUCHER_STATUS_USED)->count() >= $service->max_voucher_numbers) {
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
    public static function index()
    {
        return Service::get();
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
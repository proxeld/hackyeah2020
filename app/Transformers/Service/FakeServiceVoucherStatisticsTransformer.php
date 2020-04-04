<?php

namespace App\Transformers\Service;

use App\Models\Service;
use App\Models\Voucher;
use App\Services\Service\ServiceService;
use League\Fractal\TransformerAbstract;

/**
 * Class FakeServiceVoucherStatisticsTransformer
 * @package App\Transformers\Finances
 */
class FakeServiceVoucherStatisticsTransformer extends TransformerAbstract
{
    private $fileSystem;

    public function __construct()
    {
        $this->fileSystem = resolve('Illuminate\Contracts\Filesystem\Factory');
    }

    /**
     * Transform
     *
     * @param Service $service
     * @param null $limit
     * @return array
     */
    public function transform($limit = null)
    {
        /** @var Service $service */
        $service = Service::where('id', Voucher::inRandomOrder()->first()->service_id)->first();
        $limit = $limit && is_int($limit) ? $limit : null;
        return [
            'service' => $service,
            'voucher_statistics_day' => ServiceService::get_vouchers_statistics_day($service, $limit),
            'voucher_statistics_kind' => ServiceService::get_vouchers_statistics_status($service, $limit),
        ];
    }

}

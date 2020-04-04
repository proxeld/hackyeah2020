<?php

namespace App\Http\Controllers\Guest;

use App\Exceptions\WebException;
use App\Http\Controllers\RestController;
use App\Http\Requests\VoucherGuestRequest;
use App\Models\Voucher;
use App\Services\Voucher\VoucherService;
use App\Transformers\Voucher\VoucherGuestTransformer;
use Illuminate\Http\JsonResponse;

/**
 * Class GuestVouchersController
 * @group guest/vouchers
 *
 * @voucher App\Http\Controllers\Client
 */
class GuestVouchersController extends RestController
{

    /**
     * store
     *
     * Store a new voucher
     *
     * @transformer \App\Transformers\Voucher\VoucherGuestTransformer
     * @transformerModel  \App\Models\Voucher
     *
     * @param VoucherGuestRequest $request
     * @return JsonResponse
     */
    public function store(VoucherGuestRequest $request)
    {
        try {
            $data = $request->validated();
            $model = VoucherService::store_for_guest($data);
            return $this->json_success($this->get_voucher_with_details($model));
        } catch (WebException $e) {
            $details = $e->getDetails();
            return $this->json_error($e->getMessage(), $details, $details && count($details) > 0 ? 422 : 400);
        }
    }

    /**
     * @param Voucher $voucher
     * @return array
     */
    protected function get_voucher_with_details(Voucher $voucher)
    {
        return (new VoucherGuestTransformer())->transform($voucher);
    }

}

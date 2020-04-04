<?php

namespace App\Http\Controllers\Client;

use App\Exceptions\WebException;
use App\Http\Controllers\RestController;
use App\Http\Requests\VoucherRequest;
use App\Models\Voucher;
use App\Services\Voucher\VoucherService;
use App\Transformers\Voucher\VoucherTransformer;
use Auth;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\JsonResponse;

/**
 * Class ClientVoucherController
 * @group client/vouchers
 *
 * @voucher App\Http\Controllers\Client
 */
class ClientVouchersController extends RestController
{

    /**
     * index
     *
     * Get all vouchers
     *
     * @transformercollection \App\Transformers\Service\ServiceTransformer
     * @transformerModel \App\Models\Service
     *
     * @return LengthAwarePaginator|mixed
     */
    public function index()
    {
        return $this->json_success(VoucherService::index_client(Auth::user()));
    }


    /**
     * store
     *
     * Store a new voucher
     *
     * @transformer \App\Transformers\Service\ServiceTransformer
     * @transformerModel \App\Models\Service
     *
     * @param VoucherRequest $request
     * @return JsonResponse
     */
    public function store(VoucherRequest $request)
    {
        try {
            $data = $request->validated();
            $model = VoucherService::store(Auth::user(), $data);
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
        return (new VoucherTransformer())->transform($voucher);
    }

    /**
     * get
     *
     * Get voucher by ID
     *
     * @urlParam id required integer The ID of the voucher.
     *
     * @transformer \App\Transformers\Service\ServiceTransformer
     *
     * @param $voucher_id int required The id of the voucher. Example: 1
     * @return JsonResponse
     */
    public function show($voucher_id)
    {
        $voucher = self::check_voucher_access_for_client($voucher_id);
        return $this->json_success($this->get_voucher_with_details($voucher));
    }

    /**
     * @param $voucher_id
     * @return Voucher
     */
    protected static function check_voucher_access_for_client($voucher_id)
    {
        return VoucherService::index_client(Auth::user(), true)->findOrFail($voucher_id);
    }

    /**
     * delete
     *
     * Remove voucher by ID
     *
     * @urlParam id required integer The ID of the voucher.
     *
     * @transformer \App\Transformers\Service\ServiceTransformer
     *
     * @param $voucher_id int required The id of the voucher. Example: 1
     * @return JsonResponse
     */
    public function delete($voucher_id)
    {
        $voucher = self::check_voucher_access_for_client($voucher_id);
        VoucherService::delete($voucher);
        return $this->json_success($this->get_voucher_with_details($voucher));
    }

}

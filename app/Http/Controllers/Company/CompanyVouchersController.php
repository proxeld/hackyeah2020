<?php

namespace App\Http\Controllers\Company;

use App\Exceptions\WebException;
use App\Http\Controllers\RestController;
use App\Http\Requests\VoucherUpdateRequest;
use App\Models\Voucher;
use App\Services\Voucher\VoucherService;
use App\Transformers\Voucher\VoucherTransformer;
use Auth;
use Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\JsonResponse;

/**
 * Class CompanyVoucherController
 * @group company/vouchers
 *
 * @voucher App\Http\Controllers\Company
 */
class CompanyVouchersController extends RestController
{

    /**
     * index
     *
     * Get all vouchers
     *
     * @transformercollection \App\Transformers\Voucher\VoucherTransformer
     * @transformerModel \App\Models\Voucher
     *
     * @return LengthAwarePaginator|mixed
     */
    public function index()
    {
        return $this->json_success(VoucherService::index_company(Auth::user()));
    }

    /**
     * get
     *
     * Get voucher by ID
     *
     * @urlParam voucher_id required integer The ID of the voucher.
     *
     * @transformer \App\Transformers\Voucher\VoucherTransformer
     *
     * @param $voucher_id int required The id of the voucher. Example: 1
     * @return JsonResponse
     */
    public function show($voucher_id)
    {
        $voucher = self::check_voucher_access_for_company($voucher_id);
        return $this->json_success($this->get_voucher_with_details($voucher));
    }

    /**
     * @param $voucher_id
     * @return Voucher
     */
    protected static function check_voucher_access_for_company($voucher_id)
    {
        return VoucherService::index_company(Auth::user(), true)->findOrFail($voucher_id);
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
     * update
     *
     * Update voucher by ID
     * @urlParam voucher_id required integer The ID of the voucher.
     * @transformer \App\Transformers\Voucher\VoucherTransformer
     *
     * @param VoucherUpdateRequest $request
     * @param $voucher_id int required The id of the voucher. Example: 1
     * @return JsonResponse
     */
    public function update(VoucherUpdateRequest $request, $voucher_id)
    {
        $voucher = self::check_voucher_access_for_company($voucher_id);
        $data = $request->validated();
        try {
            $voucher = VoucherService::update($voucher, $data);
            return $this->json_success($this->get_voucher_with_details($voucher));
        } catch (WebException $e) {
            return $this->json_error($e->getMessage());
        }
    }

    /**
     * delete
     *
     * Remove voucher by ID
     *
     * @urlParam voucher_id required integer The ID of the voucher.
     *
     * @transformer \App\Transformers\Voucher\VoucherTransformer
     *
     * @param $voucher_id int required The id of the voucher. Example: 1
     * @return JsonResponse
     */
    public function delete($voucher_id)
    {
        $voucher = self::check_voucher_access_for_company($voucher_id);
        try {
            $voucher->delete();
        } catch (Exception $e) {
        }

        return $this->json_success($this->get_voucher_with_details($voucher));
    }

}

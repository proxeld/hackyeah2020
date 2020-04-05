<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\RestController;
use App\Models\User;
use App\Transformers\User\UserCompanyStatisticsTransformer;
use Auth;
use Illuminate\Http\JsonResponse;

/**
 * Class CompanyFinancesController
 * @group company/finances
 *
 * @voucher App\Http\Controllers\Company
 */
class CompanyFinancesController extends RestController
{

    /**
     * vouchers
     *
     * Get statistics for vouchers
     *
     * @urlParam service_id required integer The ID of the service.
     *
     * @transformer \App\Transformers\User\FakeUserCompanyStatisticsTransformer
     * @transformerModel \App\Models\User
     *
     * @return JsonResponse
     */
    public function vouchers()
    {
        return $this->json_success(self::get_company_statistics(Auth::user()));
    }

    /**
     * @param User $user
     * @return array
     */
    protected function get_company_statistics(User $user)
    {
        return (new UserCompanyStatisticsTransformer())->transform($user);
    }

}

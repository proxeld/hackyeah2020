<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\RestController;
use App\Models\User;
use App\Services\Common\StaticArray;
use App\Transformers\User\UserCompanyTransformer;
use Illuminate\Http\JsonResponse;

/**
 * Class GuestUserCompaniesController
 * @group guest/user-companies
 *
 * @service App\Http\Controllers\Client
 */
class GuestUserCompaniesController extends RestController
{

    /**
     * get
     *
     * Get service by ID
     *
     * @urlParam id required integer The ID of the service.
     *
     * @transformer \App\Transformers\User\UserCompanyTransformer
     *
     * @param $company_id int required The id of the service. Example: 1
     * @return JsonResponse
     */
    public function show($company_id)
    {
        $service = User::whereRole(StaticArray::USER_ROLE_COMPANY)->findOrFail($company_id);
        return $this->json_success($this->get_service_with_details($service));
    }

    /**
     * @param User $user
     * @return array
     */
    protected function get_service_with_details(User $user)
    {
        return (new UserCompanyTransformer())->transform($user);
    }

}

<?php

namespace App\Http\Controllers\Company;

use App\Exceptions\WebException;
use App\Http\Controllers\RestController;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Services\Service\ServiceService;
use App\Transformers\Service\ServiceTransformer;
use Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\JsonResponse;

/**
 * Class CompanyServiceController
 * @group company/services
 *
 * @service App\Http\Controllers\Company
 */
class CompanyServicesController extends RestController
{

    /**
     * index
     *
     * Get all services
     *
     * @transformercollection \App\Transformers\Service\ServiceTransformer
     * @transformerModel \App\Models\Service
     *
     * @return LengthAwarePaginator|mixed
     */
    public function index()
    {
        return $this->json_success(ServiceService::index());
    }


    /**
     * store
     *
     * Store a new service
     *
     * @transformer \App\Transformers\Service\ServiceTransformer
     * @transformerModel \App\Models\Service
     *
     * @param ServiceRequest $request
     * @return JsonResponse
     */
    public function store(ServiceRequest $request)
    {
        try {
            $data = $request->validated();
            $model = ServiceService::store($data);
            return $this->json_success($this->get_service_with_details($model));

        } catch (WebException $e) {
            $details = $e->getDetails();
            return $this->json_error($e->getMessage(), $details, $details && count($details) > 0 ? 422 : 400);
        }
    }

    /**
     * @param Service $service
     * @return array
     */
    protected function get_service_with_details(Service $service)
    {
        return (new ServiceTransformer())->transform($service);
    }

    /**
     * get
     *
     * Get service by ID
     *
     * @urlParam id required integer The ID of the service.
     *
     * @transformer \App\Transformers\Service\ServiceTransformer
     *
     * @param $id int required The id of the service. Example: 1
     * @return JsonResponse
     */
    public function show($id)
    {
        $model = Service::findOrFail($id);
        return $this->json_success($this->get_service_with_details($model));
    }

    /**
     * update
     *
     * Update category by ID
     *
     * @urlParam id required integer The ID of the service.
     *
     * @transformer \App\Transformers\Service\ServiceTransformer
     *
     * @param ServiceRequest $request
     * @param $id int required The id of the service. Example: 1
     * @return JsonResponse
     */
    public function update(ServiceRequest $request, $id)
    {
        $service = Service::findOrFail($id);
        $data = $request->validated();
        try {
            $service = ServiceService::update($service, $data);
            return $this->json_success($this->get_service_with_details($service));
        } catch (WebException $e) {
            return $this->json_error($e->getMessage());
        }
    }

    /**
     * delete
     *
     * Remove service by ID
     *
     * @urlParam id required integer The ID of the service.
     *
     * @transformer \App\Transformers\Service\ServiceTransformer
     *
     * @param $id int required The id of the service. Example: 1
     * @return JsonResponse
     */
    public function delete($id)
    {
        $service = Service::findOrFail($id);
        try {
            $service->delete();
        } catch (Exception $e) {
        }

        return $this->json_success($this->get_service_with_details($service));
    }

}

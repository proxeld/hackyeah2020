<?php

namespace App\Transformers\Service;

use App\Models\Service;
use League\Fractal\TransformerAbstract;

/**
 * Class ServiceTransformer
 * @package App\Transformers\Service
 */
class ServiceTransformer extends TransformerAbstract
{
    private $fileSystem;

    public function __construct()
    {
        $this->fileSystem = resolve('Illuminate\Contracts\Filesystem\Factory');
    }

    /**
     * Transform the User entity.
     *
     * @param Service $model
     *
     * @return array
     */
    public function transform(Service $model)
    {
        return $model->toArray();
    }
}

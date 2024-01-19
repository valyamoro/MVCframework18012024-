<?php

namespace app\Services\Products;

use app\Services\BaseService;

class ProductService extends BaseService
{
    public function getProducts(): array
    {
        return $this->repository->getProducts();
    }

}

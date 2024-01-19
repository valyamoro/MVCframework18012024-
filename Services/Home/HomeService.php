<?php

namespace app\Services\Home;

use app\Services\BaseService;

class HomeService extends BaseService
{
    public function getProducts(): array
    {
        return $this->repository->getProducts();
    }

}

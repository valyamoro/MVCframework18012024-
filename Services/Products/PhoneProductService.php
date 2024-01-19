<?php

namespace app\Services\Products;

use app\Services\BaseService;

class PhoneProductService extends BaseService
{
    public function getProducts(): array
    {
        $result = $this->repository->getProducts();

        if (empty($result)) {
            $result[0] = 'В базе данных нету телефонов!' . "\n";
        } else {
            foreach ($result as $key => $value) {
                $result[$key]['url'] = '/products' . '/phone/show/' . $value['id'];
            }
        }

        return $result;
    }

}

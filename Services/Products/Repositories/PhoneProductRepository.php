<?php

namespace app\Services\Products\Repositories;

use app\Model\PhoneProductModel;
use app\Services\BaseRepository;

class PhoneProductRepository extends BaseRepository
{
    public function getProducts(): array
    {
        $query = 'select * from ' . PhoneProductModel::TABLE_NAME;

        $this->connection->prepare($query)->execute();

        return $this->connection->fetchAll();
    }

}

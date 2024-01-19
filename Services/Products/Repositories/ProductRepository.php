<?php

namespace app\Services\Products\Repositories;

use app\Model\ProductModel;
use app\Services\BaseRepository;

class ProductRepository extends BaseRepository
{
    public function getProducts(): array
    {
        $query = 'select * from ' . ProductModel::TABLE_NAME;

        $this->connection->prepare($query)->execute();

        return $this->connection->fetchAll();
    }
}
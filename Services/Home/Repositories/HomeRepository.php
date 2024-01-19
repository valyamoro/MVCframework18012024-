<?php

namespace app\Services\Home\Repositories;

use app\Services\BaseRepository;

class HomeRepository extends BaseRepository
{
    public function getProducts(): array
    {
        $query = 'select * from products';

        $this->connection->prepare($query)->execute();

        return $this->connection->fetchAll();
    }
}
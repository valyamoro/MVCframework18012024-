<?php

namespace app\Services;

use app\Database\DatabaseConnection;

class BaseRepository
{
    public function __construct(
        protected DatabaseConnection $connection,
    ) {}

}

<?php

namespace app\Services;

use app\Database\DatabaseConnection;
use app\Database\DatabasePDOConnection;
use app\Database\PDODriver;

abstract class BaseRepository
{
    public function __construct(
        protected PDODriver $connection,
    ) {}

}

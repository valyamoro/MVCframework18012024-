<?php

namespace app\core;

use app\Database\DatabaseConnection;
use app\Database\PDODriver;
use app\Services\BaseService;

abstract class Controller
{
    public function __construct(
        protected PDODriver $connection,
        protected BaseService $service,
    ) {}
}
<?php

namespace app\core;

use app\Database\DatabaseConfiguration;
use app\Database\DatabaseConnection;
use app\Database\DatabasePDOConnection;
use app\Database\PDODriver;

class Router
{
    private function getUri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function dispatch(): string
    {
        $uri = parse_url($this->getUri());

        $segments = $uri['path'] === '/'
            ? 'Home'
            : \explode('/', \ltrim($uri['path'], '/'));

        $namespace = 'app\Controllers\\';
        $method = 'index';

        if ($segments === 'Home') {
            $class = $namespace . $segments;
        }

        $repository = new ("app\Services\\{$segments}\Repositories\\{$segments}Repository")($this->getConnection());

        $service = new ("app\Services\\{$segments}\\{$segments}Service")($repository);

        $obj = new ($class . 'Controller')($this->getConnection(), $service);

        return $obj->index($segments);
    }

    public function getConnection(): PDODriver
    {
        $configuration = require __DIR__ . '/../config/db.php';

        $dataBaseConfiguration = new DatabaseConfiguration(...$configuration);
        $dataBasePDOConnection = new DatabasePDOConnection($dataBaseConfiguration);

        return new PDODriver($dataBasePDOConnection->connection());
    }

    public function resolve()
    {
        echo $this->dispatch();
    }
}
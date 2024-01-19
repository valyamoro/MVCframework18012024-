<?php

namespace app\core;

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

        return '';
    }
}
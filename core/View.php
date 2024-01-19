<?php

namespace app\core;

class View
{
    public static function render(string $view, array $params = []): string
    {
        \extract($params);
        \ob_start();
        require_once __DIR__ . "/../Views/{$view}.php";
        return \ob_get_clean();
    }

}

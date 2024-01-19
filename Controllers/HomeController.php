<?php

namespace app\Controllers;

use app\core\Controller;
use app\core\View;

class HomeController extends Controller
{
    public function index(string $view)
    {
        $products['products'] = $this->service->getProducts();

        return View::render($view, $products);
    }
}
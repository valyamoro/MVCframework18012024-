<?php

namespace app\Controllers;

use app\core\Controller;
use app\core\View;

class ProductController extends Controller
{
    public function index(string $view): string
    {
        $products['products'] = $this->service->getProducts();

        return View::render($view, $products);
    }
}
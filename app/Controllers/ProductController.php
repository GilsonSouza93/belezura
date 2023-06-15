<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public $tittle = 'Produtos';
    public $addButtonText = 'Novo produto';
    public $viewPath = 'stock/product';
    public $baseRoute = '/estoque/produtos';

    public function index() {
        return view($this->viewPath . '/index', $this->data);
    }
}

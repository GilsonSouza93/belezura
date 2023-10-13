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

    public function __construct()
    {
        $this->mainModel = model('ProductModel');
        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $products = $this->mainModel->search($data->search);

        return $this->response->setJSON($products);
    }
}

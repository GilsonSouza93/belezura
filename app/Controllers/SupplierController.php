<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SupplierController extends BaseController
{
    public $tittle = 'Fornecedores';
    public $addButtonText = 'Novo Fornecedor';
    public $viewPath = 'stock/supplier';
    public $baseRoute = '/estoque/fornecedores';
}

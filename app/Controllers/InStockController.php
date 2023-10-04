<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class InStockController extends BaseController
{
    public $tittle = 'Entradas';
    public $addButtonText = 'Adicionar Entrada';
    public $viewPath = 'inStock';
    public $baseRoute = '/estoque/entradas';
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class OutStockController extends BaseController
{
    public $tittle = 'Saídas';
    public $addButtonText = 'Adicionar Saída';
    public $viewPath = 'outStock';
    public $baseRoute = '/estoque/saidas';
}


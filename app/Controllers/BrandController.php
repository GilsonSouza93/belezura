<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BrandController extends BaseController
{
    public $tittle = 'Marcas';
    public $addButtonText = 'Novo marca';
    public $viewPath = 'stock/brand';
    public $baseRoute = '/estoque/marcas';
}

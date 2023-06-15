<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CategoryController extends BaseController
{
    public $tittle = 'Categorias';
    public $addButtonText = 'Nova Categoria';
    public $viewPath = 'stock/category';
    public $baseRoute = '/estoque/categorias';
}

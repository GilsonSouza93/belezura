<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PostController extends BaseController
{
    public $tittle = 'Postes';
    public $addButtonText = 'Novo Poste';
    public $viewPath = 'equipamentos/post';
    public $baseRoute = '/equipamentos/post';
}
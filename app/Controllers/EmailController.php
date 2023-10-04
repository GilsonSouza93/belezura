<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EmailController extends BaseController
{
    public $tittle = 'Email';
    public $addButtonText = 'Cadastrar email';
    public $viewPath = 'email';
    public $baseRoute = '/gerencial/email';
}

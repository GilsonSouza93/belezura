<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PasswordController extends BaseController
{
    public $tittle = 'Senhas';
    public $addButtonText = 'Nova ONU';
    public $viewPath = 'password';
    public $baseRoute = '/configuracoes/senha';
}

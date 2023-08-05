<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AccountController extends BaseController
{
    public $tittle = 'Contas';
    public $addButtonText = 'Nova Conta';
    public $viewPath = 'account';
    public $baseRoute = '/configuracoes/contas';

    public function __construct()
    {
        $this->mainModel = model('CustomerModel');
        parent::__construct();
    }
}
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
        $this->mainModel = model('AccountModel');
        parent::__construct();
    }

    
    public function search()
    {
        $data = $this->request->getJSON();
        
        $accounts = $this->mainModel->search($data->search);

        return $this->response->setJSON($accounts);
    }
}
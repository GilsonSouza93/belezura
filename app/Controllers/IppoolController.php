<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class IppoolController extends BaseController
{

    public $tittle = 'IP Pool';
    public $addButtonText = 'Novo IP POOL';
    public $viewPath = 'ippool';
    public $baseRoute = '/configuracoes/ippool';

    public function __construct()
    {
        $this->mainModel = model('IppoolModel');
        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $ippools = $this->mainModel->search($data->search);

        return $this->response->setJSON($ippools);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ServidorController extends BaseController
{
    public $tittle = 'Servidores';
    public $addButtonText = 'Novo servidor';
    public $viewPath = 'equipamentos/servidor';
    public $baseRoute = '/equipamentos/servidor';

    public function __construct()
    {
        $this->mainModel = model('ServerModel');
        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $servers = $this->mainModel->search($data->search);

        return $this->response->setJSON($servers);
    }
    
}

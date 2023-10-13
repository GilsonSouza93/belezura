<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RouterController extends BaseController
{
    public $tittle = 'Roteadores';
    public $addButtonText = 'Novo roteador';
    public $viewPath = 'equipamentos/router';
    public $baseRoute = '/equipamentos/router';

    public function __construct()
    {
        $this->mainModel = model('RouterModel');
        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $routers = $this->mainModel->search($data->search);

        return $this->response->setJSON($routers);
    }
}

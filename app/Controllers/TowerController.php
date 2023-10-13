<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TowerController extends BaseController
{
    public $tittle = 'Torre';
    public $addButtonText = 'Nova Torre';
    public $viewPath = 'equipamentos/tower';
    public $baseRoute = '/equipamentos/tower';

    public function __construct()
    {
        $this->mainModel = model('TowerModel');
        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $towers = $this->mainModel->search($data->search);

        return $this->response->setJSON($towers);
    }

}

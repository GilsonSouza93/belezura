<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TowerController extends BaseController
{
    public $tittle = 'Torre';
    public $addButtonText = 'Nova Torre';
    public $viewPath = 'equipamentos/tower';
    public $baseRoute = '/equipamentos/tower';

    public $popModel;

    public function __construct()
    {
        $this->mainModel = model('PoleModel');
        $this->popModel = model('PopModel');
        $this->data['pop'] = $this->popModel->findAll();
        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $towers = $this->mainModel->search($data->search);

        return $this->response->setJSON($towers);
    }

}

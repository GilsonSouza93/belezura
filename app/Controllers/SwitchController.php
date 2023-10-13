<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SwitchController extends BaseController
{

    public $tittle = 'Switch';
    public $addButtonText = 'Novo Switch';
    public $viewPath = 'equipamentos/switch';
    public $baseRoute = '/equipamentos/switch';
     
    public function __construct()
    {
        $this->mainModel = model('SwitchModel');
        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $switchs = $this->mainModel->search($data->search);

        return $this->response->setJSON($switchs);
    }
}

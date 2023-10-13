<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class OltController extends BaseController
{
      
    public $tittle = 'Olt';
    public $addButtonText = 'Nova Olt';
    public $viewPath = 'equipamentos/olt';
    public $baseRoute = '/equipamentos/olt';
     
    public function __construct()
    {
        $this->mainModel = model('OltModel');
        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $olts = $this->mainModel->search($data->search);

        return $this->response->setJSON($olts);
    }
}

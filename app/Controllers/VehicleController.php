<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class VehicleController extends BaseController
{
    public $tittle = 'Veículos';
    public $addButtonText = 'Nova Veículo';
    public $viewPath = 'vehicle';
    public $baseRoute = '/gerencial/veiculos';

    public function __construct()
    {
        $this->mainModel = model('VehicleModel');
        parent::__construct();
    }

    public function save()
    {
        $data = $this->request->getJSON();
        var_dump($data); die;
        
        $data = [
            "error" => true
        ];

        return $this->response->setJSON($data);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class VehicleController extends BaseController
{
    public $tittle = 'Veículos';
    public $addButtonText = 'Nova Veículo';
    public $viewPath = 'vehicle';
    public $baseRoute = '/gerencial/veiculos';

    public function save()
    {
        // $data = $this->request->getJSON();

        $data = [
            "error" => false
        ];

        return $this->response->setJSON($data);
    }
}

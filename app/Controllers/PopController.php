<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PopController extends BaseController
{
    public $tittle = 'Pop';
    public $addButtonText = 'Novo Pop';
    public $viewPath = 'pop';
    public $baseRoute = '/gerencial/pop';

    public function __construct()
    {
        $this->mainModel = model('App\Models\PopModel');
        return parent::__construct();
    }

    public function save()
    {
        $data = $this->request->getJSON();
        
        $theadData = [
            "city" => $data->cidade,
            "population" => $data->populacao,
            "ibge_code" => $data->codigo_ibge,
            "uf" => $data->uf,
            "carrier" => $data->portador_padrao,
            "plan" => $data->plano,
            "nas" => $data->nas,
            "user" => $data->usuario,
            "active" => $data->active
        ];

        $response = $this->mainModel->insert($theadData);

        if($response) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Salvo com sucesso'
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Houve um erro'
            ]);
        }
    }
}

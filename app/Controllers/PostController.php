<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class PostController extends BaseController
{
    public $tittle = 'Postes';
    public $addButtonText = 'Novo Poste';
    public $viewPath = 'equipamentos/poste';
    public $baseRoute = '/equipamentos/poste';

    public function __construct()
    {
        $this->mainModel = model('PostModel');
        return parent::__construct();
    }

    public function save()
    {
        $json = $this->request->getJSON();

        $data =[
            'latitude' => $json->latitude,
            'longitude' => $json->longitude,
            'pop' => $json->pop,
            'localizacao' => $json->localizacao,
            'djson' => $json->djson,
            'observacao' => $json->observacao,
            'cto' => $json->cto,
            'caixa_hermetica' => $json->caixa_hermetica,
            'radio' => $json->radio,
            'active' => $json->active,
            'caixa_subterranea' => $json->caixa_subterranea,
        ];

        $response = $this->mainModel->save($data);

        if($response) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Poste cadastrado com sucesso!',
            ]);
        }

        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Erro ao cadastrar o poste!',
        ]);
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $postes = $this->mainModel->search($data->search);

        return $this->response->setJSON($postes);
    }
    
}

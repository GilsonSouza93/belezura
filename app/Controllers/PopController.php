<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PopController extends BaseController
{
    public $tittle = 'Pop';
    public $addButtonText = 'Novo Pop';
    public $viewPath = 'pop';
    public $baseRoute = '/gerencial/pop';

    public $subscriptionModel;
    private $userModel;
    

    public function __construct()
    {
        $this->mainModel = model('App\Models\PopModel');
        $this->mainModel = model('PopModel');
        $this->subscriptionModel = model('SubscriptionModel');
        $this->userModel = model('UserModel');
        $this->data['plans'] = $this->subscriptionModel->findAll();
        return parent::__construct();
    }

    public function save()
    {
        $data = $this->request->getJSON();
        $session = session();
        
        $theadData = [
            "city" => $data->city,
            "ibge_code" => $data->ibge_code,
            "uf" => $data->uf,
            "carrier" => $data->carrier,
            "identification" => $data->identification,
            "active" => $data->active,
            "plan" => $data->plan,
            "nas" => $data->nas,
            "user" => $data->user,
            "company_id" => $session->get('company_id')
        ];

        if($data->id) {
            $theadData['id'] = $data->id;
        }

        $response = $this->mainModel->save($theadData);

        

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

    public function treatmentBeforeSave($data)
    {
      $session = session();
      $data['company_id'] = $session->get('company_id');
      $data['boolean'] = $this->FormatBoolean($data['boolean']);
      
      return $data;
    }
}

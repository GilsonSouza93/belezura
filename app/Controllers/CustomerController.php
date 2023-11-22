<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CustomerController extends BaseController
{
    public $tittle = 'Clientes';
    public $addButtonText = 'Novo Cliente';
    public $viewPath = 'customer';
    public $baseRoute = '/clientes';

    public $subscriptionModel;

    public $onuModel;

    public function __construct()
    {
        $this->mainModel = model('CustomerModel');
        $this->subscriptionModel = model('SubscriptionModel');
       
        $this->onuModel = model('OnuModel');
        $this->data['onus'] = $this->onuModel->findAll();
        $this->data['subscription'] = $this->subscriptionModel->findAll();
        
        $subscriptionModel = model('SubscriptionModel');
        $onuModel = model('OnuModel');

        $this->data['subscription'] = $subscriptionModel->findAll();
        $this->data['onuModel'] = $onuModel->findAll();

        $this->saveMessage = 'Cliente salvo com sucesso!';
        parent::__construct();
    }

    public function treatmentBeforeSave($data)
    {
      $session = session();
  
      $data['company_id'] = $session->get('company_id');
  
      if ($this->mainModel->where('name', $data['name'])->first()) {
        $data['error'] = 'Já existe um registro com este nome!';
      }
  
      return $data;
    }
}

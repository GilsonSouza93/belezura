<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CustomerCnpjController extends BaseController
{
    public $tittle = 'Clientes Cnpj';
    public $addButtonText = 'Novo Cliente';
    public $viewPath = 'customerCnpj';
    public $baseRoute = '/clientes/clientes-cnpj';

    public $subscriptionModel;

    public $onuModel;

    public function __construct()
    {
        $this->mainModel = model('CustomerModel');
        $this->subscriptionModel = model('SubscriptionModel');
       
        $this->onuModel = model('OnuModel');
        $this->data['onus'] = $this->onuModel->findAll();
        $this->data['subscription'] = $this->subscriptionModel->findAll();

        $popModel = model('PopModel');

        $this->data['pops'] = $popModel->where('active', true)->findAll();
        
        $subscriptionModel = model('SubscriptionModel');

        $popModel = model('PopModel');
        $this->data['pops'] = $popModel->findAll();

        $this->data['subscription'] = $subscriptionModel->findAll();

        $this->saveMessage = 'Cliente salvo com sucesso!';
        parent::__construct();
    }

    public function treatmentBeforeSave($data)
    {
      $session = session();
      $data['company_id'] = $session->get('company_id');
      if(isset($data['boolean'])) 
      $data['boolean'] = $this->FormatBoolean($data['boolean']);
    
      return $data;
    }
}

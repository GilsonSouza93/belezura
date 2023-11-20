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

    public function __construct()
    {
        $this->mainModel = model('CustomerModel');
        
        $subscriptionModel = model('SubscriptionModel');
        $onuModel = model('OnuModel');

        $this->data['subscription'] = $subscriptionModel->findAll();
        $this->data['onuModel'] = $onuModel->findAll();

        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $customers = $this->mainModel->search($data->search);

        return $this->response->setJSON($customers);
    }
}

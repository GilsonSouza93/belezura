<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SubscriptionController extends BaseController
{
    public $tittle = 'Planos';
    public $addButtonText = 'Novo Plano';
    public $viewPath = 'subscription';
    public $baseRoute = '/configuracoes/planos';

    public function __construct()
    {
        $this->mainModel = model('SubscriptionModel');
        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $subscriptions = $this->mainModel->search($data->search);

        return $this->response->setJSON($subscriptions);
    }
}

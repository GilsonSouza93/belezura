<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FinancialboxController extends BaseController
{
    public $tittle = 'Caixa';
    public $addButtonText = 'Novo Caixa';
    public $viewPath = 'cashbox';
    public $baseRoute = 'financeiro/caixa';

    public function __construct()
    {
        $this->mainModel = model('CustomerModel');

        $popModel = model('PopModel');
        $this->data['pops'] = $popModel->findAll();
        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $cash = $this->mainModel->search($data->search);

        return $this->response->setJSON($cash);
    }

    public function save()
    {
        var_dump('teste de save'); die;
    }
}

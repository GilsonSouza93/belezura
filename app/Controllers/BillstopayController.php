<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BillstopayController extends BaseController
{

    public $tittle = 'Contas a Pagar';
    public $addButtonText = 'Adicionar Conta a pagar';
    public $viewPath = 'billstopay';
    public $baseRoute = '/financeiro/contas-pagar';

    public function __construct()
    {
        $this->mainModel = model('BillsPayModel');
        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $billsPay = $this->mainModel->search($data->search);

        return $this->response->setJSON($billsPay);
    }

}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BillstoreceiverController extends BaseController
{
    public $tittle = 'Contas a Receber';
    public $addButtonText = 'Adicionar Conta a receber';
    public $viewPath = 'billstoreceiver';
    public $baseRoute = '/financeiro/contas-receber';

    public function __construct()
    {
        $this->mainModel = model('BillsReceiverModel');
        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $billsReceiver = $this->mainModel->search($data->search);

        return $this->response->setJSON($billsReceiver);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FinancialboxController extends BaseController
{
    public $tittle = 'Caixa';
    public $addButtonText = 'Novo Lançamento';
    public $viewPath = 'cashbox';
    public $baseRoute = 'financeiro/caixa';

    public function __construct()
    {
        $this->mainModel = model('CustomerModel');
        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $cash = $this->mainModel->search($data->search);

        return $this->response->setJSON($cash);
    }
}

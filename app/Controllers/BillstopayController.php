<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BillstopayController extends BaseController
{

    public $tittle = 'Contas a Pagar';
    public $addButtonText = 'Adicionar Conta a Pagar';
    public $viewPath = 'billstopay';
    public $baseRoute = '/financeiro/contas-pagar';

    public function __construct()
    {
        $this->mainModel = model('BillstoPayModel');

        $popModel = model('PopModel');
        $supplierModel = model('SupplierModel');
        //->where('active', true)

        $this->data['pops'] = $popModel->findAll();
        $this->data['suppliers'] = $supplierModel->findAll();

        parent::__construct();
    }

    public function treatmentBeforeSave($data)
    {
      $session = session();
      $data['company_id'] = $session->get('company_id');
    
      return $data;
    }

}

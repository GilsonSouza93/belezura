<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BillstoreceiverController extends BaseController
{
    public $tittle = 'Contas a Receber';
    public $addButtonText = 'Adicionar Conta a Receber';
    public $viewPath = 'billstoreceiver';
    public $baseRoute = '/financeiro/contas-receber';
    
    public function __construct()
    {
        $this->mainModel = model('BillstoreceiverModel');
        
        $popModel = model('PopModel');
        $this->data['pops'] = $popModel->findAll();
        
        $supplierModel = model('SupplierModel');
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

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ContractController extends BaseController
{
 public $tittle ='Contratos';
 public $addButtonText ='Adicionar novo contrato';
 public $viewPath ='contract';
 public $baseRoute ='financeiro/contratos';

 public function __construct()
 {
     $this->mainModel = model('CustomerModel');
     parent::__construct();
 }

 public function search()
 {
     $data = $this->request->getJSON();
     
     $contract = $this->mainModel->search($data->search);

     return $this->response->setJSON($contract);
 }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class OnuController extends BaseController
{

      
      public $tittle = 'Onu';
      public $addButtonText = 'Nova ONU';
      public $viewPath = 'equipamentos/onu';
      public $baseRoute = '/equipamentos/onu';
       

      public function __construct()
      {
          $this->mainModel = model('OnuModel');
          parent::__construct();
      }
  
      public function search()
      {
          $data = $this->request->getJSON();
          
          $onus = $this->mainModel->search($data->search);
  
          return $this->response->setJSON($onus);
      }
   }

   
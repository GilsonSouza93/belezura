<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RadiusController extends BaseController
{
    public $tittle = 'Radius';
    public $addButtonText = 'Nova Nas';
    public $viewPath = 'equipamentos/radius';
    public $baseRoute = '/equipamentos/radius';

    public function __construct()
    {
        $this->mainModel = model('RadiusModel');
        parent::__construct();
    }

    public function treatmentBeforeSave($data)
    {
      $session = session();
      $data['company_id'] = $session->get('company_id');
    
      return $data;
    }
    
    
}

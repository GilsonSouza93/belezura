<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProfileController extends BaseController
{
    public $tittle = 'Perfil';
    public $addButtonText = 'Novo Perfil';
    public $viewPath = 'profile';
    public $baseRoute = '/perfil';

    public $subscriptionModel;

    public $onuModel;

    public function __construct()
    {
        $this->mainModel = model('ProfileController');

        parent::__construct();
    }

    public function treatmentBeforeSave($data)
    {
      $session = session();
      $data['company_id'] = $session->get('company_id');
      if(isset($data['boolean'])) 
      $data['boolean'] = $this->FormatBoolean($data['boolean']);
    
      return $data;
    }
}

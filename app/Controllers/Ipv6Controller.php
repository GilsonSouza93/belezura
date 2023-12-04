<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Ipv6Controller extends BaseController
{
    public $tittle = 'IPv6 Pool';
    public $addButtonText = 'Novo IPv6 POOL';
    public $viewPath = 'ipv6pool';
    public $baseRoute = 'configuracoes/ipv6pool';

    public function __construct()
    {
        $this->mainModel = model('Ipv6poolModel');
        parent::__construct();
    }

    public function treatmentBeforeSave($data)
    {
      $session = session();
      $data['company_id'] = $session->get('company_id');

      if(isset($data['active'])){
        $data['active'] = 1;
      }
      if(isset($data['order'])){
        $data['order'] = 1;
      }
    
      return $data;
    }
}

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
        $this->mainModel = model('Ipv6Model');
        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $ipv6s = $this->mainModel->search($data->search);

        return $this->response->setJSON($ipv6s);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EmailController extends BaseController
{
    public $tittle = 'Email';
    public $addButtonText = 'Cadastrar email';
    public $viewPath = 'email';
    public $baseRoute = '/gerencial/email';

    public function __construct()
    {
        $this->mainModel = model('CustomerModel');
        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $emails = $this->mainModel->search($data->search);

        return $this->response->setJSON($emails);
    }

}

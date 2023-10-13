<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SmsController extends BaseController
{
    public $tittle = 'SMS';
    public $addButtonText = 'Cadastrar SMS';
    public $viewPath = 'sms';
    public $baseRoute = '/gerencial/sms';

    public function __construct()
    {
        $this->mainModel = model('SmsModel');
        parent::__construct();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $sms = $this->mainModel->search($data->search);

        return $this->response->setJSON($sms);
    }

}

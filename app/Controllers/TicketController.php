<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TicketController extends BaseController
{
    public $tittle = 'Boleto';
    public $addButtonText = 'Gerar Novo Boleto';

    public $viewPath = 'ticket';
    public $baseRoute = '/financeiro/boleto';


    public function __construct()
    {
        $this->mainModel = model('TicketModel');
        parent::__construct();
    }


}


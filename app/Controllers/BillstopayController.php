<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BillstopayController extends BaseController
{

    public $tittle = 'Contas a Pagar';
    public $addButtonText = 'Adicionar Conta a pagar';
    public $viewPath = 'billstopay';
    public $baseRoute = '/financeiro/contasapagar';

}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BillstoreceiverController extends BaseController
{
    public $tittle = 'Contas a Receber';
    public $addButtonText = 'Adicionar Conta a receber';
    public $viewPath = 'billstoreceiver';
    public $baseRoute = '/financeiro/contasareceber';
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReceiverPointController extends BaseController
{
    public $tittle = 'Ponto de Pagamento';
    public $addButtonText = 'Novo Ponto de Pagamento';
    public $viewPath = 'receiverpoint';
    public $baseRoute = 'financeiro/pontosdepagamento';

}

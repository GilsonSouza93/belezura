<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReceiverPointController extends BaseController
{
    public $tittle = 'Ponto de Pagamento';
    public $addButtonText = 'Novo ponto de pagamento';
    public $viewPath = 'receiverpoint';
    public $baseRoute = 'financeiro/pontosdepagamento';

}

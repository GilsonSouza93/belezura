<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PaymentPointController extends BaseController
{
    public $tittle = 'Ponto de Pagamento';
    public $addButtonText = 'Novo Ponto de Pagamento';
    public $viewPath = 'paymentpoint';
    public $baseRoute = 'financeiro/pontosdepagamento';

}

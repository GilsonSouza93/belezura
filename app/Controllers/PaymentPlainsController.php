<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PaymentPlainsController extends BaseController
{

    public $tittle = 'Planos de Pagamento';
    public $addButtonText = 'Novo Plano de Pagamento';
    public $viewPath = 'paymentplains';
    public $baseRoute = 'financeiro/planosdepagamento';

}

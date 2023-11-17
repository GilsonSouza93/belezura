<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PaymentPlainsController extends BaseController
{

    public $tittle = 'Planos de pagamento';
    public $addButtonText = 'Novo plano de pagamento';
    public $viewPath = 'paymentplains';
    public $baseRoute = 'financeiro/planosdepagamento';

}

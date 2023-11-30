<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PaymentPlansController extends BaseController
{

    // Código	Descrição	DRE	Visível	Tipo	Conta	Plano	Suspender
    public $tittle = 'Planos de Pagamento';
    public $addButtonText = 'Novo Plano de Pagamento';
    public $viewPath = 'paymentplans';
    public $baseRoute = 'financeiro/planosdepagamento';

    public function __construct()
    {
        $this->mainModel = model('App\Models\PaymentPlansModel');
        return parent::__construct();
    }
}
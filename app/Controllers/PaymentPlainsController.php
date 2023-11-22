<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PaymentPlainsController extends BaseController
{

    // Código	Descrição	DRE	Visível	Tipo	Conta	Plano	Suspender
    public $tittle = 'Planos de Pagamento';
    public $addButtonText = 'Novo Plano de Pagamento';
    public $viewPath = 'paymentplains';
    public $baseRoute = 'financeiro/planosdepagamento';

    public function __construct()
    {
        $this->mainModel = model('App\Models\PopModel');
        $this->mainModel = model('PopModel');
        
        return parent::__construct();
    

    }

}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FinancialboxController extends BaseController
{
    public $tittle = 'Caixa';
    public $addButtonText = 'Novo Lançamento';
    public $viewPath = 'cashbox';
    public $baseRoute = 'financeiro/caixa';
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SubscriptionController extends BaseController
{
    public $tittle = 'Planos';
    public $addButtonText = 'Novo Plano';
    public $viewPath = 'subscription';
    public $baseRoute = '/configuracoes/planos';
}

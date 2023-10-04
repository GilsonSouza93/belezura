<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RelatorioController extends BaseController
{
    public $tittle = 'Relatórios';
    public $addButtonText = 'Adicionar relatório';
    public $viewPath = 'relatorios';
    public $baseRoute = '/estoque/relatorios';
}

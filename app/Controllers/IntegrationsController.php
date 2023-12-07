<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class IntegrationsController extends BaseController
{
    public $tittle = 'Integrações';
    public $addButtonText = '0';
    public $viewPath = 'integrations';
    public $baseRoute = 'configuracoes/integracoes';

    public function __construct()
    {
        $this->mainModel = model('IntegrationsModel');
        parent::__construct();
    }
}

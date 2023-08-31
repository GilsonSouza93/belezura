<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TicketController extends BaseController
{
    public $tittle = 'Boleto';
    public $addButtonText = 'Gerar Novo Boleto';

    public $viewPath = 'ticket';
    public $baseRoute = '/financeiro/boleto';


    public function __construct()
    {
        $this->mainModel = model('TicketModel');
        $this->data['baseRoutePrint'] = 'boleto/imprimir-em-lote';
        $this->data['addButtonPrint'] = 'Imprimir em lote';

        parent::__construct();
    }

    public function print()
    {
        $this->data['tittle'] = 'Imprimir Boletos';

        return view($this->viewPath . '/print', $this->data);
    }


}

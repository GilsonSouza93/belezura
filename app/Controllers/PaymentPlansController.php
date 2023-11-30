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
        $this->mainModel = model('App\Models\PopModel');
        $this->mainModel = model('PopModel');
        
        return parent::__construct();
    }
    public function save()
    {
        $data = $this->request->getJSON();
        $session = session();

        $data = [
            "type" => $data->type,
            "financial_code" => $data->financial_code,
            "description" => $data->description,
            "plain_account" => $data->plain_account,
            "dre_type" => $data->dre_type,
            "sici_account" => $data->sici_account,
            "ticket" => $data->ticket,
            "suspend" => $data->suspend,
            "charge" => $data->charge,
            "dre" => $data->dre,
            "sped" => $data->sped,
            "visibility" => $data->visibility,
            "company_id" => $session->get('company_id')
        ];
        $response = $this -> mainModel -> save($data);
        if($response) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Poste cadastrado com sucesso!',
            ]);
        }

        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Erro ao cadastrar o poste!',
        ]);
    }
}
<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PaymentPointController extends BaseController
{
    public $tittle = 'Ponto de Pagamento';
    public $addButtonText = 'Novo Ponto de Pagamento';
    public $viewPath = 'paymentpoint';
    public $baseRoute = 'financeiro/pontosdepagamento';

    public function save()
    {
        $data = $this->request->getJSON();
        $session = session();

        $data = [
            "name" => $data->name,
            "carrier" => $data->carrier,
            "carriers" => $data->carriers,
            "companies" => $data->companies,
            "balance" => $data->balance,
            "active" => $data->active,
            "bills_discount" => $data->bills_discount,
            "admin_discount" => $data->admin_discount,
            "allow_discount" => $data->allow_discount,
            "refinance" => $data->refinance,
            "method" => $data->method,
            "receiver" => $data->receiver,
            "pops" => $data->pops,
            "canceled" => $data->canceled,
            "plan" => $data->plan,
            "return_release" => $data->return_release,
            "card_release" => $data->card_release,
            "debit_release" => $data->debit_release,
            "generate_invoice" => $data->generate_invoice,
            "invoice" => $data->invoice,
            "send_invoice" => $data->send_invoice,
            "filter" => $data->filter,
            "cash_reports" => $data->cash_reports,
            "schedule" => $data->schedule,
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

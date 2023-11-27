<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BillstoreceiverController extends BaseController
{
    public $tittle = 'Contas a Receber';
    public $addButtonText = 'Adicionar Conta a Receber';
    public $viewPath = 'billstoreceiver';
    public $baseRoute = '/financeiro/contas-receber';

    public function __construct()
    {
        $this->mainModel = model('BillstoreceiverModel');
        parent::__construct();

        $popModel = model('PopModel');
        $this->data['pops'] = $popModel->where('active', true)->findAll();

        $supplierModel = model('SupplierModel');
        $this->data['suppliers'] = $supplierModel->findAll();
    }

    public function search()
    {
        $data = $this->request->getJSON();
        
        $billsReceiver = $this->mainModel->search($data->search);

        return $this->response->setJSON($billsReceiver);
    }
    public function save()
    {
        $data = $this->request->getJSON();
        $session = session();
        
        $theadData = [
            "pop_id" => $data->pop,
            "supplier" => $data->supplier,
            "form_payment" => $data->form_payment,
            "fix_value" => $data->fix_value,
            "value" => $data->value,
            "obs" => $data->obs,
            "doc_type" => $data->doc_type,
            "description" => $data->description,
            "invoice" => $data->invoice,
            "date_issue" => $data->date_issue,
            "payout" => $data->payout,
            "portion" => $data->portion,
            "company_id" => $session->get('company_id')
        ];

        $response = $this->mainModel->insert($theadData);

        if($response) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Salvo com sucesso'
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Houve um erro'
            ]);
        }
    }
}

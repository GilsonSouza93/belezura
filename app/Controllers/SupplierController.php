<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SupplierController extends BaseController
{
    public $tittle = 'Fornecedores';
    public $addButtonText = 'Novo Fornecedor';
    public $viewPath = 'stock/supplier';
    public $baseRoute = '/estoque/fornecedores';

    public function __construct()
    {
        $this->mainModel = model('SupplierModel');
        parent::__construct();
    }

    public function treatmentBeforeSave($data)
    {
        $data['created_at'] = date('Y-m-d H:i:s');

        if($this->mainModel->where('name', $data['name'])->first()){
            $data['error'] = 'Já existe um fornecedor com este nome!';
        }

        return $data;
    }
}

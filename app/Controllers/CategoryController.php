<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CategoryController extends BaseController
{
  public $tittle = 'Categoria';
  public $addButtonText = 'Nova Categoria';
  public $viewPath = 'stock/category';
  public $baseRoute = '/estoque/categorias';

  public function __construct()
  {
      $this->mainModel = model('CategoryModel');
      parent::__construct();
  }


  public function treatmentBeforeSave($data)
  {
    $data['account_type_id'] = 2;
    $data['created_at'] = date('Y-m-d H:i:s');

    if ($this->mainModel->where('name', $data['name'])->first()) {
      $data['error'] = 'Já existe uma categoria com este nome!';
    }

    return $data;
  }
}

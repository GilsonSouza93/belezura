<?php

namespace App\Models;

use CodeIgniter\Model;

class BillstoPayModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'billstopays';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [

        'id',
        'empresa',
        'description',
        'pop_id',
        'suplier_id',
        'payment_id',
        'fixvalue_id',
        'updated_at',
        'create_at',
        'value_id',
        'obs_id',
        'tipododocumento_id',
        'descricao_id',
        'notaFiscal_id',
        'dataDeEmissao_id',
        'timeout_id',
        'tipoDeParcela_id',
        'timeout_id',
    ];


    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}

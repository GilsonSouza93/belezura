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
<<<<<<< Updated upstream
        'pop',
        'suplier',
        'payment',
        'fix_value',
        'value',
        'obs',
        'doc_type',
        'description',
        'payout',
        'installment',
        'created_at',
=======
        'pop_id',
        'supplier_id',
        'payment_id',
        'fixvalue_id',
>>>>>>> Stashed changes
        'updated_at',
        'deleted_at',
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

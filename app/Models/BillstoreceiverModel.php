<?php

namespace App\Models;

use CodeIgniter\Model;

class BillstoreceiverModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'billstoreceivers';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'company_id',
        'pop_id',
        'supplier_id',
        'billstoreceiver_form',
        'billstoreceiver_valuefixed',
        'billstoreceiver_value',
        'billstoreceiver_description',
        'billstoreceiver_doctype',
        'billstoreceiver_description',
        'billstoreceiver_emissiondate',
        'billstoreceiver_invoice',
        'billstoreceiver_payout',
        'billstoreceiver_potiontype',
        'created_at',
        'updated_at',
        'deleted_at'
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

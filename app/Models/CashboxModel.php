<?php

namespace App\Models;

use CodeIgniter\Model;

class CashboxModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'cashboxes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'company_id',
        'cashbox_type',
        'cashbox_description',
        'cashbox_pop',
        'cashbox_pointpayment',
        'cashbox_paymentplains',
        'cashbox_paymentform',
        'cashbox_value',
        'cashbox_checkingcopy',
        'cashbox_competitiondate',
        'cashbox_observation',
        'cashbox_observation',
        'cashbox_dataabstrata',
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

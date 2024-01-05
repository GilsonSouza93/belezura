<?php

namespace App\Models;

use CodeIgniter\Model;

class MovementsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'movements';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'optionType',
        'supplier_name',
        'company_buy',
        'invoice_buy',
        'obs_buy',
        'customer',
        'contract_sell',
        'os_sell',
        'shipping',
        'delivery_date',
        'seller_name',
        'companyInvoice',
        'obs_sell',
        'contract_comodato',
        'os_comodato',
        'invoice_comodato',
        'obs_comodato',
        'local_storage',
        'movement_type_correcao',
        'amount',
        'reference',
        'obs_correcao',
        'origin',
        'destiny',
        'responsible',
        'obs_transferencia',
        'company_id',
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

    public function search($data)
    {
        $fieldsToSearch = [
            'id',
            'optionType',

        ];

        $fieldsToReturn = [
            'id',
            'optionType',
        ];

        $createdAtName = 'created_at';

        $search = null;

        if (isset($data['search']))
            $search = $data['search'];

        $query = $this->db->table($this->table)
            ->select($fieldsToReturn);

        if ($search) {
            $query->groupStart();
            foreach ($fieldsToSearch as $field) {
                $query->orLike($field, $search);
            }
            $query->groupEnd();
        }

        $query->orderBy($createdAtName, 'DESC');
        $result = $query->get()->getResultArray();

    return $result;
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class BillstoreceiverModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'bills_to_receive';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'company_id',
        'pop_id',
        'supplier',
        'form_payment',
        'fix_value',
        'value',
        'obs',
        'doc_type',
        'description',
        'invoice',
        'date_issue',
        'payout',
        'portion',
        'deleted_at',
        'created_at',
        'updated_at',
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
            'name',
            'supplier',
            'value',
        ];

        $fieldsToReturn = [
            'id',
            'supplier',
            'value',
            'date_issue',
            'payout',
            
        ];

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

        $query->orderBy('created_at', 'DESC');
        $result = $query->get()->getResultArray();

        return $result;
    }
}

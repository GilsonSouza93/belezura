<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'customers';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name',
        'rg',
        'cpf',
        'date_of_birth',
        'email',
        'phone1',
        'phone1_type',
        'phone2',
        'phone2_type',
        'zipcode',
        'address1',
        'address2',
        'number',
        'complement',
        'reference_point',
        'uf'
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

    public function search($field)
    {
        $fieldsToReturn = [
            'id',
            'name',
            'email',
            'phone1',
            'phone2',
        ];

        $mainQuery = $this->db->table($this->table)
                              ->select($fieldsToReturn);

        if(!empty($field)) {
            $mainQuery->like('name', $field)
                      ->orLike('email', $field)
                      ->orLike('phone1', $field)
                      ->orLike('phone2', $field);
        }

        return $mainQuery->get()->getResultArray();
    }
}

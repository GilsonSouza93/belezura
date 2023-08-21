<?php

namespace App\Models;

use CodeIgniter\Model;

class PopModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pops';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    protected $allowedFields    = [
        "city",
        "population",
        "ibge_code",
        "uf",
        "carrier",
        "plan",
        "nas",
        "user",
        "active",
        "identification",
        "created_at",
        "updated_at",
        "deleted_at"
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
            'city',
            'population',
            'ibge_code',
            'uf',
            'carrier',
            'plan',
            'nas',
            'user',
            'active',	
        ];

        $fieldsToReturn = [
            'id',
            'city',
            'population',
            'ibge_code',
            'uf',
            'carrier',
            'plan',
            'nas',
            'user',
            'active',	
            'created_at',
            'updated_at',
            'deleted_at',
        ];

        $search = null;

        if(isset($data['search']))
            $search = $data['search'];

        $query = $this->db->table($this->table)
                ->select($fieldsToReturn);

        if($search) {
            $query->groupStart();
            foreach($fieldsToSearch as $field) {
                $query->orLike($field, $search);
            }
            $query->groupEnd();
        }

        $query->orderBy('created_at', 'DESC');
        $result = $query->get()->getResultArray();

        return $result;
    }
}

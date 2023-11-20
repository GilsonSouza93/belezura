<?php

namespace App\Models;

use CodeIgniter\Model;

class OnuModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'onus';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'onu_serial_number',
        'onu_name',
        'onu_ip',
        'onu_port',
        'onu_username',
        'onu_password',
        'onu_status',
        'onu_created_at',
        'onu_updated_at',
        'onu_deleted_at',
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
            'onu_serial_number',
            'onu_name',
            'onu_ip',
            'onu_port',
            'onu_username',
            'onu_password',
        ];

        $fieldsToReturn = [
            'id',
            'onu_serial_number',
            'onu_name',
            'onu_ip',
            'onu_port',
            'onu_username',
            'onu_password',
            'onu_status',
            'onu_created_at',
            'onu_updated_at',
            'onu_deleted_at',
        ];

        $createAtName = 'onu_created_at';

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

        $query->orderBy($createAtName, 'DESC');
        $result = $query->get()->getResultArray();

        return $result;
    }
}

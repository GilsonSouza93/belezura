<?php

namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'latitude',
        'longitude',
        'pop',
        'localizacao',
        'djson',
        'observacao',
        'cto',
        'caixa_hermetica',
        'radio',
        'created_at',
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

    public function search($data)
    {
        $page = $data['page'];
        $length = 50;

        $fieldsToSearch = [
            'id',
            'latitude',
            'longitude',
        ];

        $fieldsToReturn = [
            'id',
            'latitude',
            'longitude',
            'pop',
            'localizacao',
            'djson',
            'observacao',
            'cto',
            'caixa_hermetica',
            'radio',
            'created_at',
            'updated_at',
            'deleted_at',
        ];

        [$filters, $search] = null;

        if(isset($data['filters'])) 
            $filters = $data['filters'];


        if(isset($data['search']))
            $search = $data['search'];

        $session = session();

        $accountType = $session->get('account_type_id');

        $teamId = $session->get('team_id');

        $brand_selected = $session->get('brand_selected');

        $query = $this->db->table($this->table)
                ->select($fieldsToReturn)
                ->select("DATE_FORMAT(customers.created_at, '%d/%m/%Y') AS date")
                ->select('users.name as agent, teams.name as team')
                ->join('users', 'users.id = customers.agent_id', 'left')
                ->join('teams', 'teams.id = customers.team_id', 'left')
                ->join('brands', 'brands.id = customers.brand_id', 'left')
                ->join('platforms', 'platforms.id = customers.platform_id', 'left')
                ->join('caps', 'caps.id = customers.cap', 'left')
                ->where('isDiscard', 0);

        if($accountType == 4) {
            $query->where("customers.agent_id", $session->get('id'));
        }

        if($teamId) {
            $query->where("customers.team_id", $teamId);
        }

        if($brand_selected != 'default') {
            $query->where("customers.brand_id", $brand_selected);
        }


        if($search) {
            $query->groupStart();
            foreach($fieldsToSearch as $field) {
                $query->orLike($field, $search);
            }
            $query->groupEnd();
        }

        if($filters) {
            foreach($filters as $key => $filter) {

                if($filter != "") {
                    if($filter == 'null') {
                        $query->where($key, null);
                    } else {
                        $key = $key == 'team_id' ? 'customers.team_id' : $key;
                        $query->where($key, $filter);
                    }
                }
            }
        }
        
        $query->orderBy('created_at', 'DESC');
        $result = $query->get()->getResultArray();


        $qty = count($result);
        $pages = ceil($qty / $length);

        if($page > $pages)
            $page = $pages;

        $start = ($page - 1) * $length;

        if ($length > 0)
            $result = array_slice($result, $start, $length);
        
        return [
            'pages' => $pages,
            'qty' => $qty,
            'data' => $result
        ];
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

abstract class BaseModel extends Model {

    public function search(string $orderBy = null, string $order = null, array $filters = null, string $search = null, int $page = null, int $length = null, array $fieldsToSearch = null, array $fieldsToReturn = null) {


        $query = $this->db->table($this->table);
        
        if($filters) {
            foreach($filters as $key => $filter) {

                if($filter != "") {
                    if($filter == 'null') {
                        $query->where($key, null);
                    } else {
                        $query->where($key, $filter);
                    }
                }
            }
        }
    }

    public function searchSample($data)
    {


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
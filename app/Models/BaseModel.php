<?php

namespace App\Models;

use CodeIgniter\Model;

abstract class BaseModel extends Model {

    public $searchFields = [];
    public $searchFieldsToReturn = [];
    public $tablesToJoin = [];

    public function search(string $toSearch, array $filters, int $page, string $orderBy = 'id', string $order = 'ASC') {
        
    }
}
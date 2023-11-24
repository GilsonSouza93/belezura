<?php

namespace App\Models;

use CodeIgniter\Model;

class TicketModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tickets';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        "district",
        "andress",
        "pop",
        "nas",
        "parcel",
        "date",
        "carrier",
        "plans",
        "edf",
        "payment",
        "date_start",
        "date_end",
        "ticket_open",
        "pix",
        "title_issued_start",
        "title_issued_end",
        "obs",
        'created_at',
        'updated_at',
        'deleted_at',
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
}
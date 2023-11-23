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
        "ticket_district",
        "ticket_andress",
        "ticket_pop",
        "ticket_nas",
        "ticket_parcel",
        "ticket_date",
        "ticket_carrier",
        "ticket_plans",
        "ticket_edf",
        "ticket_payment",
        "ticket_datestart",
        "ticket_dateend",
        "ticket_ticketinopen",
        "ticket_pix",
        "ticket_titleissuedstart",
        "ticket_titleissuedend",
        "ticket_obs",
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
}

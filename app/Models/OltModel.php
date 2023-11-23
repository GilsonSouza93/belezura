<?php

namespace App\Models;

use App\Models\BaseModel;

class OltModel extends BaseModel
{
    protected $DBGroup          = 'default';
    protected $table            = 'olts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'name',
        'host',
        'slot',
        'user',
        'password',
        'password_admin',
        'snmp_version',
        'snmp_community',
        'coord',
        'debug',
        'autoSave',
        'template_onu',
        'cto',
        'authorization',
        'vlan',
        'disable_onu',
        'pop_filter',
        'pop',
        'plot_sign',
        'active',
        'telnet',
        'protocol',
        'obs',
        'tl1_ip',
        'tl1_port',
        'tl1_user',
        'tl1_password',
        'wait',
        'parameters',
        'integration',
        'template_filter',
        'onu_filter',
        'high_signal',
        'low_signal',
        'high_signal_color',
        'low_signal_color',
        'voip_ip',
        'voip_mask',
        'voip_gateway',
        'voip_port',
        'parameters_json',
        'service_active',
        'service_suspend',
        'change_plan',
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

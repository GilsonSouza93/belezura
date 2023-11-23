<?php

namespace App\Models;

use CodeIgniter\Model;

class RadiusModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'radius';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        "radius_pop",
        "radius_ippool",
        "radius_user",
        "radius_password",
        "radius_prefxipv6",
        "radius_ipv6pool",
        "radius_ippoolblock",
        "radius_andressip",
        "radius_name",
        "radius_type",
        "radius_port",
        "radius_secretword",
        "radius_nasip",
        "radius_extratype",
        "radius_iporigin",
        "radius_radiusconfig",
        "radius_port",
        "radius_password",
        "radius_snmpversion",
        "radius_snmpcommunity",
        "radius_snmpport",
        "radius_httpport",
        "radius_dnsprimary",
        "radius_dnssecudary",
        "radius_accountingupdate",
        "radius_portsecundary",
        "radius_latlong",
        "radius_activeradius",
        "radius_costumerdisponible",
        "radius_verifylogin",
        "radius_verifymac",
        "radius_verifymaclogin",
        "radius_rrdinterfaces",
        "radius_jsonparameters",
        "radius_autoreload",
        "radius_simutaneouserlogin",
        "radius_checkradius",
        "radius_timeoutcheck",
        "radius_checkconexion",
        "radius_timeoutgraphics",
        "radius_andressipacess",
        "radius_acesstype",
        "radius_acessport",
        "radius_acessuser",
        "radius_acesspassword",
        "radius_shortcode",
        'created_at',
        'updated_at',
        'deleted_at',];

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

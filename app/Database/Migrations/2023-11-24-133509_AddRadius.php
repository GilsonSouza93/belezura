<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRadius extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'radius_pop' => [
                'type' => 'INT',
                'constraint' => 5,
            ],

            'radius_ippool' => [
                'type' => 'INT',
                'constraint' => 255,
            ],

            'radius_user' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'radius_password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'radius_prefxipv6' => [
                'type' => 'VARCHAR',
                'constraint' => 255,

            ],

            'radius_ipv6pool' => [
                'type' => 'VARCHAR',
                'default' => false,
            ],

            'radius_ippoolblock' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_andressip' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_type' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_port' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_secretword' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_nasip' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_extratype' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_iporigin' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_radiusconfig' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_port2' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_password2' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_smtpversion' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_snmpcommunity' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_snmpport' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_httpport' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_dnsprimary' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_dnssecundary' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_accountingupdate' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_portsecundary' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_latlong' => [
                'type' => 'INT',
                'constraint' => 255.
            ],

            'radius_activeradius' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],

            'radius_costumerdisponible' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],

            'radius_verifylogin' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],

            'radius_verifymac' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],

            'radius_verifymaclogin' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],

            'radius_rrdinterfaces' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],

            'radius_jsonparameter' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_autoreload' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],

            'radius_simutaneouserlogin' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_checkradius' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],

            'radius_timeoutcheck' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_checkconexion' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],

            'radius_timeoutgraphics' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_andressipacess' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_acesstyp' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_acessport' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_acessuser' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_acesspassword' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'radius_shortcode' => [
                'type' => 'VARCHAR',
                'constraint' => 255.
            ],

            'company_id' => [
                'type' => 'int',
                'constraint' => 30,
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

        ]);

        $this->forge->addPrimaryKey('id', true);

        $this->forge->addForeignKey('company_id', 'companies', 'id');
        $this->forge->addForeignKey('radius_pop', 'pops', 'id');

        $this->forge->CreateTable('radius');
    }

    public function down()
    {
        $this->forge->DropTable('radius');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField
        ([
            'id'=> [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name'=>[
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null' => false,
            ],
            'email'=>[
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null' => false,
            ],
            'password'=>[
                'type'       => 'VARCHAR',
                'constraint' => '150',
                'null' => false,
            ],
            'created_at'=>[
                'type'=>'datetime',
                'null'=>true
            ],
            'updated_at'=>[
                'type'=>'datetime',
                'null'=>true
            ],
            'image'=>[
                'type'  =>  'VARCHAR',
                'constraint' => 100,
                'null'  => false
            ],
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}

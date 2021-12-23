<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contacts extends Migration
{
    public function up()
    {
        $this->forge->addField
        ([
            'id'=>[
                'type'=>'INT',
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'faname'=>[
                'type'=>'VARCHAR',
                'constraint'=>'100'
            ],
            'lname'=>[
                'type'=>'VARCHAR',
                'constraint'=>'100'
            ],
            'phone_no'=>[
                'type'=>'VARCHAR',
                'constraint'=>'12',
            ],
            'email'=>[
                'type'=>'VARCHAR',
                'constraint'=>'100',
            ],
            'subject'=>[
                'type'=>'VARCHAR',
                'constraint'=>'250',
            ],
            'message'=>[
                'type'=>'VARCHAR',
                'constraint'=>'250',
            ],
            'created_by' => [
                'type' => 'INT',
                'unsigned' => true,
            ],

            'updated_by' => [
                'type' => 'INT',
                'unsigned' => true,
            ]
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('contacts');
    }

    public function down()
    {
        $this->forge->dropTable('contacts');
    }
}

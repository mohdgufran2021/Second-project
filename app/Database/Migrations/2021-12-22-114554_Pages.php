<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pages extends Migration
{
    public function up()
    {
        $this->forge->addField
        ([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],

            'description' => [
                'type' => 'VARCHAR',
                'constraint' => '250',
            ],

            'created_at' => [
                'type' => 'datetime',
                'null' => true
            ],

            'updated_at' => [
                'type' => 'datetime',
                'null' => true
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
        $this->forge->addKey('id', true);
        $this->forge->createTable('pages');
    }

    public function down()
    {
        $this->forge->dropTable('pages');
    }
}

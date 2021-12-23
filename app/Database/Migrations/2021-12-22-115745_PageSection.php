<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PageSection extends Migration
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
            'title'=>[
                'type'=>'VARCHAR',
                'constraint'=>'100'
            ],
            'content'=>[
                'type'=>'text',
            ],
            'page_id'=>[
                'type'=>'INT',
                'unsigned'=>true,
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
        $this->forge->createTable('page_sections');
    }

    public function down()
    {
        $this->forge->dropTable('page_sections',true);
    }
}

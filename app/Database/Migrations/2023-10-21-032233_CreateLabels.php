<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLabels extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'label' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('labels');
    }

    public function down()
    {
        $this->forge->dropTable('labels');
    }
}

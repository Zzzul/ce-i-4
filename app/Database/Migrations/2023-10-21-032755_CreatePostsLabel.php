<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostsLabel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'post_id' => [
                'type' => 'INT',
            ],
            'label_id' => [
                'type' => 'INT',
            ],
        ]);

        $this->forge->addForeignKey('post_id', 'posts', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('label_id', 'labels', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('posts_label');
    }

    public function down()
    {
        $this->forge->dropTable('posts_label');
    }
}

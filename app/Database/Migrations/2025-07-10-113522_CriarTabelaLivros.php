<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriarTabelaLivros extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'titulo' => ['type' => 'VARCHAR', 'constraint' => 255],
            'autor' => ['type' => 'VARCHAR', 'constraint' => 255],
            'created_at' => ['type' => 'DATETIME', 'null' => TRUE],
            'updated_at' => ['type' => 'DATETIME', 'null' => TRUE],
            'deleted_at' => ['type' => 'DATETIME', 'null' => TRUE],
        ])->createTable('livros');
    }

    public function down()
    {
        $this->forge->dropTable('livros');
    }
}

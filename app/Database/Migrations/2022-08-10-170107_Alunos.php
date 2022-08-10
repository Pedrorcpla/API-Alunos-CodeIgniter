<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alunos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'int',
                'auto_increment'    => true
            ],
            'name' => [
                'type'          =>  'varchar',
                'constraint'    =>  100
            ],
            'email' => [
                'type'  =>  'text',
            ],
            'password' => [
                'type' => 'text',
            ],
            'rm' => [
                'type' => 'int',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_aluno');
    }

    public function down()
    {
        $this->forge->dropTable('tb_aluno');
    }
}

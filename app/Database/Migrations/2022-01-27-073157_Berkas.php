<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Berkas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_berkas'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'file'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'deskripsi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'status'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'validasi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],

            'user_id' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'created_at'       => ['type' => 'datetime', 'null' => true],
            'updated_at'       => ['type' => 'datetime', 'null' => true],
            'deleted_at'       => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('berkas');
    }

    public function down()
    {
        $this->forge->dropTable('berkas');
    }
}

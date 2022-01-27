<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
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
            'nama_pembayaran'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'tanggal'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'no_kwitansi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'jenis_pembayaran'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'catatan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'bukti'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'status'       => [
                'type'       => 'INT',
                'constraint' => 5,
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
        $this->forge->createTable('pembayaran');
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran');
    }
}

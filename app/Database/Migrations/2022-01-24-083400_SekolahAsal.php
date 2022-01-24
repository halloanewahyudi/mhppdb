<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SekolahAsal extends Migration
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
            'lulus_dari'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'nama_sekolah'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'alamat_sekolah'       => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'no_kontak_sekolah'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'npsn'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'nsm'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'no_peserta_un'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'no_skhun'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'no_seri_ijazah'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'total_nilai_un'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'tangal_lulus_sekolah'  => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
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
        $this->forge->createTable('sekolah_asal');
    }

    public function down()
    {
        $this->forge->dropTable('sekolah_asal');
    }
}

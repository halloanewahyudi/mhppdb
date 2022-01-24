<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ibu extends Migration
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
            'nama_ibu'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'warga_negara_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'status_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'nik_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'tempat_lahir_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'tgl_lahir_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'pendidikan_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'pekerjaan_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'penghasilan_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'no_hp_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'tempat_tinggal_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'status_tempat_tinggal_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'alamat_lengkap_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'desa_kelurahan_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'kecamatan_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'kabupaten_kota_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'provinsi_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'kode_pos_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
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
        $this->forge->createTable('ibu');
    }

    public function down()
    {
        $this->forge->dropTable('ibu');
    }
}

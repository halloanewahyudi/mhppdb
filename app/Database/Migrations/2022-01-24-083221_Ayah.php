<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ayah extends Migration
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
            'nama_ayah'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'warga_negara_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'status_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'nik_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'tempat_lahir_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'tgl_lahir_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'pendidikan_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'pekerjaan_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'penghasilan_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'no_hp_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'tempat_tinggal_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'status_tempat_tinggal_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'alamat_lengkap_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'desa_kelurahan_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'kecamatan_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'kabupaten_kota_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'provinsi_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'kode_pos_ayah' => [
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
        $this->forge->createTable('ayah');
    }

    public function down()
    {
        $this->forge->dropTable('ayah');
    }
}

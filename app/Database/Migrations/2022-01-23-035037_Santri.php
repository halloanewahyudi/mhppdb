<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Santri extends Migration
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
            'nama'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nisn' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'nis' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'nik' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'tanggal_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'jenis_kelamin' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'anak_ke' => [
                'type' => 'INT',
                'constraint' => 2,
            ],
            'jumlah_saudara' => [
                'type' => 'INT',
                'constraint' => 2,
            ],
            'agama' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'cita_cita' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'no_hp' => [
                'type' => 'INT',
                'constraint' => 16,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'hobi' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'alamat_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => '250',
            ],
            'desa_kelurahan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'kecamatan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'kabupaten_kota' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'provinsi' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'kode_pos' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'jenis_transportasi' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'jarak_tempat_tinggal' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'yang_membiayai_sekolah' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'kebutuhan_khusus' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'kebutuhan_disabilitas' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'pra_sekolah' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'imunisasi' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nomer_kip' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nomer_kk' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'sekolah_asal' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'nama_kepala_keluarga' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
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
        $this->forge->createTable('santri');
    }

    public function down()
    {
        $this->forge->dropTable('santri');
    }
}

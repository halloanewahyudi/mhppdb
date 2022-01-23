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
            'hp_orng_tua' => [
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
            'cita_cita' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'anak_ke' => [
                'type' => 'INT',
                'constraint' => 2,
            ],
            'jumlah_saudara' => [
                'type' => 'INT',
                'constraint' => 2,
            ],
            'tinggi_badan' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'berat_badan' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'lingkar_kepala' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'golongan_darah' => [
                'type' => 'VARCHAR',
                'constraint' => '3',
            ],
            'alamat_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => '250',
            ],
            'provinsi' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'kabupaten_kota' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'kecamatan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'desa_kelurahan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'kode_pos' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'sekolah_asal' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'no_telepon_sekolah_asal' => [
                'type' => 'INT',
                'constraint' => 16,
            ],
            'alamat_sekolah_asal' => [
                'type' => 'VARCHAR',
                'constraint' => '250',
            ],
            'npsn' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'nsm' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'nomer_peserta_ujian' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'nomor_skhun' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'total_nilai_ujian_sd' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'tanggal_lulus' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'lulusan_dari' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'kk' => [
                'type' => 'INT',
                'constraint' => 30,
            ],
            'nama_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'tempat_lahir_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'tanggal_lahir_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'nik_ayah' => [
                'type' => 'INT',
                'constraint' => 30,
            ],
            'pendidikan_terakhir_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'penghasilan_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'pekerjaan_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'nama_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'tempat_lahir_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'tanggal_lahir_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'nik_ibu' => [
                'type' => 'INT',
                'constraint' => 30,
            ],
            'pendidikan_terakhir_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'penghasilan_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'pekerjaan_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
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

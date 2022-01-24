<?php

namespace App\Models;

use CodeIgniter\Model;

class Santri extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'santri';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [ 
        'nama','nisn','nik','tempat_lahir','tanggal_lahir','jenis_kelamin','hp_orng_tua','email','hobi',
    'cita_cita','anak_ke','jumlah_saudara','tinggi_badan','berat_badan','lingkar_kepala','golongan_darah', 
    'alamat_lengkap','provinsi','kabupaten_kota','kecamatan','desa_kelurahan','kode_pos','sekolah_asal',
    'no_telepon_sekolah_asal','alamat_sekolah_asal','npsn','nsm','nomer_peserta_ujian','nomor_skhun',
    'total_nilai_ujian_sd','tanggal_lulus','lulusan_dari','kk','nama_ayah','tempat_lahir_ayah',
    'tanggal_lahir_ayah','nik_ayah','pendidikan_terakhir_ayah','penghasilan_ayah','pekerjaan_ayah',
    'nama_ibu','tempat_lahir_ibu','tanggal_lahir_ibu','nik_ibu','pendidikan_terakhir_ibu','penghasilan_ibu',
    'pekerjaan_ibu','user_id'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}

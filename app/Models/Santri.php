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
        'nama','nisn','nis','nik','tempat_lahir','tanggal_lahir','jenis_kelamin','anak_ke','jumlah_sudara','agama','no_hp','email','cita_cita','hobi','alamat_lengkap','desa_kelurahan','kecamatan','kabupaten_kota','provinsi','kode_pos','jenis_transportasi','jarak_tempat_tinggal','yang_membiayai_sekolah','kebutuhan_khusus','kebutuhan_disabilitas','pra_sekolah','imunisasi','nomer_kip','nomer_kk','nama_kepala_keluarga','user_id'];

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

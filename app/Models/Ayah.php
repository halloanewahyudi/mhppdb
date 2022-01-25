<?php

namespace App\Models;

use CodeIgniter\Model;

class Ayah extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ayah';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_ayah','warga_negara_ayah','status_ayah','nik_ayah','tempat_lahir_ayah','tgl_lahir_ayah','pendidikan_ayah','pekerjaan_ayah','penghasilan_ayah','no_hp_ayah','tempat_tinggal_ayah','status_tempat_tinggal_ayah','alamat_lengkap_ayah','desa_kelurahan_ayah','kecamatan_ayah','kabupaten_kota_ayah','provinsi_ayah','kode_pos_ayah'];

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

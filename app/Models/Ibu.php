<?php

namespace App\Models;

use CodeIgniter\Model;

class Ibu extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ibu';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_ibu','warga_negara_ibu','status_ibu','nik_ibu','tempat_lahir_ibu','tgl_lahir_ibu','pendidikan_ibu','pekerjaan_ibu','penghasilan_ibu','no_hp_ibu','tempat_tinggal_ibu','status_tempat_tinggal_ibu','alamat_lengkap_ibu','desa_kelurahan_ibu','kecamatan_ibu','kabupaten_kota_ibu','provinsi_ibu','kode_pos_ibu',];

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

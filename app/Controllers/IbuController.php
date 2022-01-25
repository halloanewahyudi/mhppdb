<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Ibu;

class IbuController extends BaseController
{
    protected $helpers = ['auth', 'url', 'form'];
    public function __construct()
    {
        $this->ibu_model = new Ibu();
    }

    public function index()
    {
        //
    }
    public function create()
    {
        $data = [
            'action' => base_url('ibu-create-action'),
        ];
        return view('santri/form-santri', $data);
    }

    public function create_action()
    {
        $data = [
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'warga_negara_ibu' => $this->request->getVar('warga_negara_ibu'),
            'status_ibu' => $this->request->getVar('status_ibu'),
            'nik_ibu' => $this->request->getVar('nik_ibu'),
            'tempat_lahir_ibu' => $this->request->getVar('tempat_lahir_ibu'),
            'tgl_lahir_ibu' => $this->request->getVar('tgl_lahir_ibu'),
            'pendidikan_ibu' => $this->request->getVar('pendidikan_ibu'),
            'pekerjaan_ibu' => $this->request->getVar('pekerjaan_ibu'),
            'penghasilan_ibu' => $this->request->getVar('penghasilan_ibu'),
            'no_hp_ibu' => $this->request->getVar('no_hp_ibu'),
            'tempat_tinggal_ibu' => $this->request->getVar('tempat_tinggal_ibu'),
            'status_tempat_tinggal_ibu' => $this->request->getVar('status_tempat_tinggal_ibu'),
            'alamat_lengkap_ibu' => $this->request->getVar('alamat_lengkap_ibu'),
            'desa_kelurahan_ibu' => $this->request->getVar('desa_kelurahan_ibu'),
            'kecamatan_ibu' => $this->request->getVar('kecamatan_ibu'),
            'kabupaten_kota_ibu' => $this->request->getVar('kabupaten_kota_ibu'),
            'provinsi_ibu' => $this->request->getVar('provinsi_ibu'),
            'kode_pos_ibu' => $this->request->getVar('kode_pos_ibu'),
            'user_id' => user_id(),
        ];
        $this->santri_model->insert($data);
        session()->setFlashdata('sa', 'data Santri berhasil di input');
        return  redirect()->to('success');
    }

    public function view($id)
    {
    }

    public function update($id)
    {
    }
    public function update_action($id)
    {
    }

    public function success()
    {
        $santri =  $this->ibu_model->where('user_id', user_id())->first();
        $data = [
            'judul' => 'Selamat !,' . $santri['nama'],
            'deskripsi' => 'Anda telah mengisi form data profil'
        ];
        return view('santri/success', $data);
    }
}

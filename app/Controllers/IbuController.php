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
            'action' => base_url('ibu/create-action'),
        ];
        return view('ibu/form', $data);
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
        $this->ibu_model->insert($data);
        $id = $this->ibu_model->insertID();
        session()->setFlashdata('update', 'data ibu berhasil di input');
        return redirect()->to('ibu/update/' . $id);
    }

    public function view($id)
    {
    }

    public function update($id)
    {

        $model = $this->ibu_model->where('id', $id)->first();
        $data = [
            'data_ibu' => $model,
            'action' => base_url('ibu/update-action/' . $id),
        ];
        return view('ibu/form', $data);
    }
    
    public function update_action($id)
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
        $this->ibu_model->update($id, $data);
        session()->setFlashdata('update', 'Data ibu telah di update');
        return redirect()->to('ibu/update/' . $id);
    }


}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Ayah;

class AyahController extends BaseController
{
    protected $helpers = ['auth','url','form'];
    public function __construct()
    {
        $this->ayah_model = new Ayah();
    }

    public function index()
    {
        //
    }
    public function create(){
        $data= [
            'action'=> base_url('ayah-create-action'),
        ];
        return view('ayah/form',$data);
    }

    public function create_action(){
        $data = [
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'warga_negara_ayah' => $this->request->getVar('warga_negara_ayah'),
            'status_ayah' => $this->request->getVar('status_ayah'),
            'nik_ayah' => $this->request->getVar('nik_ayah'),
            'tempat_lahir_ayah' => $this->request->getVar('tempat_lahir_ayah'),
            'tgl_lahir_ayah' => $this->request->getVar('tgl_lahir_ayah'),
            'pendidikan_ayah' => $this->request->getVar('pendidikan_ayah'),
            'pekerjaan_ayah' => $this->request->getVar('pekerjaan_ayah'),
            'penghasilan_ayah' => $this->request->getVar('penghasilan_ayah'),
            'no_hp_ayah' => $this->request->getVar('no_hp_ayah'),
            'tempat_tinggal_ayah' => $this->request->getVar('tempat_tinggal_ayah'),
            'status_tempat_tinggal_ayah' => $this->request->getVar('status_tempat_tinggal_ayah'),
            'alamat_lengkap_ayah' => $this->request->getVar('alamat_lengkap_ayah'),
            'desa_kelurahan_ayah' => $this->request->getVar('desa_kelurahan_ayah'),
            'kecamatan_ayah' => $this->request->getVar('kecamatan_ayah'),
            'kabupaten_kota_ayah' => $this->request->getVar('kabupaten_kota_ayah'),
            'provinsi_ayah' => $this->request->getVar('provinsi_ayah'),
            'kode_pos_ayah' => $this->request->getVar('kode_pos_ayah'),
            'user_id'=> user_id(),
        ];
        $this->santri_model->insert($data);
        session()->setFlashdata('sa','data Santri berhasil di input');
        return  redirect()->to('success');
    }

    public function view($id){

    }
    
    public function update($id){

    }
    public function update_action($id){

    }

    public function success(){
       $santri =  $this->ayah_model->where('user_id',user_id())->first();
        $data = [
            'judul'=>'Selamat !,'. $santri['nama'],
            'deskripsi'=>'Anda telah mengisi form data profil'
        ];
        return view('santri/success',$data);

    }

}

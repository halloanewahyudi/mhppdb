<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SekolahAsal;

class SekolahAsalController extends BaseController
{
    protected $helpers = ['auth', 'url', 'form'];
    public function __construct()
    {
        $this->sekolah_asal_model = new SekolahAsal();
    }

    public function index()
    {
        //
    }
    public function create()
    {
        $data = [
            'action' => base_url('sekolah-asal/create-action'),
        ];
        return view('sekolah-asal/form', $data);
    }

    public function create_action()
    {
        $data = [
            'lulus_dari' => $this->request->getVar('lulus_dari'),
            'nama_sekolah' => $this->request->getVar('nama_sekolah'),
            'alamat_sekolah' => $this->request->getVar('alamat_sekolah'),
            'no_kontak_sekolah' => $this->request->getVar('no_kontak_sekolah'),
            'npsn' => $this->request->getVar('npsn'),
            'nsm' => $this->request->getVar('nsm'),
            'no_peserta_un' => $this->request->getVar('no_peserta_un'),
            'no_skhun' => $this->request->getVar('no_skhun'),
            'no_seri_ijazah' => $this->request->getVar('no_seri_ijazah'),
            'total_nilai_un' => $this->request->getVar('total_nilai_un'),
            'tangal_lulus_sekolah' => $this->request->getVar('tangal_lulus_sekolah'),
            'user_id' => user_id(),
        ];
        $this->sekolah_asal_model->insert($data);
        $id = $this->sekolah_asal_model->insertID();
        session()->setFlashdata('update','data Sekolah asal berhasil di input');
        return redirect()->to('sekolah-asal/update/'.$id);
    }

    public function view($id)
    {
    }

    public function update($id)
    {
        $model = $this->sekolah_asal_model->where('id', $id)->first();
        $data = [
            'data_sekolah_asal' => $model,
            'action' => base_url('sekolah-asal/update-action/' . $id),
        ];
        return view('sekolah-asal/form', $data);
    }

    public function update_action($id)
    {
        $data = [
            'lulus_dari' => $this->request->getVar('lulus_dari'),
            'nama_sekolah' => $this->request->getVar('nama_sekolah'),
            'alamat_sekolah' => $this->request->getVar('alamat_sekolah'),
            'no_kontak_sekolah' => $this->request->getVar('no_kontak_sekolah'),
            'npsn' => $this->request->getVar('npsn'),
            'nsm' => $this->request->getVar('nsm'),
            'no_peserta_un' => $this->request->getVar('no_peserta_un'),
            'no_skhun' => $this->request->getVar('no_skhun'),
            'no_seri_ijazah' => $this->request->getVar('no_seri_ijazah'),
            'total_nilai_un' => $this->request->getVar('total_nilai_un'),
            'tangal_lulus_sekolah' => $this->request->getVar('tangal_lulus_sekolah'),
            'user_id' => user_id(),
        ];
        $this->sekolah_asal_model->update($id,$data);
        session()->setFlashdata('update', 'Data santri telah di update');
        return redirect()->to('sekolah-asal/update/'.$id);
    }

}

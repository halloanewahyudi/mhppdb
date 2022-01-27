<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Berkas;

class BerkasController extends BaseController
{
    protected $helpers = ['auth', 'url', 'form'];
    public function __construct()
    {
        $this->berkas_model = new Berkas();
    }

    public function index()
    {
        //
    }
    public function create()
    {
        $data = [
            'action' => base_url('berkas/create-action'),
        ];
        return view('berkas/form', $data);
    }

    public function create_action()
    {
        
        $data = [
            'judul_berkas' => $this->request->getVar('judul_berkas'),
            'file' => $this->request->getVar('file'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'status' => $this->request->getVar('status'),
            'validasi' => $this->request->getVar('validasi'),
            'user_id' => user_id(),
        ];

        $this->berkas_model->insert($data);
        $id = $this->berkas_model->insertID();
        session()->setFlashdata('update','data berkas berhasil di input');
        return redirect()->to('berkas/update/'.$id);
    }

    public function view($id)
    {

    }

    public function update($id)
    {
        $model = $this->berkas_model->where('id', $id)->first();
        $data = [
            'data_sekolah_asal' => $model,
            'action' => base_url('berkas/update-action/' . $id),
        ];
        return view('berkas/form', $data);
    }

    public function update_action($id)
    {
        $data = [
            'judul_berkas' => $this->request->getVar('judul_berkas'),
            'file' => $this->request->getVar('file'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'status' => $this->request->getVar('status'),
            'validasi' => $this->request->getVar('validasi'),
            'user_id' => user_id(),
        ];
        $this->berkas_model->update($id,$data);
        session()->setFlashdata('update', 'Data berkas telah di update');
        return redirect()->to('berkas/update/'.$id);
    }

    public function delete($id){

        $this->berkas_model->delete($id);

    } 
}

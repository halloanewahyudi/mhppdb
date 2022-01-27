<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pembayaran;

class PembayaranController extends BaseController
{
    protected $helpers = ['auth', 'url', 'form'];
    public function __construct()
    {
        $this->pembayaran_model = new Pembayaran();
    }

    public function index()
    {
        //
    }

    public function create()
    {
        $data = [
            'action' => base_url('pembayaran/create-action'),
        ];
        return view('pembayaran/form', $data);
    }

    public function create_action()
    {
    
        $data = [
            'nama_pembayaran' => $this->request->getVar('nama_pembayaran'),
            'tanggal' => $this->request->getVar('tanggal'),
            'no_kwitansi' => $this->request->getVar('no_kwitansi'),
            'jenis_pembayaran' => $this->request->getVar('jenis_pembayaran'),
            'catatan' => $this->request->getVar('catatan'),
            'bukti' => $this->request->getVar('bukti'),
            'status' => $this->request->getVar('status'),
            'user_id' => user_id(),
        ];

        $this->pembayaran_model->insert($data);
        $id = $this->pembayaran_model->insertID();
        session()->setFlashdata('update','data Sekolah asal berhasil di input');
        return redirect()->to('pembayaran/update/'.$id);
    }

    public function view($id)
    {

    }

    public function update($id)
    {
        $model = $this->pembayaran_model->where('id', $id)->first();
        $data = [
            'data_sekolah_asal' => $model,
            'action' => base_url('pembayaran/update-action/' . $id),
        ];
        return view('pembayaran/form', $data);
    }

    public function update_action($id)
    {
        $data = [
            'nama_pembayaran' => $this->request->getVar('nama_pembayaran'),
            'tanggal' => $this->request->getVar('tanggal'),
            'no_kwitansi' => $this->request->getVar('no_kwitansi'),
            'jenis_pembayaran' => $this->request->getVar('jenis_pembayaran'),
            'catatan' => $this->request->getVar('catatan'),
            'bukti' => $this->request->getVar('bukti'),
            'status' => $this->request->getVar('status'),
            'user_id' => user_id(),
        ];
        $this->pembayaran_model->update($id,$data);
        session()->setFlashdata('update', 'Data pembayaran telah di update');
        return redirect()->to('pembayaran/update/'.$id);
    }
}

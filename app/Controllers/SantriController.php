<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Santri;

class SantriController extends BaseController
{
    protected $helpers = ['auth','url','form'];

    public function __construct()
    {
        $this->santri_model = new Santri();
    }
    
    public function index()
    {

    }

    public function create(){
        $data= [
            'action'=> base_url('santri/create-action'),
        ];
        return view('santri/form-santri',$data);
    }

    public function create_action(){
        $data = [
            'nama' => $this->request->getVar('nama'),
            'nisn' => $this->request->getVar('nisn'),
            'nik' => $this->request->getVar('nik'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'anak_ke' => $this->request->getVar('anak_ke'),
            'jumlah_saudara' => $this->request->getVar('jumlah_saudara'),
            'agama' => $this->request->getVar('agama'),
            'cita_cita' => $this->request->getVar('cita_cita'),
            'no_hp' => $this->request->getVar('no_hp'),
            'email' => $this->request->getVar('email'),
            'hobi' => $this->request->getVar('hobi'),
            'alamat_lengkap' => $this->request->getVar('alamat_lengkap'),
            'provinsi' => $this->request->getVar('provinsi'),
            'kabupaten_kota' => $this->request->getVar('kabupaten_kota'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'desa_kelurahan' => $this->request->getVar('desa_kelurahan'),
            'kode_pos' => $this->request->getVar('kode_pos'),
            'jenis_transportasi' => $this->request->getVar('jenis_transportasi'),
            'jarak_tempat_tinggal' => $this->request->getVar('jarak_tempat_tinggal'),
            'yang_membiayai_sekolah' => $this->request->getVar('yang_membiayai_sekolah'),
            'kebutuhan_khusus' => $this->request->getVar('kebutuhan_khusus'),
            'kebutuhan_disabilitas' => $this->request->getVar('kebutuhan_disabilitas'),
            'pra_sekolah' => $this->request->getVar('pra_sekolah'),
            'imunisasi' => $this->request->getVar('imunisasi'),
            'nomer_kip' => $this->request->getVar('nomer_kip'),
            'nomer_kk' => $this->request->getVar('nomer_kk'),
            'nama_kepala_keluarga' => $this->request->getVar('nama_kepala_keluarga'),
            'user_id'=> user_id(),
        ];
        $this->santri_model->insert($data);
        $id = $this->santri_model->insertID();
        session()->setFlashdata('update','data Santri berhasil di input');
        return redirect()->to('santri/update/'.$id);
    }

    public function view($id){

    }
    
    public function update($id){
    
        $model = $this->santri_model->where('id',$id)->first();
        $data= [
            'data_santri'=> $model ,
            'action'=> base_url('santri/update-action/'.$id),
        ];
        return view('santri/form-santri',$data);

    }
    public function update_action($id){
        $data = [
            'nama' => $this->request->getVar('nama'),
            'nisn' => $this->request->getVar('nisn'),
            'nis' => $this->request->getVar('nis'),
            'nik' => $this->request->getVar('nik'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'anak_ke' => $this->request->getVar('anak_ke'),
            'jumlah_saudara' => $this->request->getVar('jumlah_saudara'),
            'agama' => $this->request->getVar('agama'),
            'cita_cita' => $this->request->getVar('cita_cita'),
            'no_hp' => $this->request->getVar('no_hp'),
            'email' => $this->request->getVar('email'),
            'hobi' => $this->request->getVar('hobi'),
            'alamat_lengkap' => $this->request->getVar('alamat_lengkap'),
            'provinsi' => $this->request->getVar('provinsi'),
            'kabupaten_kota' => $this->request->getVar('kabupaten_kota'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'desa_kelurahan' => $this->request->getVar('desa_kelurahan'),
            'kode_pos' => $this->request->getVar('kode_pos'),
            'jenis_transportasi' => $this->request->getVar('jenis_transportasi'),
            'jarak_tempat_tinggal' => $this->request->getVar('jarak_tempat_tinggal'),
            'yang_membiayai_sekolah' => $this->request->getVar('yang_membiayai_sekolah'),
            'kebutuhan_khusus' => $this->request->getVar('kebutuhan_khusus'),
            'kebutuhan_disabilitas' => $this->request->getVar('kebutuhan_disabilitas'),
            'pra_sekolah' => $this->request->getVar('pra_sekolah'),
            'imunisasi' => $this->request->getVar('imunisasi'),
            'nomer_kip' => $this->request->getVar('nomer_kip'),
            'nomer_kk' => $this->request->getVar('nomer_kk'),
            'nama_kepala_keluarga' => $this->request->getVar('nama_kepala_keluarga'),
            'user_id'=> user_id(),
        ];
 
        $this->santri_model->update($id,$data);
        session()->setFlashdata('update', 'Data santri telah di update');
        return redirect()->to('santri/update/'.$id);
    }


}

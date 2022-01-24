<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Myth\Auth\Config;
use App\Models\Santri;

class SantriController extends BaseController
{
    protected $helpers = ['auth','url'];
    protected $config;

    public function __construct()
    {
        $this->santri_model = new Santri();
    }
    public function index()
    {

       return view('auth/login',['config' => $this->config]);
    }

    public function register_mi(){
        return view('auth/register-mi');
    }

    public function create(){
        $data= [
            'action'=> base_url('santri-create-action'),
        ];
        return view('santri/form-pendaftaran',$data);
    }

    public function create_action(){
        $data = [
            'nama' => $this->request->getVar('nama'),
            'nisn' => $this->request->getVar('nisn'),
            'nik' => $this->request->getVar('nik'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'hp_orng_tua' => $this->request->getVar('hp_orng_tua'),
            'email' => $this->request->getVar('email'),
            'hobi' => $this->request->getVar('hobi'),
            'cita_cita' => $this->request->getVar('cita_cita'),
            'anak_ke' => $this->request->getVar('anak_ke'),
            'jumlah_saudara' => $this->request->getVar('jumlah_saudara'),
            'tinggi_badan' => $this->request->getVar('tinggi_badan'),
            'berat_badan' => $this->request->getVar('berat_badan'),
            'lingkar_kepala' => $this->request->getVar('lingkar_kepala'),
            'golongan_darah' => $this->request->getVar('golongan_darah'),
            'alamat_lengkap' => $this->request->getVar('alamat_lengkap'),
            'provinsi' => $this->request->getVar('provinsi'),
            'kabupaten_kota' => $this->request->getVar('kabupaten_kota'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'desa_kelurahan' => $this->request->getVar('desa_kelurahan'),
            'kode_pos' => $this->request->getVar('kode_pos'),
            'sekolah_asal' => $this->request->getVar('sekolah_asal'),
            'no_telepon_sekolah_asal' => $this->request->getVar('no_telepon_sekolah_asal'),
            'alamat_sekolah_asal' => $this->request->getVar('alamat_sekolah_asal'),
            'npsn' => $this->request->getVar('npsn'),
            'nsm' => $this->request->getVar('nsm'),
            'nomer_peserta_ujian' => $this->request->getVar('nomer_peserta_ujian'),
            'nomor_skhun' => $this->request->getVar('nomor_skhun'),
            'total_nilai_ujian_sd' => $this->request->getVar('total_nilai_ujian_sd'),
            'tanggal_lulus' => $this->request->getVar('tanggal_lulus'),
            'lulusan_dari' => $this->request->getVar('lulusan_dari'),
            'kk' => $this->request->getVar('kk'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'tempat_lahir_ayah' => $this->request->getVar('tempat_lahir_ayah'),
            'tanggal_lahir_ayah' => $this->request->getVar('tanggal_lahir_ayah'),
            'nik_ayah' => $this->request->getVar('nik_ayah'),
            'pendidikan_terakhir_ayah' => $this->request->getVar('pendidikan_terakhir_ayah'),
            'penghasilan_ayah' => $this->request->getVar('penghasilan_ayah'),
            'pekerjaan_ayah' => $this->request->getVar('pekerjaan_ayah'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'tempat_lahir_ibu' => $this->request->getVar('tempat_lahir_ibu'),
            'tanggal_lahir_ibu' => $this->request->getVar('tanggal_lahir_ibu'),
            'nik_ibu' => $this->request->getVar('nik_ibu'),
            'pendidikan_terakhir_ibu' => $this->request->getVar('pendidikan_terakhir_ibu'),
            'penghasilan_ibu' => $this->request->getVar('penghasilan_ibu'),
            'pekerjaan_ibu' => $this->request->getVar('pekerjaan_ibu'),
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
       $santri =  $this->santri_model->where('user_id',user_id())->first();
        $data = [
            'judul'=>'Selamat !,'. $santri['nama'],
            'deskripsi'=>'Anda telah mengisi form data profil'
        ];
        return view('santri/success',$data);

    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Myth\Auth\Models\UserModel;
use App\Models\Santri;
use App\Models\Ayah;
use App\Models\Ibu;
use App\Models\SekolahAsal;


class AdminController extends BaseController
{
    protected $helpers = ['auth', 'url', 'form'];
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->user_model = new UserModel();
        $this->santri_model = new Santri();
        $this->ayah_model = new Ayah();
        $this->ibu_model = new Ibu();
        $this->sekola_asal_model = new SekolahAsal();
    }

    public function index(){
        $data = [
            'users' => $this->card('bg-info','Jumlah Santri', $this->user_model),
        ];
        return view('admin/index', $data);
    }
    public function santri(){
       $santri_model = $this->db->table('users')
       ->select('*')
        ->select('users.id as uid, users.created_at as use_created')
        ->where('level is NOT NULL')
       ->join('santri','santri.user_id = users.id')
       ->orderBy('nama','DESC')
       ->get()->getResultArray();

        $data = [
            'judul'=>'Data Santri',
            'db'=>$this->db,
            'data_santri'=> $santri_model,
        ];
        return view('admin/santri',$data);
    }

    public function orang_tua(){
        $orang_tua = $this->db->table('ayah')
        ->select('*')
        ->join('users','ayah.user_id = users.id')
        ->join('ibu','ibu.user_id = users.id')
        ->orderBy('users.id','DESC')
        ->where('users.level is NOT NULL')
        ->get()->getResultArray();
        $data = [
            'judul'=>'Data Orang Tua',
            'data_orang_tua'=> $orang_tua,
        ];
        return view('admin/orang-tua',$data);
    }

    public function sekolah_asal(){
        $data_sakolah_asal = $this->db->table('sekolah_asal')
        ->select('*')
        ->join('users','sekolah_asal.user_id = users.id')
        ->join('santri','santri.user_id = users.id')
        ->orderBy('users.id','DESC')
        ->where('users.level is NOT NULL')
        ->get()->getResultArray();
        $data = [
            'judul'=>'Data Sekolah Asal',
            'data_sakolah_asal'=> $data_sakolah_asal,
        ];
        return view('admin/sekolah-asal',$data);
    }

    function jumlah($model)
    {
        return $model->countAll();
    }
    function card($color, $title, $model)
    {
     $output = '<div class="card '.$color.' text-white mb-4">';
      $output .= ' <div class="card-body"> '. $title .'</div>';
      $output .= '<div class="card-footer d-flex align-items-center justify-content-between">';
      $output .= '<span class=" text-white ">'. $model->countAll().'</span>';
      $output .= '<div class="small text-white"><i class="fas fa-angle-right"></i></div>';
      $output .=    '</div> ';
      $output .= ' </div>';
      
      return $output;
    }

}

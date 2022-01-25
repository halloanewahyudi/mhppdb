<?php

namespace App\Controllers;
use App\Models\Santri;

class Home extends BaseController
{
    protected $helpers = ['auth','url','form'];

    public function __construct()
    {
        $this->santri_model = new Santri();
    }
    public function index()
    {
        $get_id = $this->santri_model->where('user_id', user_id())->first();
        if(logged_in() && !empty($get_id['id'])){
          $data =[ 'nama'=>$get_id['nama']];
        }else{
            $data = ['nama'=>'Silakan Daftar'];
        }
 
        return view('welcome_message',$data);
    }

   
// registrasi
        public function reg(){
            $data = ['level'=>''];
            return view('auth/register',$data);
        }
    public function reg_mi(){
        $data=[
            'level'=>1,
        ];
        return view('auth/register',$data);
    }
    public function reg_ra(){
        $data=[
            'level'=>2,
        ];
        return view('auth/register',$data);
    }
    public function reg_mts_putra(){
        $data=[
            'level'=>3,
        ];
        return view('auth/register',$data);
    }
    public function reg_mts_putri(){
        $data=[
            'level'=>4,
        ];
        return view('auth/register',$data);
    }
    public function reg_ma_putra(){
        $data=[
            'level'=>5,
        ];
        return view('auth/register',$data);
    }
    public function reg_ma_putri(){
        $data=[
            'level'=>6,
        ];
        return view('auth/register',$data);
    }
}

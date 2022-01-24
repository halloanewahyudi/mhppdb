<?php

namespace App\Controllers;
use App\Models\Santri;

class Home extends BaseController
{
    protected $helpers = ['auth','url'];

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

    public function dashboard(){
         return '<h2> Hallo </h2>';
    }
}

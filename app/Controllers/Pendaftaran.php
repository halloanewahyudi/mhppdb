<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pendaftaran extends BaseController
{
    
    public function index()
    {
        //
        return view('santri/form-pendaftaran');
    }
}

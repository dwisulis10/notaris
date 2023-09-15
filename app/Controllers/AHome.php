<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AHome extends BaseController
{
    public function index()
    {
        $data = array(

            'title'=> 'AHome',
            'isi' => 'v_home'
        );
        
        return view('layout/v_wrapper',$data);
    }
}

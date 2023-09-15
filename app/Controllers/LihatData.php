<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LihatData extends BaseController
{
    public function index()
    {
        return view('/klien/lihat_data');

    }
}

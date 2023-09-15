<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProfilKlien extends BaseController
{
    public function index()
    {
        return view('/klien/profil');
    }
}

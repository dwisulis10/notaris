<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AktaModel;
use App\Models\PermohonanModel;
use App\Models\KlienModel;
use App\Models\ArsipModel;


class Dashboard extends BaseController
{
    public function index()
    {
        $akta = new AktaModel();
        $data['total_akta'] = $akta->countAllResults();
        $permoh = new PermohonanModel();
        $data['total_permohonan'] = $permoh->countAllResults();
        $klien = new KlienModel();
        $data['total_klien'] = $klien->countAllResults();
        $klien = new ArsipModel();
        $data['total_arsip'] = $klien->countAllResults();
        return view('dashboard', $data);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KlienModel;

class LaporanKlien extends BaseController
{
    public function index()
    {
        $model = new KlienModel();
        $data['klien'] = $model->findAll();

        return view('laporan_klien', $data);    
    }
    public function printAll()
    {
        // Ambil semua data permohonan
        $model = new KlienModel();
        $data['klien'] = $model->findAll();

        // Load view untuk mencetak semua data permohonan
        return view('print_laporan_klien_all', $data);
    }

}

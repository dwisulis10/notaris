<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AktaModel;

class AktaPerklien extends BaseController
{
    public function index()
    {
        $model = new AktaModel();
        $data['akta'] = $model->findAll();

        return view('akta_perklien', $data); 
    }
    public function printAll()
    {
        // Ambil semua data permohonan
        $model = new AktaModel();
        $data['akta'] = $model->findAll();
    
        // Load view untuk mencetak semua data permohonan
        return view('print_akta_perklien', $data);
    }

}

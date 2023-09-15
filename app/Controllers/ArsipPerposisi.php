<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArsipModel;


class ArsipPerposisi extends BaseController
{
    public function index()
    {
        $model = new ArsipModel();
        $data['arsip'] = $model->findAll();

        return view('arsip_perposisi', $data); 
    }
    public function printAll()
{
    // Ambil semua data permohonan
    $model = new ArsipModel();
    $data['arsip'] = $model->findAll();

    // Load view untuk mencetak semua data permohonan
    return view('print_arsip_perposisi', $data);
}
}

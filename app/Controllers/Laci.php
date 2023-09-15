<?php

namespace App\Controllers;
use App\Models\ArsipModel;


use App\Controllers\BaseController;

class Laci extends BaseController
{
    public function index()
    {
        $model = new ArsipModel();
        $data['arsip'] = $model->findAll();

        return view('laci', $data); 
    }
    public function printAll()
    {
        // Ambil semua data permohonan
        $model = new ArsipModel();
        $data['arsip'] = $model->findAll();
    
        // Load view untuk mencetak semua data permohonan
        return view('print_laci', $data);
    }
}

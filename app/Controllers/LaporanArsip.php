<?php

namespace App\Controllers;
use App\Models\ArsipModel;


use App\Controllers\BaseController;

class LaporanArsip extends BaseController
{
    public function index()
    {
        $model = new ArsipModel();
        $data['arsip'] = $model->findAll();

        return view('laporan_arsip', $data);   
    }
    public function printAll()
{
    // Ambil semua data permohonan
    $model = new ArsipModel();
    $data['arsip'] = $model->findAll();

    // Load view untuk mencetak semua data permohonan
    return view('print_laporan_arsip', $data);
}
public function search()
{
    $startDate = $this->request->getPost('start_date');
    $endDate = $this->request->getPost('end_date');

    $model = new ArsipModel();
    $data['akta'] = $model->searchByTanggal($startDate, $endDate);

    return view('laporan_arsip', $data);
}
}

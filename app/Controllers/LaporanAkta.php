<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AktaModel;

class LaporanAkta extends BaseController
{
    public function index()
    {
        $model = new AktaModel();
        $data['akta'] = $model->findAll();

        return view('laporan_akta', $data);   
}
public function printAll()
{
    // Ambil semua data permohonan
    $model = new AktaModel();
    $data['akta'] = $model->findAll();

    // Load view untuk mencetak semua data permohonan
    return view('print_laporan_akta', $data);
}
public function search()
{
    $startDate = $this->request->getPost('start_date');
    $endDate = $this->request->getPost('end_date');

    $model = new AktaModel();
    $data['akta'] = $model->searchByTanggal($startDate, $endDate);

    return view('laporan_akta', $data);
}
}

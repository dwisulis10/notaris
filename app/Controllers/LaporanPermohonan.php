<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PermohonanModel;

class LaporanPermohonan extends BaseController
{
    public function index()
    {
        $model = new PermohonanModel();
        $data['permohonanData'] = $model->findAll();

        return view('laporan_permohonan', $data);
    }

    public function search()
    {
        $startDate = $this->request->getPost('start_date');
        $endDate = $this->request->getPost('end_date');

        $model = new PermohonanModel();
        $data['permohonanData'] = $model->searchByTanggal($startDate, $endDate);

        return view('laporan_permohonan', $data);
    }

    public function printAll()
    {
        // Ambil semua data permohonan
        $model = new PermohonanModel();
        $data['permohonanData'] = $model->findAll();

        // Load view untuk mencetak semua data permohonan
        return view('print_laporan_permohonan_all', $data);
    }

}

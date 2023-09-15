<?php

namespace App\Controllers;
use \Config\Services;
use App\Models\KlienModel;
use App\Models\PermohonanModel;
use App\Models\AktaModel;
use App\Models\ArsipModel;
use App\Controllers\BaseController;

class DashboardKlien extends BaseController
{
    public function index()
    {
        return view('/klien/dashboard');
    } public function isi_klien()
    {
        return view('/klien/isi_klien');
    }
 
    public function lihat_data()
    {
        $session = Services::session(); // Inisialisasi sesi di dalam metode
        $data_klien = $session->get('data_klien');

        // Mengambil data klien dari KlienModel
        $klienModel = new KlienModel();
        $dataKlien = $klienModel->findAll();

        // Mengambil data permohonan dari PermohonanModel
        $permohonanModel = new PermohonanModel();
        $dataPermohonan = $permohonanModel->findAll();

        // Mengambil data akta dari AktaModel
        $aktaModel = new AktaModel();
        $dataAkta = $aktaModel->findAll();

        // Mengambil data arsip dari ArsipModel
        $arsipModel = new ArsipModel();
        $dataArsip = $arsipModel->findAll();

        // Meneruskan data ke tampilan dashboard
        return view('klien/lihat_data', [
            'data_klien' => $data_klien,
            'dataPermohonan' => $dataPermohonan,
            'dataAkta' => $dataAkta,
            'dataArsip' => $dataArsip,
        ]);
    }
}

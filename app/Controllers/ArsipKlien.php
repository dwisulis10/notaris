<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArsipModel;

class ArsipKlien extends BaseController
{
    public function index()
    {
        return view('klien/arsip_klien');

    }
    public function arsip_klien_view()
    {
        $session = \Config\Services::session();
        $dataKlien = $session->getFlashdata('data_klien');

        return view('klien/arsip_klien', ['dataKlien' => $dataKlien]);
    }
    public function save_arsip()
    {
        $model = new ArsipModel();
	   $data = [
            'client_number' => $this->request->getVar('client_number'),
            'nama_pemohon' => $this->request->getVar('nama_pemohon'),
            'nama_arsip' => $this->request->getVar('nama_arsip'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jenis_arsip' => $this->request->getVar('jenis_arsip'),
            'nomor_urut_laci' => $this->request->getVar('nomor_urut_laci'),
            
        ];

        $validationRules = [
            'nama_arsip' => 'required',
            'jenis_arsip' => 'required',
          
        ];
    
        $validationMessages = [
            'nama_arsip' => [
                'required' => 'NAma Arsip harus diisi.'
            ],
            'jenis_arsip' => [
                'required' => 'Jenis Arsip Harus Diisi.'
            ]
           
        ];
$validation =\Config\Services::validation();
$validation->setRules($validationRules, $validationMessages);

        if (!$this->validate($validationRules, $validationMessages)) {
           return view('klien/arsip_klien',[
		'validation' => $validation,
		'dataKlien' => $data
		]);
        }
     
        $model->insert($data);
    
        // Memuat service session
        $session = \Config\Services::session();
        // Set session flashdata
        $session->setFlashdata('data_klien', $data);
    
        // Redirect ke halaman formulir berikutnya
        return redirect()->to(base_url('klien/dashboard' ));
    }
}

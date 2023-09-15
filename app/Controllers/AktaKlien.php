<?php
namespace App\Controllers;
use App\Models\AktaModel;
use App\Controllers\BaseController;

class AktaKlien extends BaseController
{
    public function index()
    {
        return view('klien/akta_klien');
    }

    public function akta_klien_view()
    {
        $session = \Config\Services::session();
        $dataKlien = $session->getFlashdata('data_klien');
    
        // Membuat nomor faktur otomatis
        $tahun = date('Y'); // Mendapatkan tahun saat ini
        $model = new AktaModel();
        $lastFaktur = $model->getLastFaktur(); // Misalnya, method getLastFaktur() mengambil nomor faktur terakhir dari database
        $nomorFaktur = $tahun . '/' . ($lastFaktur + 1); // Contoh format: 2023/1
    
        return view('klien/akta_klien', ['dataKlien' => $dataKlien, 'nomorFaktur' => $nomorFaktur]);
    }

    public function save_akta()
    {
        $model = new AktaModel();

  $data = [
                'client_number' => $this->request->getVar('client_number'),
                'nama_pemohon' => $this->request->getVar('nama_pemohon'),
                'no_faktur' => $this->request->getVar('no_faktur'),
                'jenis_akta' => $this->request->getVar('jenis_akta'),
                'nomor_akta' => $this->request->getVar('nomor_akta'),
                'nomor_urut_laci' => $this->request->getVar('nomor_urut_laci'),
                'tanggal' => $this->request->getVar('tanggal')
];
        $validationRules = [
            'nomor_akta' => 'required',
            'nomor_urut_laci' => 'required',
            'tanggal' => 'required',
        ];
    
        $validationMessages = [
            'nomor_akta' => [
                'required' => 'Nomor Akta harus diisi.'
            ],
            'nomor_urut_laci' => [
                'required' => 'Laci Harus Dipilih.'
            ],
            'tanggal' => [
                'required' => 'tanggal harus diisi.'
            ]
        ];
    
      $validation = \Config\Services::validation();
      $validation->setRules($validationRules,$validationMessages);
	
	if (!$this->validate($validationRules, $validationMessages)){
		return view('klien/akta_klien',[
		'validation' =>$validation,
		'dataKlien' => $data
		]);
	} 

        $model->insert($data);
        
        // Memuat service session
        $session = \Config\Services::session();
        // Set session flashdata
        $session->setFlashdata('data_klien', $data);
    
        // Redirect ke halaman formulir berikutnya
        return redirect()->to(base_url('klien/arsip_klien' ));
    }
}

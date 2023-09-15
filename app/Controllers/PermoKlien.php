<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PermohonanModel;

class PermoKlien extends BaseController
{
    public function index()
    {
        return view('klien/permo_klien');
    }

    public function permo_klien_view()
    {
        $session = \Config\Services::session();
        $dataKlien = $session->getFlashdata('data_klien');

        return view('klien/permo_klien', ['dataKlien' => $dataKlien]);
    }

    public function save_permo()
    {
        $model = new PermohonanModel();

        $data = [
            'client_number' => $this->request->getVar('client_number'),
            'nama_pemohon' => $this->request->getVar('nama_pemohon'),
            'alamat_pemohon' => $this->request->getVar('alamat_pemohon'),
            'tujuan_pemohon' => $this->request->getVar('tujuan_pemohon'),
            'tgl_permohonan' => $this->request->getVar('tgl_permohonan'),
            'jenis_akta' => $this->request->getVar('jenis_akta'),
            'isi' => $this->request->getVar('isi')
        ];

        // Aturan validasi
        $validationRules = [
            'nama_pemohon' => 'required',
            'alamat_pemohon' => 'required',
            'tujuan_pemohon' => 'required', 
            'tgl_permohonan' => 'valid_date',
            'jenis_akta' => 'required',
            'isi' => 'required'
        ];

        $validationMessages = [
            'nama_pemohon' => [
                'required' => 'Nama Anda harus diisi.'
            ],
            'alamat_pemohon' => [
                'required' => 'Alamat harus diisi.'
            ],
            'tujuan_pemohon' => [
                'required' => 'Tujuan Permohonan harus diisi.'
            ],
            'tgl_permohonan' => [
                'valid_date' => 'Format tanggal tidak valid.'
            ],
            'jenis_akta' => [
                'required' => 'Jenis Akta harus dipilih.'
            ],
            'isi' => [
                'required' => 'Isi harus diisi.'
            ]
        ];

        $validation = \Config\Services::validation();
        $validation->setRules($validationRules, $validationMessages);

        if (!$this->validate($validationRules, $validationMessages)) {
            return view('klien/permo_klien', [
                'validation' => $validation, // Mengirim pesan kesalahan validasi ke tampilan
                'dataKlien' => $data // Mengirim data yang dimasukkan oleh pengguna ke tampilan
            ]);
        }

        $model->insert($data);

        // Memuat service session
        $session = \Config\Services::session();
        // Set session flashdata
        $session->setFlashdata('data_klien', $data);

        // Redirect ke halaman formulir berikutnya
        return redirect()->to(base_url('klien/akta_klien'));
    }
}

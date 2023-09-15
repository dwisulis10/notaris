<?php
// App\Controllers\Akta.php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PermohonanModel;
use App\Models\AktaModel;
use App\Models\KlienModel;

class Akta extends BaseController
{
    // App\Controllers\Akta.php
    public function index()
    {
        // Buat instance dari model AktaModel
        $aktaModel = new AktaModel();

        // Ambil data "jenis akta" dari model PermohonanModel menggunakan method getJenisAkta()
        $permohonanModel = new PermohonanModel();
        $jenis_akta = $permohonanModel->getJenisAkta();

        // Inisialisasi variabel data yang akan dikirimkan ke view
        $data = [
            'jenis_akta' => $jenis_akta,
            'akta' => $aktaModel->findAll(),
        ];

        $klienModel = new KlienModel();
        $data['klien'] = $klienModel->getAllKlien();

        $permohonan = new $permohonanModel;
        $data['permohonan'] = $permohonan->findAll();
        $data['menu'] = 'akta';

        return view('akta', $data);
    }
    
    public function permo_akta()
    {
        $session = \Config\Services::session();
        $KlienData = $session->getFlashdata('data_klien');
    
        return view('/akta', ['KlienData' => $KlienData]);
    }

    public function tambahdata()
    {
        
        // Mengambil data dari $dataKlien
        $dataKlien = session()->getFlashdata('data_klien') ?? [];
    
        // Pastikan Anda telah menginisialisasi session 'data_klien' dengan benar
        // di tempat lain dalam aplikasi Anda sebelum mencoba mengaksesnya di halaman Akta.
    
        $model = new AktaModel();
        
        $dataInsert = [
            
            'client_number'      => $this->request->getVar('client_number'),
            'nama_pemohon'      => $this->request->getVar('nama_pemohon'),
            'jenis_akta'      => $this->request->getVar('jenis_akta'),
            'no_faktur'      => $this->request->getVar('no_faktur'),
            'nomor_akta'      => $this->request->getVar('nomor_akta'),
            'tanggal'         => $this->request->getVar('tanggal'),
            'nomor_urut_laci' => $this->request->getVar('nomor_urut_laci'),
            'total'           => $this->request->getVar('total'),
        ];
        $model->insert($dataInsert);
        session()->set('client_number', $dataInsert['client_number']);
        session()->set('nama_pemohon', $dataInsert['nama_pemohon']);
        session()->set('nomor_urut_laci', $dataInsert['nomor_urut_laci']);
    
        // Simpan data Klien ke flashdata untuk digunakan di halaman berikutnya
            $session = \Config\Services::session();
            $session->setFlashdata('data_klien', $dataInsert);
        return redirect()->to('/arsip');
    }
    

    public function updatedata()
    {
        // Terima data dari form
        $id_akta = $this->request->getVar('id_akta');
        $jenis_akta = $this->request->getVar('jenis_akta');
        $no_faktur = $this->request->getVar('no_faktur');
        $nomor_akta = $this->request->getVar('nomor_akta');
        $nama_pemohon = $this->request->getVar('nama_pemohon');
        $tanggal = $this->request->getVar('tanggal');
        $nomor_urut_laci = $this->request->getVar('nomor_urut_laci');
        $total = $this->request->getVar('total');

        // Panggil model untuk melakukan pembaruan data
        $model = new AktaModel();
        $model->updatedata($id_akta, $jenis_akta, $no_faktur, $nomor_akta, $nama_pemohon, $tanggal, $nomor_urut_laci, $total);

        // Setelah pembaruan berhasil, arahkan pengguna ke halaman yang diinginkan atau tampilkan pesan sukses
        return redirect()->to('/akta')->with('status', 'Data berhasil diperbarui.');
    }
    public function deleteData($idAkta)
    {
        $model = new AktaModel();
        $model->delete($idAkta);
        // Kirim respons atau pesan sukses
        return redirect()->to('/akta');
    }
    // App\Controllers\Akta.php

    public function showAkta()
    {
        if ($this->request->getMethod() === 'post') {
            // Ambil data dari form
            $client_number = $this->request->getVar('client_number');
            $nama_pemohon = $this->request->getVar('nama_pemohon');
            $jenis_akta = $this->request->getVar('jenis_akta');
            $no_faktur = $this->request->getVar('no_faktur');
            $nomor_akta = $this->request->getVar('nomor_akta');
            $tanggal = $this->request->getVar('tanggal');
            $nomor_urut_laci = $this->request->getVar('nomor_urut_laci');
            $total = $this->request->getVar('total');

            // Lakukan validasi data jika diperlukan
            $tanggal = date('Y-m-d', strtotime($tanggal));
            // ...

            // Jika data sudah divalidasi, simpan data ke database menggunakan model AktaModel
            $aktaModel = new AktaModel();
            $dataInsert = [
                'client_number' => $client_number,
                'nama_pemohon' => $nama_pemohon,
                'jenis_akta' => $jenis_akta,
                'no_faktur' => $no_faktur,
                'nomor_akta' => $nomor_akta,
                'tanggal' => $tanggal,
                'nomor_urut_laci' => $nomor_urut_laci,
                'total' => $total,
            ];
            $aktaModel->insert($dataInsert);

            // Redirect ke halaman akta setelah berhasil menyimpan data
            return redirect()->to('/akta');
        }

        // Jika method bukan post, tampilkan halaman akta seperti biasa

    }
}

<?php

namespace App\Controllers;

//inisialisasi yang akan digunakan

use App\Controllers\BaseController;
use App\Models\PermohonanModel;
use App\Models\KlienModel;

class Permohonan extends BaseController
{

    //multi fungsi variable
    protected $PermohonanModel;
    public function __construct()
    {
        //menggunakan model
        $this->PermohonanModel = new PermohonanModel();
    }
    public function index()
    {
        $data['menu'] = 'permohonan';
        //menggunnakan model
        $permohonanModel = new PermohonanModel;
        $data['permohonan'] = $permohonanModel->findAll();

        $klien = new KlienModel;
        $data['klien'] = $klien->findAll();

        return view('/permohonan', $data);
    }
    public function permo_view()
    {
        $session = \Config\Services::session();
        $KlienData = $session->getFlashdata('data_klien');
    
        return view('/permohonan', ['KlienData' => $KlienData]);
    }
    protected $input;
    public function tambahdata()
    {
        $model = new PermohonanModel();
    
        // Periksa apakah data dari $KlienData tersedia
        $dataKlien = session()->getFlashdata('data_klien');
        if ($dataKlien) {
            $dataInsert = [
                'client_number'   => $dataKlien['client_number'],
                'nama_klien'      => $dataKlien['nama_klien'],
                'alamat'          => $dataKlien['alamat'],
                'tujuan_pemohon'  => $this->request->getPost('tujuan_pemohon'),
                'tgl_permohonan'  => $this->request->getPost('tgl_permohonan'),
                'jenis_akta'      => $this->request->getPost('jenis_akta'),
                'isi'             => $this->request->getPost('isi'),
            ];
        } else {
            // Jika data Klien tidak tersedia, tangani seperti biasa
            $dataInsert = [
                'client_number'   => $this->request->getVar('client_number'),
                'nama_pemohon'    => $this->request->getPost('nama_pemohon'),
                'alamat_pemohon'  => $this->request->getPost('alamat_pemohon'),
                'tujuan_pemohon'  => $this->request->getPost('tujuan_pemohon'),
                'tgl_permohonan'  => $this->request->getPost('tgl_permohonan'),
                'jenis_akta'      => $this->request->getPost('jenis_akta'),
                'isi'             => $this->request->getPost('isi'),
            ];
        }
    
        $model->insert($dataInsert);
    
        // Simpan data Klien ke flashdata untuk digunakan di halaman berikutnya
        session()->set('client_number', $dataInsert['client_number']);
    session()->set('nama_pemohon', $dataInsert['nama_pemohon']);
    session()->set('jenis_akta', $dataInsert['jenis_akta']);

    // Simpan data Klien ke flashdata untuk digunakan di halaman berikutnya
        $session = \Config\Services::session();
        $session->setFlashdata('data_klien', $dataInsert);
    
        // Kembalikan nilai berupa data permohonan yang baru ditambahkan
        return redirect()->to(base_url('/akta'));
    }
    public function updatedata()
    {
        // Terima data dari form
        $id_permohonan  = $this->request->getPost('id_permohonan');
        $nama_pemohon   = $this->request->getPost('nama_pemohon');
        $alamat_pemohon = $this->request->getPost('alamat_pemohon');
        $tujuan_pemohon = $this->request->getPost('tujuan_pemohon');
        $tgl_permohonan = $this->request->getPost('tgl_permohonan');
        $jenis_akta = $this->request->getPost('jenis_akta');
        $isi = $this->request->getPost('isi');

        // Terima data lainnya sesuai dengan kolom pada tabel

        // Panggil model untuk melakukan pembaruan data
        $model = new PermohonanModel();
        $model->updatedata($id_permohonan, $nama_pemohon, $alamat_pemohon, $tujuan_pemohon, $tgl_permohonan, $jenis_akta, $isi); // Gunakan data lainnya sesuai dengan kolom pada tabel

        // Setelah pembaruan berhasil, arahkan pengguna ke halaman yang diinginkan atau tampilkan pesan sukses
        return redirect()->to('/permohonan')->with('status', 'Data berhasil diperbarui.');
    }
    public function deleteData($id)
    {
        $model = new PermohonanModel();
        $model->delete($id);
        // Kirim respons atau pesan sukses
        return redirect()->to('/permohonan');
    }
}

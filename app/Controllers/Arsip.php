<?php

namespace App\Controllers;

use App\Models\ArsipModel;
use App\Models\AktaModel;

class Arsip extends BaseController
{
    public function index()
    {
        $arsipModel = new ArsipModel();
        $data['arsip'] = $arsipModel->findAll();
        $aktaModel = new AktaModel();
        $data['nama_klien_options'] = $aktaModel->findColumn('nama_pemohon'); // Menggunakan findColumn() untuk mengambil data nama klien
        $data['menu'] = 'arsip';

        return view('arsip', $data);
    }
    public function arsip_akta()
    {
        $session = \Config\Services::session();
        $KlienData = $session->getFlashdata('data_klien');
    
        return view('/akta', ['KlienData' => $KlienData]);
    }
    public function tambahdata()

    {
        $dataKlien = session()->getFlashdata('data_klien') ?? [];

        $model = new ArsipModel();

        $client_number = $this->request->getVar('client_number');
        $nama_arsip = $this->request->getVar('nama_arsip');
        $nama_pemohon = $this->request->getVar('nama_pemohon');
        $tanggal = $this->request->getVar('tanggal');
        $jenis_arsip = $this->request->getVar('jenis_arsip');
        $nomor_urut_laci = $this->request->getVar('nomor_urut_laci');

        $dataInsert = [
            'client_number' => $client_number,
            'nama_arsip' => $nama_arsip,
            'nama_pemohon' => $nama_pemohon,
            'tanggal' => $tanggal,
            'jenis_arsip' => $jenis_arsip,
            'nomor_urut_laci' => $nomor_urut_laci,
        ];

        $model->insert($dataInsert);
        
        return redirect()->to('/dashboard'); // Ubah menjadi '/akta'
    }
    public function updatedata()
    {
        // Menggunakan helper input untuk mengambil data POST
        $id_arsip = $this->request->getPost('id_arsip');
        $nama_arsip = $this->request->getPost('nama_arsip');
        $nama_pemohon = $this->request->getPost('nama_pemohon');
        $tanggal = $this->request->getPost('tanggal');
        $jenis_arsip = $this->request->getPost('jenis_arsip');
        $nomor_urut_laci = $this->request->getPost('nomor_urut_laci');
        $file_pdf = $this->request->getPost('file_pdf');

        // Panggil model untuk melakukan pembaruan data
        $model = new ArsipModel();
        $model->updatedata($id_arsip, $nama_arsip, $nama_pemohon, $tanggal, $jenis_arsip, $nomor_urut_laci, $file_pdf);

        // Setelah pembaruan berhasil, arahkan pengguna ke halaman yang diinginkan atau tampilkan pesan sukses
        return redirect()->to('/arsip')->with('status', 'Data berhasil diperbarui.');
    }
    public function deleteData($id)
    {
        $model = new ArsipModel();
        $model->delete($id);
        // Kirim respons atau pesan sukses
        return redirect()->to('/arsip');
    }
}

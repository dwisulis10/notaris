<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KlienModel;
use App\Models\PermohonanModel;

class Klien extends BaseController
{
    public function index()
    {
        $data = session()->get('data_klien');

        $data['menu'] = 'klien';

        $klienModel = new KlienModel();
        $data['klien'] = $klienModel->findAll();

        $permohon = new PermohonanModel;
        $data['permohonan'] = $permohon->findAll();

        return view('/klien', $data);
    }

    public function tambahdata()
    {
        $klienModel = new KlienModel();

        // Terima data dari form
        $nama_klien = $this->request->getPost('nama_klien');
        $no_ktp = $this->request->getPost('no_ktp');
        $tempat_lahir = $this->request->getPost('tempat_lahir');
        $tgl_lahir = $this->request->getPost('tgl_lahir');
        $agama = $this->request->getPost('agama');
        $jenis_kelamin = $this->request->getPost('jenis_kelamin');
        $alamat = $this->request->getPost('alamat');
        $no_hp = $this->request->getPost('no_hp');
    
        // Lakukan validasi
        if ($klienModel->isNamaKlienExists($nama_klien)) {
            return redirect()->back()->withInput()->with('error', 'Nama klien sudah digunakan.');
        }
    
        $lastClient = $klienModel->selectMax('id_klien')->first();
        $counter = 1;
    
        if ($lastClient) {
            $counter = intval($lastClient['id_klien']) + 1;
        }
    
        $formattedCounter = sprintf('%03d', $counter);
    
        // Panggil model untuk menyimpan data klien baru
        $klienData = [
            'client_number' => 'P' . $formattedCounter,
            'nama_klien'   => $nama_klien,
            'no_ktp' => $no_ktp,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'agama'     => $agama,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
        ];
        $klienModel->insert($klienData);
    
        // Setelah mendapatkan $formattedCounter, Anda baru dapat mengatur session.
        session()->set('client_number', 'P' . $formattedCounter);
        session()->set('nama_klien', $nama_klien);
        session()->set('alamat', $alamat);
    
        $session = \Config\Services::session();
        $session->setFlashdata('data_klien', $klienData);
    
        return redirect()->to(base_url('/permohonan'));
    }
    

    // App\Controllers\Klien

    // ...

    public function updatedata()
    {
        // Terima data dari form
        $id_klien = $this->request->getPost('id_klien');
        $nama_klien = $this->request->getPost('nama_klien');
        $no_ktp = $this->request->getPost('no_ktp');
        $tempat_lahir = $this->request->getPost('tempat_lahir');
        $tgl_lahir = $this->request->getPost('tgl_lahir');
        $agama = $this->request->getPost('agama');
        $jenis_kelamin = $this->request->getPost('jenis_kelamin');
        $alamat = $this->request->getPost('alamat');
        $no_hp = $this->request->getPost('no_hp');

        // Panggil model untuk melakukan pembaruan data
        $model = new KlienModel();
        $model->updatedata($id_klien, $nama_klien, $no_ktp, $tempat_lahir, $tgl_lahir, $agama, $jenis_kelamin, $alamat, $no_hp);

        // Setelah pembaruan berhasil, arahkan pengguna ke halaman yang diinginkan atau tampilkan pesan sukses
        return redirect()->to('/klien')->with('status', 'Data berhasil diperbarui.');
    }
    public function deleteData($id)
    {
        $model = new KlienModel();
        $model->delete($id);
        // Kirim respons atau pesan sukses
        return redirect()->to('/klien');
    }
}

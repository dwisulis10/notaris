<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KlienModel;

class FormKlien extends BaseController
{
    public function index()
    {
        $data = session()->get('data_klien');

        if ($data) {
            // Tampilkan data klien yang diinput oleh user
            // Misalnya:
            echo "Nama klien: " . $data['nama_klien'];
            echo "Nomor KTP: " . $data['no_ktp'];
        } else {
            // Redirect ke halaman `isi_klien`
            return redirect()->to('/klien/isi_klien');
        }
    }

    public function save()
    {
        $model = new KlienModel();

        $validationRules = [

            'nama_klien' => 'required',
            'no_ktp' => 'required|is_unique[tbl_klien.no_ktp]|exact_length[16]',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ];

        $validationMessages = [

            'nama_klien' => 'Nama Anda harus diisi.',
            'no_ktp' => [
                'required' => 'Nomor KTP harus diisi.',
                'is_unique' => 'Nomor KTP sudah digunakan.',
                'exact_length' => 'Nomor KTP harus terdiri dari 16 digit.',
            ],
            'tempat_lahir' => [
                'required' => 'Tempat Lahir harus diisi.'
            ],
            'tgl_lahir' => [
                'required' => 'Tanggal Lahir harus diisi.'
            ],
            'jenis_kelamin' => [
                'required' => 'jenis kelamin harus dipilih.'
            ],
            'agama' => [
                'required' => 'agama  harus diisi.'
            ],
            'alamat' => [
                'required' => 'Alamat harus diisi.'
            ],
            'no_hp' => [
                'required' => 'Nomor Hp harus  harus diisi.'
            ],
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            // Jika validasi gagal, tampilkan pesan kesalahan validasi
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }


        $lastClient = $model->selectMax('id_klien')->first();
        $counter = 1;

        if ($lastClient) {
            $counter = intval($lastClient['id_klien']) + 1;
        }

        $formattedCounter = sprintf('%03d', $counter);
        $data = [
            'client_number' => 'P' . $formattedCounter,
            'nama_klien' => $this->request->getPost('nama_klien'),
            'no_ktp' => $this->request->getPost('no_ktp'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'agama' => $this->request->getPost('agama'),
            'alamat' => $this->request->getPost('alamat'),
            'no_hp' => $this->request->getPost('no_hp'),
        ];

        $model->insert($data);

        $session = \Config\Services::session();
        $session->setFlashdata('data_klien', $data);


        // Redirect ke halaman formulir berikutnya
        return redirect()->to(base_url('klien/permo_klien'));
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class ArsipModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_arsip';
    protected $primaryKey       = 'id_arsip';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_arsip','id_akta','id_klien','client_number','nama_arsip','nama_pemohon','tanggal','jenis_arsip','nomor_urut_laci','file_pdf'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    public function updatedata($id_arsip, $nama_arsip, $nama_pemohon, $tanggal, $jenis_arsip, $nomor_urut_laci, $file_pdf)
    {
        $data = [
           

            'id_arsip' => $id_arsip,
            'nama_arsip' => $nama_arsip,
            'nama_pemohon' => $nama_pemohon,
            'tanggal' => $tanggal,
            'jenis_arsip' => $jenis_arsip,
            'nomor_urut_laci' => $nomor_urut_laci,
            'file_pdf' => $file_pdf,
        ];

        // Menggunakan method update untuk melakukan pembaruan data
        $this->update($id_arsip, $data);
    }
    
}

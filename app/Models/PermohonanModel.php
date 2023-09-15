<?php

namespace App\Models;

use CodeIgniter\Model;




class PermohonanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_permohonan';
    protected $primaryKey       = 'id_permohonan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_permohonan','client_number', 'nama_pemohon', 'alamat_pemohon', 'tujuan_pemohon', 'tgl_permohonan', 'jenis_akta', 'isi'];

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

    public function updatedata($id_permohonan, $nama_pemohon, $alamat_pemohon, $tujuan_pemohon, $tgl_permohonan, $jenis_akta, $isi)
{
    $data = [
        'nama_pemohon' => $nama_pemohon,
        'alamat_pemohon' => $alamat_pemohon,
        'tujuan_pemohon' => $tujuan_pemohon,
        'tgl_permohonan' => $tgl_permohonan,
        'jenis_akta' => $jenis_akta,
        'isi' => $isi

        // Data lainnya sesuai dengan kolom pada tabel
    ];

    $this->db->table('tbl_permohonan')->where('id_permohonan', $id_permohonan)->update($data);
}

public function deleteData($idPermohonan)
{
    $this->db->table('tbl_permohonan')->where('id_permohonan', $idPermohonan)->delete();
}


public function searchByTanggal($startDate, $endDate)
{
    return $this->where('tgl_permohonan >=', $startDate)
                ->where('tgl_permohonan <=', $endDate)
                ->findAll();
}
 // Fungsi untuk mengambil data jenis akta dari tabel permohonan

 public function getJenisAkta()
 {
     // Anggap kita memiliki model bernama 'AktaModel' yang berinteraksi dengan database.
     // Gantilah 'AktaModel' dengan nama model yang sesuai jika berbeda.
     $aktaModel = new AktaModel();
     $data = $aktaModel->findAll();
 
     // Kita perlu mengambil kolom 'jenis_akta' dari hasil query.
     $jenisAktaArray = array_column($data, 'jenis_akta');
 
     // Kembalikan array dari nilai 'jenis_akta' yang diambil dari database.
     return $jenisAktaArray;
 }
 
 
}
?>
<?php

namespace App\Models;

use CodeIgniter\Model;

class KlienModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_klien';
    protected $primaryKey       = 'id_klien';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';  
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_klien','client_number', 'nama_klien','no_ktp','tempat_lahir','tgl_lahir','agama','jenis_kelamin','alamat','no_hp'];

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
    public function getNamaKlien()
    {
        $query = $this->select('nama_klien')->distinct()->findAll();
        $nama_klien = array_column($query, 'nama_klien');
        return $nama_klien;
    }
    public function isNamaKlienExists($nama_klien)
    {
        $query = $this->where('nama_klien', $nama_klien)->countAllResults();
        return $query > 0;
    }
    // App\Models\KlienModel

// ...

public function updatedata($id_klien, $nama_klien, $no_ktp, $tempat_lahir, $tgl_lahir, $agama, $jenis_kelamin, $alamat, $no_hp)
{
    $data = [
        'nama_klien'   => $nama_klien,
        'no_ktp' => $no_ktp,
        'tempat_lahir' => $tempat_lahir,
        'tgl_lahir' => $tgl_lahir,
        'agama'     => $agama,
        'jenis_kelamin' => $jenis_kelamin,
        'alamat' => $alamat,
        'no_hp' => $no_hp,
    ];

    // Gunakan metode update() dari Model untuk memperbarui data
    $this->update($id_klien, $data);
}
public function deleteData($idKlien)
{
    $this->db->table('tbl_klien')->where('id_klien', $idKlien)->delete();
}

public function getAllKlien()
    {
        return $this->findAll();
    }

    public function getDataByUserId($userId)
    {
        $query = $this->where('id_klien', $userId)->first();
        return $query ? $query : null;
    }
}

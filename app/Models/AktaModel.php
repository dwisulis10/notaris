<?php

namespace App\Models;

use CodeIgniter\Model;

class AktaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'akta';
    protected $primaryKey       = 'id_akta';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_akta','id_permohonan','client_number','jenis_akta','no_faktur',  'nomor_akta', 'nama_pemohon', 'tanggal', 'nomor_urut_laci', 'total',];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
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

    public function updatedata($id_akta,$jenis_akta,$no_faktur, $nomor_akta, $nama_pemohon, $tanggal, $nomor_urut_laci, $total)
    {
        $data = [
           
            'jenis_akta' => $jenis_akta,
            'no_faktur' => $no_faktur,
            'nomor_akta' => $nomor_akta,
            'nama_pemohon' => $nama_pemohon,
            'tanggal' => $tanggal,
            'nomor_urut_laci' => $nomor_urut_laci,
            'total' => $total
            
            // Data lainnya sesuai dengan kolom pada tabel
        ];
    
        $this->db->table('akta')->where('id_akta', $id_akta)->update($data);
    }
    public function deleteData($idAkta)
    {
        $this->db->table('akta')->where('id_akta', $idAkta)->delete();
    }
    public function searchByTanggal($startDate, $endDate)
{
    return $this->where('tanggal >=', $startDate)
                ->where('tanggal <=', $endDate)
                ->findAll();
}
public function getLastFaktur()
{
    // Lakukan query ke database untuk mengambil nomor faktur terakhir
    $lastFaktur = $this->db->table($this->table)
        ->selectMax('nomor_akta')
        ->get()
        ->getRow();

    if ($lastFaktur) {
        return (int) $lastFaktur->nomor_akta;
    } else {
        // Jika belum ada nomor faktur, kembalikan 0 atau nilai awal yang Anda inginkan
        return 0;
    }
}
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatModel extends Model
{
    protected $table      = 'riwayat';
    protected $primaryKey = 'id_riwayat';
    protected $allowedFields = [
        'nama_pasien', 'nama_penyakit', 'tanggal'
    ];

    public function getRiwayat($id_riwayat = false)
    {
        if ($id_riwayat == false) {
            return $this->findAll();
        }

        return $this->where(['id_riwayat' => $id_riwayat])->first();
    }
}

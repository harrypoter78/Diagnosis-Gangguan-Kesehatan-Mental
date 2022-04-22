<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyakitModel extends Model
{
    protected $table      = 'penyakit';
    protected $primaryKey = 'id_penyakit';
    protected $allowedFields = [
        'kode_penyakit', 'nama_penyakit', 'deskripsi', 'solusi_obat', 'solusi_lain'
    ];

    public function getPenyakit($id_penyakit = false)
    {
        if ($id_penyakit == false) {
            return $this->findAll();
        }

        return $this->where(['id_penyakit' => $id_penyakit])->first();
    }
}

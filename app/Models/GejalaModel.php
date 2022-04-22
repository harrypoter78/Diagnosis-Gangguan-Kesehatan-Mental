<?php

namespace App\Models;

use CodeIgniter\Model;

class GejalaModel extends Model
{
    protected $table      = 'gejala';
    protected $primaryKey = 'id_gejala';
    protected $allowedFields = [
        'kode_gejala', 'nama_gejala'
    ];

    public function getGejala($id_gejala = false)
    {
        if ($id_gejala == false) {
            return $this->findAll();
        }

        return $this->where(['id_gejala' => $id_gejala])->first();
    }
}

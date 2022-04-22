<?php

namespace App\Models;

use CodeIgniter\Model;

class RuleModel extends Model
{
    protected $table      = 'rule';
    protected $primaryKey = 'id_rule';
    protected $allowedFields = [
        'kode_rule', 'kode_penyakit', 'kode_gejala'
    ];

    public function getRule($id_rule = false)
    {
        if ($id_rule == false) {
            return $this->findAll();
        }

        return $this->where(['id_rule' => $id_rule])->first();
    }
}

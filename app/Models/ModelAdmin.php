<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function getKelas()
    {
        $table = 'kelas';
        $primaryKey = 'id_kelas';
        return $this->findAll();
    }
}

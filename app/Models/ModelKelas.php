<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    public function getKelas()
    {
        return $this->findAll();
    }
}

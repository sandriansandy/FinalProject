<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $allowedFields = ['id_kelas', 'nama', 'tahun_ajaran'];

    public function getKelasAdmin()
    {
        return $this->findAll();
    }
}

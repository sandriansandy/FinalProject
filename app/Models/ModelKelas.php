<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $allowedFields = ['id_kelas', 'nama_kelas', 'tahun_ajaran'];

    public function getKelasAdmin($id_kelas = false)
    {
        if (empty($id_kelas)) {
            return $this->findAll();
        } else
            return $this->find($id_kelas);
    }
}

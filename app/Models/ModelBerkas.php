<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBerkas extends Model
{
    protected $table = 'berkas';
    protected $primaryKey = 'id_berkas';
    protected $allowedFields = ['id_berkas', 'jenis_berkas', 'nama_file', 'form'];

    public function getBerkas($id = false)
    {
        if ($id == false) {
            return $this->join('layanan', 'berkas.id_berkas = layanan.id_berkas')->findAll();
        }
        return $this->where(['id_berkas' => $id])->first();
    }
}

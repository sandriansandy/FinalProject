<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBerkas extends Model
{
    protected $table = 'berkas';
    protected $primaryKey = 'id_berkas';
    protected $allowedFields = ['id_berkas', 'jenis_berkas', 'nama_file'];

    public function getBerkas($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_berkas' => $id])->first();
    }
    public function cek($id)
    {
        return $this->where(['id_berkas'])->find();
    }
}

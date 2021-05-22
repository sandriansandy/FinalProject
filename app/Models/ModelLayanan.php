<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLayanan extends Model
{
    protected $table = 'layanan';
    protected $primaryKey = 'id_form';
    protected $allowedFields = ['id_form', 'NISN', 'id_berkas', 'tanggal', 'form'];

    public function getLayanan()
    {
        return $this->join('siswa', 'siswa.NISN = layanan.NISN')->findAll();
    }
}

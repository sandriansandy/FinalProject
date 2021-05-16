<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSiswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'NISN';

    public function getSiswa()
    {
        return $this->where(['NISN' => '123'])->first();
    }

    public function getSiswaAdmin($NISN = false)
    {
        if ($NISN == false) {
            return $this->join('kelas', 'kelas.id_kelas = siswa.id_kelas')->findAll();
        }
        return $this->where(['NISN' => $NISN])->first();
    }
}
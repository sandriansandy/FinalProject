<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelNilai extends Model
{
    protected $table = 'nilai';
    protected $primaryKey = 'id_nilai';
    protected $allowedFields = ['id_nilai', 'NISN', 'id_mapel', 'semester', 'T1', 'T2', 'UTS', 'T3', 'T4', 'UAS', 'Nama_mapel'];

    public function getNilaiGuru()
    {
        return $this->join('siswa', 'siswa.NISN = nilai.NISN')
            ->join('mapel', 'mapel.id_mapel = mapel.id_mapel')->findAll();
    }
}

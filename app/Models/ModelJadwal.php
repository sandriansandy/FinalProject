<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelJadwal extends Model
{
    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $allowedFields = ['id_jadwal', 'id_mapel', 'id_kelas', 'NIP', 'hari', 'jam_mulai', 'jam_selesai'];

    public function getJadwalAdmin()
    {

        return $this->join('mapel', 'mapel.id_mapel = jadwal.id_mapel')
            ->join('kelas', 'kelas.id_kelas = jadwal.id_kelas')
            ->join('guru', 'guru.NIP = jadwal.NIP')->findAll();
    }

    public function getJadwalGuru($NIP)
    {

        return $this->join('mapel', 'mapel.id_mapel = jadwal.id_mapel')
            ->join('kelas', 'kelas.id_kelas = jadwal.id_kelas')
            ->join('guru', 'guru.NIP = jadwal.NIP')->where(['NIP' => $NIP])->findAll();
    }

    public function getJadwalSiswa($NISN)
    {

        return $this->join('mapel', 'mapel.id_mapel = jadwal.id_mapel')
            ->join('kelas', 'kelas.id_kelas = jadwal.id_kelas')
            ->join('guru', 'guru.NIP = jadwal.NIP')->where(['NIP' => $NISN])->findAll();
    }
}

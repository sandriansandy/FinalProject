<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPresensi extends Model
{
    protected $table = 'presensi';
    protected $primaryKey = 'id_presensi';
    protected $allowedFields = ['id_presensi', 'id_jadwal', 'tanggal'];

    public function getPresensiAdmin($id_presensi = false)
    {
        if ($id_presensi == false) {
            return $this->join('jadwal', 'presensi.id_jadwal = jadwal.id_jadwal')
                ->join('kelas', 'kelas.id_kelas = jadwal.id_kelas')
                ->join('mapel', 'mapel.id_mapel = jadwal.id_mapel')->findAll();
        }
        return $this->join('jadwal', 'presensi.id_jadwal = jadwal.id_jadwal')
            ->join('kelas', 'kelas.id_kelas = jadwal.id_kelas')
            ->join('mapel', 'mapel.id_mapel = jadwal.id_mapel')->first();
    }
    public function getPresensiGuru($id_presensi = false)
    {
        if ($id_presensi == false) {
            return $this->join('jadwal', 'presensi.id_jadwal = jadwal.id_jadwal')
                ->join('kelas', 'kelas.id_kelas = jadwal.id_kelas')
                ->join('mapel', 'mapel.id_mapel = jadwal.id_mapel')->findAll();
        }
        return $this->join('jadwal', 'presensi.id_jadwal = jadwal.id_jadwal')
            ->join('kelas', 'kelas.id_kelas = jadwal.id_kelas')
            ->join('mapel', 'mapel.id_mapel = jadwal.id_mapel')->first();
    }
    public function cek($id)
    {
        return $this->where(['id_presensi'])->find();
    }
}

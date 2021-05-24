<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDetPresensi extends Model
{
    protected $table = 'detail_presensi';
    protected $primaryKey = 'id_dp';
    protected $allowedFields = ['id_dp', 'id_presensi', 'NISN', 'status'];

    public function getDetPresensi($id_presensi)
    {
        return $this->join('presensi', 'presensi.id_presensi = detail_presensi.id_presensi')
            ->join('siswa', 'siswa.NISN = detail_presensi.NISN')->where(['detail_presensi.id_presensi' => $id_presensi])->findAll();
    }
    public function getJadwal($nisn)
    {
        return $this->join('presensi', 'presensi.id_presensi = detail_presensi.id_presensi')
            ->join('jadwal', 'jadwal.id_jadwal = presensi.id_jadwal')
            ->join('mapel', 'mapel.id_mapel = jadwal.id_mapel')
            ->join('siswa', 'siswa.NISN = detail_presensi.NISN')
            ->where(['detail_presensi.NISN' => $nisn])->groupBy('Nama_mapel')->findAll();
    }
    public function getPresensi($id)
    {
        return $this->where(['id_dp' => $id])->first();
    }
    public function getPresent($nisn, $jadwal)
    {
        return $this->join('presensi', 'presensi.id_presensi = detail_presensi.id_presensi')
            ->join('siswa', 'siswa.NISN = detail_presensi.NISN')
            ->join('jadwal', 'jadwal.id_jadwal = presensi.id_jadwal')
            ->where(['detail_presensi.NISN' => $nisn, 'status' => 'hadir', 'presensi.id_jadwal' => $jadwal])->get();
    }
    public function getExcuse($nisn, $jadwal)
    {
        return $this->join('presensi', 'presensi.id_presensi = detail_presensi.id_presensi')
            ->join('siswa', 'siswa.NISN = detail_presensi.NISN')
            ->join('jadwal', 'jadwal.id_jadwal = presensi.id_jadwal')
            ->where(['detail_presensi.NISN' => $nisn, 'status' => 'ijin', 'presensi.id_jadwal' => $jadwal])->get();
    }
    public function getAbstain($nisn, $jadwal)
    {
        return $this->join('presensi', 'presensi.id_presensi = detail_presensi.id_presensi')
            ->join('siswa', 'siswa.NISN = detail_presensi.NISN')
            ->join('jadwal', 'jadwal.id_jadwal = presensi.id_jadwal')
            ->where(['detail_presensi.NISN' => $nisn, 'status' => 'absen', 'presensi.id_jadwal' => $jadwal])->get();
    }
}

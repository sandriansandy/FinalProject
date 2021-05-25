<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelJadwal extends Model
{
    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $allowedFields = ['id_jadwal', 'id_mapel', 'id_kelas', 'NIP', 'hari', 'jam_mulai', 'jam_selesai', 'Nama_mapel', 'nama_guru', 'nama'];

    public function getEditJadwalAdmin($id_jadwal = false)
    {
        if ($id_jadwal == false) {
            return $this->join('mapel', 'mapel.id_mapel = jadwal.id_mapel')
                ->join('kelas', 'kelas.id_kelas = jadwal.id_kelas')
                ->join('guru', 'guru.NIP = jadwal.NIP')->findAll();
        }
        return $this->join('mapel', 'mapel.id_mapel = jadwal.id_mapel')
            ->join('kelas', 'kelas.id_kelas = jadwal.id_kelas')
            ->join('guru', 'guru.NIP = jadwal.NIP')->where(['jadwal.id_jadwal' => $id_jadwal])->first();
    }
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
            ->join('guru', 'guru.NIP = jadwal.NIP')->where(['guru.NIP' => $NIP])->findAll();
    }

    public function getJadwalSiswa($id_kelas)
    {

        return $this->join('mapel', 'mapel.id_mapel = jadwal.id_mapel')
            ->join('kelas', 'kelas.id_kelas = jadwal.id_kelas')
            ->join('siswa', 'siswa.id_kelas = jadwal.id_kelas')
            ->join('guru', 'guru.NIP = jadwal.NIP')->where(['jadwal.id_kelas' => $id_kelas])->findAll();
    }
    public function cek($id)
    {
        return $this->where(['id_jadwal'])->find();
    }
}

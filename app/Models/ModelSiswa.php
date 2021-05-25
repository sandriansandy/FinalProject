<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSiswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'NISN';
    protected $allowedFields = ['NISN', 'Nama', 'TTL', 'Angkatan', 'Alamat', 'tgl_masuk', 'jenis_kelamin', 'foto', 'id_kelas', 'password'];

    public function getSiswaKelas($id)
    {
        return $this->where(['id_kelas' => $id])->findAll();
    }

    public function getSiswaAdmin($NISN = false)
    {
        if ($NISN == false) {
            return $this->join('kelas', 'kelas.id_kelas = siswa.id_kelas')->findAll();
        }
        return $this->join('kelas', 'kelas.id_kelas = siswa.id_kelas')->where(['NISN' => $NISN])->first();
    }

    public function login($NISN, $pass)
    {
        return $this->where(['NISN' => $NISN, 'password' => $pass])->countAllResults();
    }

    public function cek($id)
    {
        return $this->where(['NISN'])->find();
    }
}

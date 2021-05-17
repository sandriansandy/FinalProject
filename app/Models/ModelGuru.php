<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelGuru extends Model
{
    protected $table = 'guru';
    protected $primaryKey = 'NIP';
    protected $allowedFields = ['NIP', 'Nama', 'jenis_kelamin', 'TTL', 'Alamat', 'tgl_masuk', 'id_mapel', 'no_hp', 'foto', 'password'];

    public function getGuruAdmin($NIP = false)
    {
        if ($NIP == false) {
            return $this->join('mapel', 'mapel.id_mapel = guru.id_mapel')->findAll();
        }
        return $this->join('mapel', 'mapel.id_mapel = guru.id_mapel')->where(['NIP' => $NIP])->first();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMapel extends Model
{
    protected $table = 'mapel';
    protected $primaryKey = 'id_mapel';
    protected $allowedFields = ['id_mapel', 'Nama_mapel'];

    public function getMapel()
    {
        return $this->findAll();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function getAdmin()
    {
        return $this->where(['NISN' => '123'])->first();
    }
}

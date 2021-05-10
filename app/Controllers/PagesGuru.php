<?php

namespace App\Controllers;

class PagesGuru extends BaseController
{
    // GURU
    public function detailPresensiGuru()
    {
        return view('guru/detailPresensi');
    }
    public function indexGuru()
    {
        return view('guru/index');
    }
    public function jadwalGuru()
    {
        return view('guru/jadwal');
    }
    public function nilaiGuru()
    {
        return view('guru/nilai');
    }
    public function nilaiKelasGuru()
    {
        return view('guru/nilaiKelas');
    }
    public function presensiGuru()
    {
        return view('guru/presensi');
    }
}

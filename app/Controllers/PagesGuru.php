<?php

namespace App\Controllers;

class PagesGuru extends BaseController
{
    // GURU
    public function indexGuru()
    {
        $data['judul'] = 'Home | SINOFAK';
        $data['content'] = 'index';
        return view('guru/index', $data);
    }
    public function jadwalGuru()
    {
        $data['judul'] = 'Jadwal | SINOFAK';
        $data['content'] = 'jadwal';
        return view('guru/jadwal', $data);
    }
    public function nilaiGuru()
    {
        $data['judul'] = 'Nilai | SINOFAK';
        $data['content'] = 'nilai';
        return view('guru/nilai', $data);
    }
    public function nilaiKelasGuru()
    {
        $data['judul'] = 'Detail Nilai | SINOFAK';
        $data['content'] = 'nilaiKelas';
        return view('guru/nilaiKelas', $data);
    }
    public function presensiGuru()
    {
        $data['judul'] = 'Presensi | SINOFAK';
        $data['content'] = 'presensi';
        return view('guru/presensi', $data);
    }
    public function detailPresensiGuru()
    {
        $data['judul'] = 'Detail Presensi | SINOFAK';
        $data['content'] = 'detailPresensi';
        return view('guru/detailPresensi', $data);
    }
}

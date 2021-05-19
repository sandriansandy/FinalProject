<?php

namespace App\Controllers;

use App\Models\ModelGuru;
use App\Models\ModelMapel;
use App\Models\ModelNilai;
use App\Models\ModelSiswa;

class PagesGuru extends BaseController
{
    // GURU
    protected $identitasGuru;
    public function __construct()
    {
        $this->identitasGuru = new ModelGuru();
    }

    public function indexGuru()
    {
        $guru = $this->identitasGuru->getGuruAdmin(session('username'));
        $data['judul'] = 'Home | SINOFAK';
        $data['content'] = 'index';
        $data['guru'] = $guru;
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
        $this->nilai = new ModelNilai();
        $this->mapel = new ModelMapel();
        $data['judul'] = 'Nilai | SINOFAK';
        $data['content'] = 'nilai';
        $data['identitas'] = $this->nilai->getNilaiGuru();
        $data['mapel'] = $this->mapel->getMapel();
        return view('guru/nilai', $data);
    }
    public function tambahNilaiGuru()
    {
        $data['judul'] = 'Tambah Nilai | SINOFAK';
        $data['content'] = 'nilai';
        return view('guru/tambahNilai', $data);
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

    public function simpanNilai()
    {
        $this->jadwal = new ModelNilai();

        $this->jadwal->insert([
            'id_nilai' => $this->request->getVar('id_nilai'),
            'NISN' => $this->request->getVar('NISN'),
            'id_mapel' => $this->request->getVar('mapel'),
            'semester' => $this->request->getVar('Semester'),
            'T1' => $this->request->getVar('T1'),
            'T2' => $this->request->getVar('T2'),
            'UTS' => $this->request->getVar('UTS'),
            'T3' => $this->request->getVar('T3'),
            'T4' => $this->request->getVar('T4'),
            'UAS' => $this->request->getVar('UAS')
        ]);
        // dd($this->request->getVar());

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/guru/nilai');
    }
}

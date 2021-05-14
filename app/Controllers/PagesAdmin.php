<?php

namespace App\Controllers;

class PagesAdmin extends BaseController
{
    // ADMIN
    public function detailPresensiAdmin()
    {
        $data['judul'] = 'Detail Presensi | SINOFAK';
        $data['content'] = 'detailPresensi';
        return view('admin/detailPresensi', $data);
    }
    public function indexAdmin()
    {
        $data['judul'] = 'Home | SINOFAK';
        $data['content'] = 'index';
        return view('admin/index', $data);
    }
    public function jadwalAdmin()
    {
        $data['judul'] = 'Jadwal | SINOFAK';
        $data['content'] = 'jadwal';
        return view('admin/jadwal', $data);
    }
    public function nilaiAdmin()
    {
        $data['judul'] = 'Nilai | SINOFAK';
        $data['content'] = 'nilai';
        return view('admin/nilai', $data);
    }
    public function nilaiKelasAdmin()
    {
        $data['judul'] = 'Nilai | SINOFAK';
        $data['content'] = 'nilaiKelas';
        return view('admin/nilaiKelas', $data);
    }
    public function presensiAdmin()
    {
        $data['judul'] = 'Presensi | SINOFAK';
        $data['content'] = 'presensi';
        return view('admin/presensi', $data);
    }
    public function detailGuruAdmin()
    {
        $data['judul'] = 'Detail Guru | SINOFAK';
        $data['content'] = 'detailGuru';
        return view('admin/detailGuru', $data);
    }
    public function detailSiswaAdmin()
    {
        $data['judul'] = 'Detail Siswa | SINOFAK';
        $data['content'] = 'detailSiswa';
        return view('admin/detailSiswa', $data);
    }
    public function editGuruAdmin()
    {
        $data['judul'] = 'Edit Guru | SINOFAK';
        $data['content'] = 'editGuru';
        return view('admin/editGuru', $data);
    }
    public function editJadwalAdmin()
    {
        $data['judul'] = 'Edit Jadwal | SINOFAK';
        $data['content'] = 'editJadwal';
        return view('admin/editJadwal', $data);
    }
    public function editSiswaAdmin()
    {
        $data['judul'] = 'Edit Siswa | SINOFAK';
        $data['content'] = 'editSiswa';
        return view('admin/editSiswa', $data);
    }
    public function layananAdmin()
    {
        $data['judul'] = 'Layanan | SINOFAK';
        $data['content'] = 'layanan';
        return view('admin/layanan', $data);
    }
    public function pdg()
    {
        $data['judul'] = 'Data Guru | SINOFAK';
        $data['content'] = 'pdg';
        return view('admin/pdg', $data);
    }
    public function pds()
    {
        $data['judul'] = 'Data Siswa | SINOFAK';
        $data['content'] = 'pds';
        return view('admin/pds', $data);
    }
    public function tambahGuruAdmin()
    {
        $data['judul'] = 'Tambah Guru | SINOFAK';
        $data['content'] = 'tambahGuru';
        return view('admin/tambahGuru', $data);
    }
    public function tambahJadwalAdmin()
    {
        $data['judul'] = 'Tambah Jadwal | SINOFAK';
        $data['content'] = 'tambahJadwal';
        return view('admin/tambahJadwal', $data);
    }
    public function tambahSiswaAdmin()
    {
        $data['judul'] = 'Tambah Siswa | SINOFAK';
        $data['content'] = 'tambahSiswa';
        return view('admin/tambahSiswa', $data);
    }
}

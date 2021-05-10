<?php

namespace App\Controllers;

class PagesAdmin extends BaseController
{
    // ADMIN
    public function detailPresensiGuru()
    {
        return view('admin/detailPresensi');
    }
    public function indexGuru()
    {
        return view('admin/index');
    }
    public function jadwalGuru()
    {
        return view('admin/jadwal');
    }
    public function nilaiGuru()
    {
        return view('admin/nilai');
    }
    public function nilaiKelasGuru()
    {
        return view('admin/nilaiKelas');
    }
    public function presensiGuru()
    {
        return view('admin/presensi');
    }
    public function detailGuru()
    {
        $this->load->view('admin/detailGuru');
    }
    public function detailSiswa()
    {
        $this->load->view('admin/detailSiswa');
    }
    public function editGuru()
    {
        $this->load->view('admin/editGuru');
    }
    public function editJadwal()
    {
        $this->load->view('admin/editJadwal');
    }
    public function editSiswa()
    {
        $this->load->view('admin/editSiswa');
    }
    public function layanan()
    {
        $this->load->view('admin/layanan');
    }
    public function pdg()
    {
        $this->load->view('admin/pdg');
    }
    public function pds()
    {
        $this->load->view('admin/pds');
    }
    public function tambahGuru()
    {
        $this->load->view('admin/tambahGuru');
    }
    public function tambahJadwal()
    {
        $this->load->view('admin/tambahJadwal');
    }
    public function tambahSiswa()
    {
        $this->load->view('admin/tambahSiswa');
    }
}

<?php

namespace App\Controllers;

class PagesSiswa extends BaseController
{
	// public function index()
	// {
	// 	return view('welcome_message');
	// }
	public function login()
	{
		return view('login');
	}

	// SISWA
	public function indexSiswa()
	{
		return view('siswa/Index');
	}
	public function jadwalSiswa()
	{
		return view('siswa/jadwal');
	}
	public function layananSiswa()
	{
		return view('siswa/layanan');
	}
	public function nilaiSiswa()
	{
		return view('siswa/nilai');
	}
	public function presensiSiswa()
	{
		return view('siswa/presensi');
	}
}

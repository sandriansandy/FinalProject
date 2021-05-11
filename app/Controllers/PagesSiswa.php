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
		$data['content'] = 'index';
		return view('siswa/Index', $data);
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

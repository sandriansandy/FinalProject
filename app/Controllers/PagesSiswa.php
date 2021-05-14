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
		$data['judul'] = 'Home | SINOFAK';
		$data['content'] = 'index';
		return view('siswa/Index', $data);
	}
	public function jadwalSiswa()
	{
		$data['judul'] = 'Jadwal Pelajaran | SINOFAK';
		$data['content'] = 'jadwal';
		return view('siswa/jadwal', $data);
	}
	public function layananSiswa()
	{
		$data['judul'] = 'Layanan | SINOFAK';
		$data['content'] = 'layanan';
		return view('siswa/layanan', $data);
	}
	public function nilaiSiswa()
	{
		$data['judul'] = 'Nilai | SINOFAK';
		$data['content'] = 'nilai';
		return view('siswa/nilai', $data);
	}
	public function presensiSiswa()
	{
		$data['judul'] = 'Presensi | SINOFAK';
		$data['content'] = 'presensi';
		return view('siswa/presensi', $data);
	}
}

<?php

namespace App\Controllers;

use App\Models\ModelSiswa;
use App\Models\ModelBerkas;
use App\Models\ModelLayanan;
use App\Models\ModelJadwal;
use App\Models\ModelKelas;
use App\Models\ModelPresensi;
use App\Models\ModelDetPresensi;

class PagesSiswa extends BaseController
{
	public function indexSiswa()
	{
		$this->siswa = new ModelSiswa();
		$data['judul'] = 'Home | SINOFAK';
		$data['content'] = 'index';
		$data['identitas'] = $this->siswa->getSiswaAdmin(session('username'));
		return view('siswa/Index', $data);
	}
	public function jadwalSiswa()
	{
		$this->jadwal = new ModelJadwal();
		$this->siswa = new ModelSiswa();
		$kelas = $this->siswa->getSiswaAdmin(session('username'));
		$data['jadwal'] = $this->jadwal->getJadwalSiswa($kelas['id_kelas']);
		$data['judul'] = 'Jadwal | SINOFAK';
		$data['content'] = 'jadwal';
		return view('siswa/jadwal', $data);
		// dd($data);
	}
	public function tambahPengajuan()
	{
		$this->berkas = new ModelBerkas();
		$data['judul'] = 'Tambah Pengajuan | SINOFAK';
		$data['content'] = 'tambahPengajuan';
		$data['berkas'] = $this->berkas->getBerkas();
		return view('siswa/tambahPengajuan', $data);
	}
	public function riwayatSiswa()
	{
		$this->layanan = new ModelLayanan();
		$data['judul'] = 'Riwayat Pengajuan | SINOFAK';
		$data['content'] = 'riwayatSiswa';
		$data['layanan'] = $this->layanan->getLayanan();
		return view('siswa/riwayatSiswa', $data);
	}
	public function downloadBerkas($id)
	{
		$this->berkas = new ModelBerkas();
		$data = $this->berkas->getBerkas($id);
		return $this->response->download('assets/file/template/' . $data['nama_file'], NULL);
	}
	public function simpanPengajuan()
	{
		$this->berkas = new ModelLayanan();
		$berkas = $this->request->getFile('form');
		if ($berkas->getError() == 4) {
			session()->setFlashdata('error', 'Silahkan Upload Berkas');
			return redirect()->to('/siswa/pengajuan');
		} else {
			$ext = $berkas->getClientExtension();
			$namaFile = $this->request->getVar('berkas') . '_' . $this->request->getVar('nisn') . '_' . $this->request->getVar('tanggal') . '.' . $ext;
			$berkas->move('assets/file/riwayat', $namaFile);
		};
		$this->berkas->insert([
			'NISN' => $this->request->getVar('nisn'),
			'tanggal' => $this->request->getVar('tanggal'),
			'form' => $namaFile,
			'id_berkas' => $this->request->getVar('berkas')
		]);
		session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
		return redirect()->to('/siswa/pengajuan');
	}
	public function nilaiSiswa()
	{
		$data['judul'] = 'Nilai | SINOFAK';
		$data['content'] = 'nilai';
		return view('siswa/nilai', $data);
	}
	public function presensiSiswa()
	{
		$this->detPresensi = new ModelDetPresensi();
		$data['judul'] = 'Presensi | SINOFAK';
		$data['content'] = 'presensi';
		$data['jadwal'] = $this->detPresensi->getJadwal(session('username'));
		$data['present'] = $this->detPresensi;
		// $data['excuse'] = $this->detPresensi->getExcuse(session('username'))->resultID->num_rows;
		// $data['absent'] = $this->detPresensi->getAbstain(session('username'))->resultID->num_rows;
		return view('siswa/presensi', $data);
	}
}

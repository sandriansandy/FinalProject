<?php

namespace App\Controllers;

use App\Models\ModelGuru;
use App\Models\ModelSiswa;
use App\Models\ModelKelas;
use App\Models\ModelMapel;
use App\Models\ModelJadwal;
use App\Models\ModelLayanan;
use App\Models\ModelBerkas;

class PagesAdmin extends BaseController
{
    // index
    public function indexAdmin()
    {
        $data['judul'] = 'Home | SINOFAK';
        $data['content'] = 'index';
        return view('admin/index', $data);
    }
    //Menu Siswa
    public function pds()
    {
        $this->siswa = new ModelSiswa();
        $data['judul'] = 'Data Siswa | SINOFAK';
        $data['content'] = 'pds';
        $data['identitas'] = $this->siswa->getSiswaAdmin();
        return view('admin/pds', $data);
    }
    public function detailSiswaAdmin($NISN)
    {
        $this->siswa = new ModelSiswa();
        $data['judul'] = 'Detail Siswa | SINOFAK';
        $data['content'] = 'detailSiswa';
        $data['identitas'] = $this->siswa->getSiswaAdmin($NISN);
        return view('admin/detailSiswa', $data);
    }
    public function tambahSiswaAdmin()
    {
        $this->kelas = new ModelKelas();
        $data['judul'] = 'Tambah Siswa | SINOFAK';
        $data['content'] = 'tambahSiswa';
        $data['kelas'] = $this->kelas->getKelasAdmin();
        return view('admin/tambahSiswa', $data);
    }
    public function simpanSiswa()
    {
        $this->siswa = new ModelSiswa();

        $foto = $this->request->getFile('foto');
        if ($foto->getError() == 4) {
            $namaFoto = 'user.png';
        } else {
            $ext = $foto->getClientExtension();
            $namaFoto = $this->request->getVar('NISN') . '.' . $ext;
            $foto->move('assets/img/profil_siswa', $namaFoto);
        };
        $this->siswa->insert([
            'NISN' => $this->request->getVar('NISN'),
            'Nama' => $this->request->getVar('Nama'),
            'TTL' => $this->request->getVar('TTL'),
            'Angkatan' => $this->request->getVar('Angkatan'),
            'Alamat' => $this->request->getVar('Alamat'),
            'tgl_masuk' => $this->request->getVar('Tgl_Masuk'),
            'foto' => $namaFoto,
            'id_kelas' => $this->request->getVar('kelas'),
            'jenis_kelamin' => $this->request->getVar('gender'),
            'password' => md5($this->request->getVar('NISN'))
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/admin/pds');
    }
    public function editSiswaAdmin()
    {
        $data['judul'] = 'Edit Siswa | SINOFAK';
        $data['content'] = 'editSiswa';
        return view('admin/editSiswa', $data);
    }
    public function hapusSiswaAdmin($NISN)
    {
        $this->siswa = new ModelSiswa();
        $ambil = $this->siswa->find($NISN);
        if ($ambil['foto'] != 'user.png') {
            unlink('assets/img/profil_siswa/' . $ambil['foto']);
        }
        $this->siswa->delete($NISN);

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/pds');
    }

    //Menu Guru
    public function pdg()
    {
        $this->guru = new ModelGuru();
        $data['judul'] = 'Data Guru | SINOFAK';
        $data['content'] = 'pdg';
        $data['identitas'] = $this->guru->getGuruAdmin();
        return view('admin/pdg', $data);
    }
    public function detailGuruAdmin($NIP)
    {
        $this->guru = new ModelGuru();
        $data['judul'] = 'Detail Guru | SINOFAK';
        $data['content'] = 'detailGuru';
        $data['identitas'] = $this->guru->getGuruAdmin($NIP);
        return view('admin/detailGuru', $data);
    }
    public function tambahGuruAdmin()
    {
        $this->mapel = new ModelMapel();
        $data['judul'] = 'Tambah Guru | SINOFAK';
        $data['content'] = 'tambahGuru';
        $data['mapel'] = $this->mapel->getMapelAdmin();
        return view('admin/tambahGuru', $data);
    }
    public function editGuruAdmin()
    {
        $data['judul'] = 'Edit Guru | SINOFAK';
        $data['content'] = 'editGuru';
        return view('admin/editGuru', $data);
    }
    public function simpanGuru()
    {
        $this->guru = new ModelGuru();
        $foto = $this->request->getFile('foto');
        if ($foto->getError() == 4) {
            $namaFoto = 'user.png';
        } else {
            $ext = $foto->getClientExtension();
            $namaFoto = $this->request->getVar('NIP') . '.' . $ext;
            $foto->move('assets/img/profil_guru', $namaFoto);
        };

        $this->guru->insert([
            'NIP' => $this->request->getVar('NIP'),
            'Nama' => $this->request->getVar('Nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'TTL' => $this->request->getVar('TTL'),
            'Alamat' => $this->request->getVar('Alamat'),
            'tgl_masuk' => $this->request->getVar('tgl_masuk'),
            'id_mapel' => $this->request->getVar('mapel'),
            'foto' => $namaFoto,
            'no_hp' => $this->request->getVar('no_hp'),
            'password' => md5($this->request->getVar('NIP'))
        ]);
        // dd($this->request->getVar());

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/admin/pdg');
    }
    public function hapusGuruAdmin($NIP)
    {
        $this->guru = new ModelGuru();
        $ambil = $this->guru->find($NIP);
        if ($ambil['foto'] != 'user.png') {
            unlink('assets/img/profil_guru/' . $ambil['foto']);
        }
        $this->siswa->delete($NIP);

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/pdg');
    }

    //Menu Akademik
    //Jadwal
    public function jadwalAdmin()
    {
        $this->jadwal = new ModelJadwal();
        $data['judul'] = 'Jadwal | SINOFAK';
        $data['content'] = 'jadwal';
        $data['jadwal'] = $this->jadwal->getJadwalAdmin();
        //dd($data);
        return view('admin/jadwal', $data);
    }
    public function editJadwalAdmin()
    {
        $data['judul'] = 'Edit Jadwal | SINOFAK';
        $data['content'] = 'editJadwal';
        return view('admin/editJadwal', $data);
    }
    public function tambahJadwalAdmin()
    {
        $this->mapel = new ModelMapel();
        $this->kelas = new ModelKelas();
        $this->guru = new ModelGuru();
        $data['judul'] = 'Tambah Jadwal | SINOFAK';
        $data['content'] = 'tambahJadwal';
        $data['mapel'] = $this->mapel->getMapelAdmin();
        $data['kelas'] = $this->kelas->getKelasAdmin();
        $data['identitas'] = $this->guru->getGuruAdmin();
        return view('admin/tambahJadwal', $data);
    }
    public function simpanJadwal()
    {
        $this->jadwal = new ModelJadwal();
        $this->guru = new ModelGuru();
        $data = $this->guru->getGuruAdmin($this->request->getVar('Nama'));
        $this->jadwal->insert([
            'id_jadwal' => $this->request->getVar('id_jadwal'),
            'id_mapel' => $data['id_mapel'],
            'id_kelas' => $this->request->getVar('kelas'),
            'NIP' => $this->request->getVar('Nama'),
            'hari' => $this->request->getVar('hari'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'jam_selesai' => $this->request->getVar('jam_selesai')
        ]);
        // dd($this->request->getVar());
        
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/admin/jadwal');
    }
    public function hapusJadwalAdmin($jadwal)
    {
        $this->jadwal = new ModelJadwal();
        $this->jadwal->delete($jadwal);

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/jadwal');
    }
    //Kelas
    public function kelas()
    {
        $this->kelas = new ModelKelas();
        $data['judul'] = 'Kelas | SINOFAK';
        $data['content'] = 'kelas';
        $data['kelas'] = $this->kelas->getKelasAdmin();
        return view('admin/kelas', $data);
    }
    public function tambahKelasAdmin()
    {
        $this->kelas = new ModelKelas();
        $data['content'] = 'tambahKelas';
        $data['kelas'] = $this->kelas->getKelasAdmin();
        return view('admin/tambahKelas', $data);
    }
    public function simpanKelas()
    {
        $this->kelas = new ModelKelas();
        $this->kelas->insert([
            'id_kelas' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('kelas'),
            'tahun_ajaran' => $this->request->getVar('tahun_ajaran')
            ]);            
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/admin/kelas');
    }
    public function hapusKelasAdmin($kelas)
    {
        $this->kelas = new ModelKelas();
        $this->kelas->delete($kelas);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/kelas');
    }
    //Mapel
    public function mapel()
    {
        $this->mapel = new ModelMapel();
        $data['judul'] = 'Mata Pelajaran | SINOFAK';
        $data['content'] = 'mapel';
        $data['mapel'] = $this->mapel->getMapelAdmin();
        return view('admin/mapel', $data);
    }
    public function tambahMapelAdmin()
    {
        $this->mapel = new ModelMapel();
        $data['content'] = 'tambahMapel';
        $data['mapel'] = $this->mapel->getMapel();
        return view('admin/tambahMapel', $data);
    }
    public function simpanMapel()
    {
        $this->Mapel = new ModelMapel();
        $this->Mapel->insert([
            'id_mapel' => $this->request->getVar('id_mapel'),
            'Nama_mapel' => $this->request->getVar('Nama_mapel'),
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/admin/mapel');
    }
    public function hapusMapelAdmin($mapel)
    {
        $this->mapel = new ModelMapel();
        $this->mapel->delete($mapel);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/mapel');
    }

    //Menu presensi
    public function presensiAdmin()
    {
        $data['judul'] = 'Presensi | SINOFAK';
        $data['content'] = 'presensi';
        return view('admin/presensi', $data);
    }
    public function detailPresensiAdmin()
    {
        $data['judul'] = 'Detail Presensi | SINOFAK';
        $data['content'] = 'detailPresensi';
        return view('admin/detailPresensi', $data);
    }
    
    //Menu Nilai
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
 
    //Menu Layanan
    public function RiwayatLayanan()
    {
        $this->layanan = new ModelLayanan();
        $data['judul'] = 'Layanan | SINOFAK';
        $data['content'] = 'layanan';
        $data['layanan'] = $this->layanan->getLayanan();
        return view('admin/layanan', $data);
    }
    public function Berkas()
    {
        $this->berkas = new ModelBerkas();
        $data['judul'] = 'Berkas | SINOFAK';
        $data['content'] = 'berkas';
        $data['berkas'] = $this->berkas->getBerkas();
        return view('admin/berkas',$data);
    }
    public function SimpanBerkas()
    {
        $this->berkas = new ModelBerkas();
        $berkas = $this->request->getFile('template');
        if ($berkas->getError() == 4) {
            session()->setFlashdata('error', 'Silahkan Upload Template');
            return redirect()->to('/admin/berkas');            
        } else {
            $ext = $berkas->getClientExtension();
            $namaFile = $this->request->getVar('form') . '.' . $ext;
            $berkas->move('assets/file/template', $namaFile);
        };
        $this->berkas->insert([
            'id_berkas' => $this->request->getVar('kode'),
            'jenis_berkas' => $this->request->getVar('form'),
            'nama_file' => $namaFile
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/admin/berkas');
    }
    public function downloadBerkas($id)
    {
        $this->berkas = new ModelBerkas();
        $data= $this->berkas->getBerkas($id);
        return $this->response->download('assets/file/template/'.$data['file'],NULL);
    }
    public function HapusBerkas($id)
    {
        $this->berkas = new ModelBerkas();
        $ambil = $this->berkas->getBerkas($id);
        unlink('assets/file/template/' . $ambil['0']['nama_file']);
        $this->berkas->delete($ambil['0']['id_berkas']);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/admin/berkas');
    }
}
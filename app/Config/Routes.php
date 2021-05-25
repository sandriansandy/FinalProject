<?php

namespace Config;

use CodeIgniter\Commands\Utilities\Routes;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('Login');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

// LOGIN
$routes->get('/', 'Login::Login');
$routes->post('/prosesLogin', 'Login::prosesLogin');
$routes->get('/gantiPassword', 'Login::gantiPassword');
$routes->post('/simpanPassword', 'Login::simpanPassword');
$routes->get('/logout', 'Login::Logout');

// HALAMAN SISWA
$routes->get('/siswa', 'PagesSiswa::IndexSiswa');
$routes->get('/siswa/jadwal', 'PagesSiswa::jadwalSiswa');
$routes->get('/siswa/layanan', 'PagesSiswa::layananSiswa');
$routes->get('/siswa/pengajuan', 'PagesSiswa::tambahPengajuan');
$routes->post('/siswa/simpanPengajuan', 'PagesSiswa::simpanPengajuan');
$routes->get('/siswa/download/(:any)', 'PagesSiswa::downloadBerkas/$1');
$routes->get('/siswa/nilai', 'PagesSiswa::nilaiSiswa');
$routes->get('/siswa/presensi', 'PagesSiswa::presensiSiswa');
$routes->get('/siswa/riwayatLayanan', 'PagesSiswa::riwayatSiswa');

// HALAMAN GURU
$routes->get('/guru', 'PagesGuru::IndexGuru');
$routes->get('/guru/detail', 'PagesGuru::detailPresensiGuru');
$routes->get('/guru/jadwal', 'PagesGuru::jadwalGuru');
$routes->get('/guru/hapusJadwal/(:any)', 'PagesGuru::hapusJadwalGuru/$1');
$routes->get('/guru/nilai', 'PagesGuru::nilaiGuru');
$routes->get('/guru/simpanNilai', 'PagesGuru::simpanNilai');
$routes->get('/guru/tambahNilaiGuru', 'PagesGuru::tambahNilaiGuru');
$routes->get('/guru/nilaiKelas', 'PagesGuru::nilaiKelasGuru');
$routes->get('/guru/presensi', 'PagesGuru::presensiGuru');
$routes->get('/guru/detailPresensi/(:any)', 'PagesGuru::detailPresensiGuru/$1');

// HALAMAN ADMIN
$routes->get('/admin', 'PagesAdmin::IndexAdmin');

$routes->get('/admin/pds', 'PagesAdmin::pds');
$routes->get('/admin/detailSiswa/(:any)', 'PagesAdmin::detailSiswaAdmin/$1');
$routes->get('/admin/tambahSiswa', 'PagesAdmin::tambahSiswaAdmin');
$routes->get('/admin/editSiswa/(:any)', 'PagesAdmin::editSiswaAdmin/$1');
$routes->post('/admin/updateSiswa/(:any)', 'PagesAdmin::updateSiswaAdmin/$1');
$routes->post('/admin/simpanSiswa', 'PagesAdmin::simpanSiswa');
$routes->get('/admin/hapusSiswa/(:any)', 'PagesAdmin::hapusSiswaAdmin/$1');

$routes->get('/admin/pdg', 'PagesAdmin::pdg');
$routes->get('/admin/detailGuru/(:any)', 'PagesAdmin::detailGuruAdmin/$1');
$routes->get('/admin/tambahGuru', 'PagesAdmin::tambahGuruAdmin');
$routes->get('/admin/editGuru/(:any)', 'PagesAdmin::editGuruAdmin/$1');
$routes->post('/admin/updateGuru/(:any)', 'PagesAdmin::updateGuruAdmin/$1');
$routes->post('/admin/simpanGuru', 'PagesAdmin::simpanGuru');
$routes->get('/admin/hapusGuru/(:any)', 'PagesAdmin::hapusGuruAdmin/$1');

$routes->get('/admin/jadwal', 'PagesAdmin::jadwalAdmin');
$routes->get('/admin/tambahJadwalAdmin', 'PagesAdmin::tambahJadwalAdmin');
$routes->get('/admin/editJadwal/(:any)', 'PagesAdmin::editJadwalAdmin/$1');
$routes->post('/admin/updateJadwal/(:any)', 'PagesAdmin::updateJadwalAdmin/$1');
$routes->post('/admin/simpanJadwal', 'PagesAdmin::simpanJadwal');
$routes->get('/admin/hapusJadwal/(:any)', 'PagesAdmin::hapusJadwalAdmin/$1');

$routes->get('/admin/kelas/', 'PagesAdmin::kelas');
$routes->get('/admin/tambahKelas', 'PagesAdmin::tambahKelasAdmin');
$routes->post('/admin/simpanKelas', 'PagesAdmin::simpanKelas');
$routes->get('/admin/editKelas/(:any)', 'PagesAdmin::editKelasAdmin/$1');
$routes->post('/admin/updateKelas/(:any)', 'PagesAdmin::updateKelasAdmin/$1');
$routes->get('/admin/hapusKelas/(:any)', 'PagesAdmin::hapusKelasAdmin/$1');

$routes->get('/admin/mapel/', 'PagesAdmin::mapel');
$routes->get('/admin/tambahMapel', 'PagesAdmin::tambahMapelAdmin');
$routes->post('/admin/simpanMapel', 'PagesAdmin::simpanMapel');
$routes->get('/admin/editMapel/(:any)', 'PagesAdmin::editMapelAdmin/$1');
$routes->post('/admin/updateMapel/(:any)', 'PagesAdmin::updateMapelAdmin/$1');
$routes->get('/admin/hapusMapel/(:any)', 'PagesAdmin::hapusMapelAdmin/$1');

$routes->get('/admin/nilai/', 'PagesAdmin::nilaiAdmin');
$routes->get('/admin/nilaiKelas', 'PagesAdmin::nilaiKelasAdmin');

$routes->get('/admin/presensi', 'PagesAdmin::presensiAdmin');
$routes->post('/admin/tambahPresensi', 'PagesAdmin::tambahPresensi');
$routes->get('/admin/detailPresensi/(:any)', 'PagesAdmin::detailPresensiAdmin/$1');
$routes->get('/admin/hapusPresensi/(:any)', 'PagesAdmin::hapusPresensiAdmin/$1');
$routes->get('/admin/present/(:any)/(:any)', 'PagesAdmin::setPresensi/$1/$2');

$routes->get('/admin/riwayatLayanan', 'PagesAdmin::RiwayatLayanan');
$routes->get('/admin/berkas', 'PagesAdmin::Berkas');
$routes->post('/admin/simpanBerkas', 'PagesAdmin::SimpanBerkas');
$routes->get('/admin/hapusBerkas(:any)', 'PagesAdmin::HapusBerkas/$1');
$routes->get('/admin/download/(:any)', 'PagesAdmin::downloadBerkas/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

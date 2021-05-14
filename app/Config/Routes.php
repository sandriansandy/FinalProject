<?php

namespace Config;

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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
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
$routes->get('/login', 'Login::Login');
// HALAMAN SISWA
$routes->get('/siswa', 'PagesSiswa::IndexSiswa');
$routes->get('/siswa/jadwal', 'PagesSiswa::jadwalSiswa');
$routes->get('/siswa/layanan', 'PagesSiswa::layananSiswa');
$routes->get('/siswa/nilai', 'PagesSiswa::nilaiSiswa');
$routes->get('/siswa/presensi', 'PagesSiswa::presensiSiswa');
// HALAMAN GURU
$routes->get('/guru', 'PagesGuru::IndexGuru');
$routes->get('/guru/detail', 'PagesGuru::detailPresensiGuru');
$routes->get('/guru/jadwal', 'PagesGuru::jadwalGuru');
$routes->get('/guru/nilai', 'PagesGuru::nilaiGuru');
$routes->get('/guru/nilaiKelas', 'PagesGuru::nilaiKelasGuru');
$routes->get('/guru/presensi', 'PagesGuru::presensiGuru');
// HALAMAN ADMIN
$routes->get('/admin', 'PagesAdmin::IndexAdmin');
$routes->get('/admin/detailPresensi', 'PagesAdmin::detailPresensiAdmin');
$routes->get('/admin/jadwal', 'PagesAdmin::jadwalAdmin');
$routes->get('/admin/nilai/', 'PagesAdmin::nilaiAdmin');
$routes->get('/admin/nilaiKelas', 'PagesAdmin::nilaiKelasAdmin');
$routes->get('/admin/presensi', 'PagesAdmin::presensiAdmin');
$routes->get('/admin/detailGuru', 'PagesAdmin::detailGuruAdmin');
$routes->get('/admin/detailSiswa', 'PagesAdmin::detailSiswaAdmin');
$routes->get('/admin/editGuru', 'PagesAdmin::editGuruAdmin');
$routes->get('/admin/editJadwal', 'PagesAdmin::editJadwalAdmin');
$routes->get('/admin/editSiswa', 'PagesAdmin::editSiswaAdmin');
$routes->get('/admin/layanan', 'PagesAdmin::layananAdmin');
$routes->get('/admin/pdg', 'PagesAdmin::pdg');
$routes->get('/admin/pds', 'PagesAdmin::pds');
$routes->get('/admin/tambahGuru', 'PagesAdmin::tambahGuruAdmin');
$routes->get('/admin/tambahJadwal', 'PagesAdmin::tambahJadwalAdmin');
$routes->get('/admin/tambahSiswa', 'PagesAdmin::tambahSiswaAdmin');
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

<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::index');
$routes->get('/profil', 'Home::profil');

$routes->add('/dashboard', 'Auth::login_process'); // Ganti dengan rute halaman staf
$routes->get('/register', 'Auth::register');
$routes->get('/dashboard', 'Dashboard::index');
$routes->post('/register_process', 'Auth::register_process');
$routes->post('/login_process','Auth::login_process');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/logout', 'Auth::logout');
//permohonan
$routes->get('/permohonan', 'Permohonan::index');
$routes->post('/permohonan','Permohonan::permohonan');
$routes->get('/laporan_permohonan/printAll', 'LaporanPermohonan::printAll');

//tambah and update ,delete permohonan 
$routes->post('/permohonan/Permohonan/tambahdata','Permohonan::tambahdata');
$routes->post('permohonan/Permohonan/updatedata', 'Permohonan::updatedata');
$routes->get('permohonan/Permohonan/deleteData/(:num)', 'Permohonan::deleteData/$1');
$routes->add('/permohonan/Permohonan', 'Permohonan::permo_view'); // Ganti dengan rute halaman klien
$routes->add('/akta/Akta', 'Akta::akta_view'); // Ganti dengan rute halaman klien

//permohonan
$routes->get('/laporan_permohonan', 'LaporanPermohonan::index');
$routes->post('/laporan_permohonan/search', 'LaporanPermohonan::search');

//print lap permohonan

$routes->get('/laporan_permohonan/print/(:num)', 'LaporanPermohonan::print/$1');
//data permohonan
$routes->get('/data_permohonan', 'DataPermohonan::index');

//akta
$routes->get('/akta', 'Akta::index');
$routes->post('/akta', 'Akta::index');
//akta per klien
$routes->get('/akta_perklien', 'AktaPerklien::index');
$routes->get('akta_perklien/printAll', 'AktaPerklien::printAll');
$routes->get('/akta/getJenisAkta', 'Akta::getJenisAkta');
$routes->post('/akta/Akta/tambahdata','Akta::tambahdata');
$routes->post('/akta/Akta/updatedata', 'Akta::updatedata');
$routes->get('/akta/Akta/deleteData/(:num)', 'Akta::deleteData/$1');
$routes->get('/laporan_akta', 'LaporanAkta::index');
$routes->get('laporan_akta/printAll', 'LaporanAkta::printAll');
$routes->post('/laporan_akta/search', 'LaporanAkta::search');


//klien
$routes->get('klien', 'Klien::index');

//tambah and update ,delete klien
$routes->post('/klien/Klien/tambahdata','Klien::tambahdata');
$routes->post('klien/Klien/updatedata', 'Klien::updatedata');
$routes->get('klien/Klien/deleteData/(:num)', 'Klien::deleteData/$1');
//data klien
$routes->get('/data_klien', 'DataClien::index');
//laporan klien
$routes->get('/laporan_klien', 'LaporanKlien::index');
//print laporan klien
$routes->get('laporan_klien/printAll', 'LaporanKlien::printAll');

//arsip dan crud
$routes->get('arsip', 'Arsip::index');
$routes->post('arsip/getLaciByNamaKlien', 'ArsipController::getLaciByNamaKlien');
$routes->post('arsip/Arsip/tambahdata','Arsip::tambahdata');
$routes->post('arsip/Arsip/updatedata','Arsip::updatedata');
$routes->get('arsip/Arsip/deleteData/(:num)', 'Arsip::deleteData/$1');
//laporan arsip
$routes->get('/laporan_arsip', 'LaporanArsip::index');
$routes->get('laporan_arsip/printAll', 'LaporanArsip::printAll');
$routes->post('/laporan_arsip/search', 'LaporanArsip::search');

//arsip per posisi
$routes->get('/arsip_perposisi', 'ArsipPerposisi::index');
$routes->get('arsip_perposisi/printAll', 'ArsipPerposisi::printAll');

//laci
$routes->get('/laci', 'Laci::index');
$routes->get('laci/printAll', 'Laci::printAll');



//halaman klien 

$routes->add('/klien/dashboard', 'DashboardKlien::index'); // Ganti dengan rute halaman klien
$routes->add('/klien/profil', 'ProfilKlien::index'); // Ganti dengan rute halaman klien
$routes->add('/klien/isi_klien', 'DashboardKlien::isi_klien'); // Ganti dengan rute halaman klien
$routes->add('/klien/lihat_data', 'DashboardKlien::lihat_data'); 
$routes->post('klien/isi_klien/save', 'FormKlien::save');
$routes->add('/klien/permo_klien', 'PermoKlien::permo_klien_view'); // Ganti dengan rute halaman klien
$routes->post('klien/permo_klien/save_permo', 'PermoKlien::save_permo');

$routes->get('klien/akta_klien', 'AktaKlien::akta_klien_view');
$routes->post('klien/akta_klien/save_akta', 'AktaKlien::save_akta');

$routes->get('klien/arsip_klien', 'ArsipKlien::arsip_klien_view');
$routes->post('klien/arsip_klien/save_arsip', 'ArsipKlien::save_arsip');


$routes->get('profil', 'Home::profil');
$routes->post('home/updateProfile', 'Home::updateProfile');
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

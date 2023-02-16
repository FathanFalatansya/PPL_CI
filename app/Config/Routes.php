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
// $routes->get('/', 'Home::index');

$routes->get('/', "c_Home::home");
$routes->get('info', "c_Info::informasi");

$routes->get('login', "c_login::index");
$routes->post('login', "c_login::do_login");
$routes->get('logout', "c_login::logout");

// Route Mahasiswa
$routes->get('/Mahasiswa', 'c_mahasiswa::view_mahasiswa_display');
$routes->get('/Mahasiswa/Detail/(:num)', 'c_mahasiswa::detail_mahasiswa/$1');
$routes->get('/Mahasiswa/Create', 'c_mahasiswa::create');
$routes->get('/Mahasiswa/Edit/(:num)', 'c_mahasiswa::edit/$1');
$routes->post('/Mahasiswa/Update/(:num)', 'c_mahasiswa::update/$1');
$routes->get('/Mahasiswa/Delete/(:num)', 'c_mahasiswa::delete/$1');
$routes->post('/Mahasiswa/Store', 'c_mahasiswa::store');

// Route Pegawai
$routes->get('/Pegawai', 'c_pegawai::view_pegawai_display');
$routes->get('/Pegawai/Create', 'c_pegawai::create');
$routes->get('/Pegawai/Detail/(:num)', 'c_pegawai::detail_pegawai/$1');
$routes->get('/Pegawai/Edit/(:num)', 'c_pegawai::edit/$1');
$routes->post('/Pegawai/Update/(:num)', 'c_pegawai::update/$1');
$routes->post('/Pegawai/Store', 'c_pegawai::store');
$routes->get('/Pegawai/Delete/(:num)', 'c_pegawai::delete/$1');


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

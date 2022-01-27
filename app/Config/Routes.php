<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('reg', 'Home::reg');
$routes->get('reg-mi', 'Home::reg_mi');
$routes->get('reg-ra', 'Home::reg_ra');
$routes->get('reg-mts-putra', 'Home::reg_mts_putra');
$routes->get('reg-mts-putri', 'Home::reg_mts_putri');
$routes->get('reg-ma-putra', 'Home::reg_ma_putra');
$routes->get('reg-ma-putri', 'Home::reg_ma_putri');


/* santri
==================================*/
// santri
$routes->get('santri','SantriController::index');
$routes->get('santri/create','SantriController::create');
$routes->post('santri/create-action','SantriController::create_action');
$routes->get('santri/update/(:any)','SantriController::update/$1');
$routes->add('santri/update-action/(:any)','SantriController::update_action/$1');
$routes->get('santri/dashboard/(:num)','SantriController::dashboard/$1');

// ayah
$routes->get('ayah','AyahController::index');
$routes->get('ayah/create','AyahController::create');
$routes->post('ayah/create-action','AyahController::create_action');
$routes->get('ayah/update/(:any)','AyahController::update/$1');
$routes->add('ayah/update-action/(:any)','AyahController::update_action/$1');

// ibu
$routes->get('ibu','IbuController::index');
$routes->get('ibu/create','IbuController::create');
$routes->post('ibu/create-action','IbuController::create_action');
$routes->get('ibu/update/(:any)','IbuController::update/$1');
$routes->add('ibu/update-action/(:any)','IbuController::update_action/$1');

// sekolah asal
$routes->get('sekolah-asal','SekolahAsalController::index');
$routes->get('sekolah-asal/create','SekolahAsalController::create');
$routes->post('sekolah-asal/create-action','SekolahAsalController::create_action');
$routes->get('sekolah-asal/update/(:any)','SekolahAsalController::update/$1');
$routes->add('sekolah-asal/update-action/(:any)','SekolahAsalController::update_action/$1');

// Berkas
$routes->get('berkas','BerkasController::index');
$routes->get('berkas/create','BerkasController::create');
$routes->post('berkas/create-action','BerkasController::create_action');
$routes->get('berkas/update/(:any)','BerkasController::update/$1');
$routes->add('berkas/update-action/(:any)','BerkasController::update_action/$1');

// Berkas
$routes->get('pembayaran','PembayaranController::index');
$routes->get('pembayaran/create','PembayaranController::create');
$routes->post('pembayaran/create-action','PembayaranController::create_action');
$routes->get('pembayaran/update/(:any)','PembayaranController::update/$1');
$routes->add('pembayaran/update-action/(:any)','PembayaranController::update_action/$1');

/* admin
==================================*/
$routes->get('admin','AdminController::index');
$routes->get('admin/santri','AdminController::santri');
$routes->get('admin/orang-tua','AdminController::orang_tua');
$routes->get('admin/sekolah-asal','AdminController::sekolah_asal');
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

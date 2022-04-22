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
$routes->setDefaultController('HalamanUtama');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'HalamanUtama::index');
$routes->get('/isidata', 'HalamanUtama::isidata');
$routes->get('/daftargangguan', 'HalamanUtama::daftargangguan');
$routes->get('/login', 'HalamanUtama::login');
// $routes->get('/hasil', 'HalamanUtama::hasil');
$routes->get('/skizofrenia', 'HalamanUtama::skizofrenia');
$routes->get('/ptsd', 'HalamanUtama::ptsd');
$routes->get('/depression', 'HalamanUtama::depression');
$routes->get('/bipolar', 'HalamanUtama::bipolar');
$routes->get('/paranoia', 'HalamanUtama::paranoia');
$routes->get('/eating', 'HalamanUtama::eating');
$routes->get('/ocd', 'HalamanUtama::ocd');
$routes->get('/anxiety', 'HalamanUtama::anxiety');
//$routes->get('/diagnosis', 'Diagnosis::index');


/**
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

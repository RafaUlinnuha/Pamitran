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
$routes->get('logout', 'Auth::logout');
$routes->get('visi_misi', 'Tentang::visi_misi');
$routes->get('tim_pamitran', 'Tentang::tim_pamitran');
$routes->get('delapan', 'Layanan::delapan');
$routes->get('registrasi_layanan', 'Layanan::registrasi_layanan');
$routes->get('/admin/edit/(:num)', 'Admin::edit/$1');
$routes->delete('/admin/(:num)', 'Admin::delete/$1');
$routes->get('/admin/(:any)', 'Admin::detail/$1');
$routes->match(['get', 'post'], 'edit', 'User::edit');
$routes->match(['get', 'post'], 'change_password', 'ChangePassword::edit');
$routes->match(['get', 'post'], 'register', 'Auth::register', ['filter' => 'AlreadyLoggedIn']);
$routes->match(['get', 'post'], 'login', 'Auth::login', ['filter' => 'AlreadyLoggedIn']);

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

<?php

namespace Config;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
$routes->get('/', 'LoginController::index');

// protected routes group
$routes->group('', ['filter' => 'auth'], static function ($routes) {
    $routes->group('dashboard', static function ($routes) {
        $routes->get('/', 'DashboardController::index');
    });
    $routes->group('auth', static function ($routes) {
        $routes->get('/', 'AuthController::index');
        $routes->get('novo', 'AuthController::form');
    });
    
    $routes->group('clientes', static function ($routes) {
        $routes->get('/', 'CustomerController::index');
        $routes->get('novo', 'CustomerController::form');
        $routes->post('save', 'CustomerController::save');
    });
    
    $routes->group('equipamentos', static function ($routes) {
        $routes->group('olt', static function ($routes) {
            $routes->get('/', 'OltController::index');
            $routes->get('novo', 'OltController::form');
        });
    });
    
    $routes->group('estoque', static function ($routes) {
        $routes->group('produtos', static function ($routes) {
            $routes->get('/', 'ProductController::index');
            $routes->get('novo', 'ProductController::form');
        });
    
        $routes->group('fornecedores', static function ($routes) {
            $routes->get('/', 'SupplierController::index');
            $routes->get('novo', 'SupplierController::form');
        });
        $routes->group('marcas', static function ($routes) {
            $routes->get('/', 'BrandController::index');
            $routes->get('novo', 'BrandController::form');
        });
        
    });
});

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

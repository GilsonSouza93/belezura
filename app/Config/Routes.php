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
$routes->post('login', 'LoginController::login');

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

        $routes->post('search', 'CustomerController::search');
    });
    

    $routes->group('estoque', static function ($routes) {
        $routes->group('produtos', static function ($routes) {
            $routes->get('/', 'ProductController::index');
            $routes->get('novo', 'ProductController::form');
        });
        $routes->group('categoria', static function ($routes) {
            $routes->get('/', 'CategoryController::index');
            $routes->get('novo', 'CategoryController::form');
        });
        $routes->group('fabricantes', static function ($routes) {
            $routes->get('/', 'ManufacturerController::index');
            $routes->get('novo', 'ManufacturerController::form');
        });
    
        $routes->group('fornecedores', static function ($routes) {
            $routes->get('/', 'SupplierController::index');
            $routes->get('novo', 'SupplierController::form');
        });
        $routes->group('marcas', static function ($routes) {
            $routes->get('/', 'BrandController::index');
            $routes->get('novo', 'BrandController::form');
        });
        $routes->group('categorias', static function ($routes) {
            $routes->get('/', 'CategoryController::index');
            $routes->get('novo', 'CategoryController::form');
        });
    });

    $routes->group('configuracoes', static function ($routes) {
        $routes->group('contas', static function ($routes) {
            $routes->get('/', 'AccountController::index');
            $routes->get('novo', 'AccountController::form');
        });
        $routes->group('ippool', static function ($routes) {
            $routes->get('/', 'IppoolController::index');
            $routes->get('novo', 'IppoolController::form');
        });
        $routes->group('ipv6pool', static function ($routes) {
            $routes->get('/', 'Ipv6Controller::index');
            $routes->get('novo', 'Ipv6Controller::form');
        });
        $routes->group('planos', static function ($routes) {
            $routes->get('/', 'SubscriptionController::index');
            $routes->get('novo', 'SubscriptionController::form');

        });
    });
    $routes->group('equipamentos', static function ($routes) {
        $routes->group('onu', static function ($routes) {
            $routes->get('/', 'OnuController::index');
            $routes->get('novo', 'OnuController::form');
        });
        $routes->group('olt', static function ($routes) {
            $routes->get('/', 'OltController::index');
            $routes->get('novo', 'OltController::form');
        });
        $routes->group('switch', static function ($routes) {
            $routes->get('/', 'SwitchController::index');
            $routes->get('novo', 'SwitchController::form');
        });
        $routes->group('radius', static function ($routes) {
            $routes->get('/', 'RadiusController::index');
            $routes->get('novo', 'RadiusController::form');
        });
        $routes->group('post', static function ($routes) {
            $routes->get('/', 'PostController::index');
            $routes->get('novo', 'PostController::form');
        });
        $routes->group('tower', static function ($routes) {
            $routes->get('/', 'TowerController::index');
            $routes->get('novo', 'TowerController::form');
        });
    });
    
    $routes->group('financeiro', static function ($routes) {
        $routes->group('dashboard', static function ($routes) {
            $routes->get('/', 'FinancialController::index');
            $routes->get('novo', 'FinancialController::form');
        });
        $routes->group('cashbox', static function ($routes) {
            $routes->get('/', 'FinancialboxController::index');
            $routes->get('novo', 'FinancialboxController::form');
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

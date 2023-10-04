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
    $routes->group('map', static function ($routes) {
        $routes->get('postes', 'MapController::getPosts');
    });
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
        $routes->get('novo', 'CustomerController::filter');
        $routes->get('editar/(:num)', 'CustomerController::edit/$1');

        $routes->post('save', 'CustomerController::save');
        $routes->post('search', 'CustomerController::search');
        $routes->post('delete', 'CustomerController::delete');	
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
        $routes->group('entradas', static function ($routes) {
            $routes->get('/', 'InStockController::index');
            $routes->get('novo', 'InStockController::form');
        });
        $routes->group('saida', static function ($routes) {
            $routes->get('/', 'OutStockController::index');
            $routes->get('novo', 'OutStockController::form');
        });
        $routes->group('transferencia', static function ($routes) {
            $routes->get('/', 'TransferController::index');
            $routes->get('novo', 'TransferController::form');
        });
        $routes->group('comodato', static function ($routes) {
            $routes->get('/', 'LendingController::index');
            $routes->get('novo', 'LendingController::form');
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
        $routes->group('alterarsenha', static function ($routes) {
            $routes->get('/', 'PasswordController::index');
            $routes->get('novo', 'PasswordController::form');

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
        $routes->group('poste', static function ($routes) {
            $routes->get('/', 'PostController::index');
            $routes->get('novo', 'PostController::form');
            $routes->post('save', 'PostController::save');
            $routes->post('search', 'PostController::search');
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
        $routes->group('caixa', static function ($routes) {
            $routes->get('/', 'FinancialboxController::index');
            $routes->get('novo', 'FinancialboxController::form');
        });
        $routes->group('boleto', static function ($routes) {
            $routes->get('/', 'TicketController::index');
            $routes->get('novo', 'TicketController::form');
            $routes->get('novo', 'TicketController::print');

            // $routes->get('imprimir')
            $routes->get('imprimir-em-lote', 'TicketController::print');
        });
        $routes->group('contasapagar', static function ($routes) {
            $routes->get('/', 'BillstopayController::index');
            $routes->get('novo', 'BillstopayController::form');
        });
        $routes->group('contasareceber', static function ($routes) {
            $routes->get('/', 'BillstoreceiverController::index');
            $routes->get('novo', 'BillstoreceiverController::form');
        });
        $routes->group('contratos', static function ($routes) {
            $routes->get('/', 'ContractController::index');
            $routes->get('novo', 'ContractController::form');
        });
    });
    $routes->group('gerencial', static function ($routes) {
        $routes->group('pop', static function ($routes) {
            $routes->get('/', 'PopController::index');
            $routes->get('novo', 'PopController::form');
            $routes->post('save', 'PopController::save');
            $routes->post('search', 'PopController::search');
        });
        $routes->group('sms', static function ($routes) {
            $routes->get('/', 'SmsController::index');
            $routes->get('novo', 'SmsController::form');
            $routes->post('save', 'SmsController::save');
            $routes->post('search', 'SmsController::search');
        });
        $routes->group('veiculos', static function ($routes) {
            $routes->get('/', 'VehicleController::index');
            $routes->get('novo', 'VehicleController::form');
            $routes->post('save', 'VehicleController::save');
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

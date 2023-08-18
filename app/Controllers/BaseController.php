<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    public $viewPath = '';
    public $data = [];
    public $tittle = '';
    public $addButtonText = '';
    public $baseRoute = '';
    public $baseRoutePrint = '';
    public $mainModel = null;
    public $saveMessage = 'Salvo com sucesso!';

    public function __construct()
    {
        $this->data['navigation_bar_items'] = [

            'dashboard' => [
                'title' => 'Dashboard',
                'href' => base_url('dashboard'),
                'icon' => '<i class="fas fa-tachometer-alt"></i>',
                'show_subitems' => false,
                'subitems' => [
                ]
            ],

            'customers' => [
                'title' => 'Clientes',
                'href' => base_url('clientes'),
                'icon' => '<i class="fas fa-users"></i>',
                'show_subitems' => false,
            ],

            'financial' => [
                'title' => 'Financeiro',
                'href' => base_url('financeiro'),
                'icon' => '<i class="fas fa-tools"></i>',
                'show_subitems' => true,
                'color' => '#ff914d',
                'subitems' => [
                    'dashboard' => [
                        'title' => 'Dashboard',
                        'href' => base_url('financeiro/dashboard'),
                    ],
                    'caixa' => [
                        'title' => 'Caixa',
                        'href' => base_url('financeiro/caixa'),
                    ],
                    'payable' => [
                        'title' => 'Contas a pagar',
                        'href' => base_url('financeiro/contasapagar'), 
                    ],
                    'receive' => [
                        'title' => 'Contas receber',
                        'href' => base_url('financeiro/contasareceber'), 
                    ],
                    'ticket' => [
                        'title' => 'Boletos',
                        'href' => base_url('financeiro/boleto'), 
                    ],

                ]
            
            ],      
            'gerencial' => [
                'title' => 'Gerencial',
                'href' => base_url('gerencial'),
                'icon' => '<i class="fas fa-tools"></i>',
                'show_subitems' => true,
                'color' => '#ff914d',
                'subitems' => [
                    'pop' => [
                        'title' => 'POP',
                        'href' => base_url('gerencial/pop'),
                    ],
                    'email' => [
                        'title' => 'Email',
                        'href' => base_url('gerencial/pop'),
                    ],
                    'sms' => [
                        'title' => 'SMS',
                        'href' => base_url('gerencial/sms'), 
                    ],
                ]
            
            ],      
            'equipment' => [
                'title' => 'Equipamentos',
                'href' => base_url('equipamentos'),
                'icon' => '<i class="fas fa-tools"></i>',
                'show_subitems' => true,
                'color' => '#00bf63',
                'subitems' => [
                    'olt' => [
                        'title' => 'OLTs',
                        'href' => base_url('equipamentos/olt'),
                        'icon' => '<i class="fas fa-server"></i>'
                    ],
                    'onu' => [
                        'title' => 'ONUs',
                        'href' => base_url('equipamentos/onu'),
                        'icon' => '<i class="fas fa-microchip"></i>'
                    ],
                    'switch' => [
                        'title' => 'Switches',
                        'href' => base_url('equipamentos/switch'),
                        'icon' => '<i class="fas fa-network-wired"></i>'
                    ],
                    'router' => [
                        'title' => 'Roteadores',
                        'href' => base_url('equipamentos/router'),
                        'icon' => '<i class="fas fa-network-wired"></i>'
                    ],
                    'radius' => [
                        'title' => 'Radius',
                        'href' => base_url('equipamentos/radius'),
                        'icon' => '<i class="fas fa-network-wired"></i>'

                    ],
                    'poste' => [
                        'title' => 'Poste',
                        'href' => base_url('equipamentos/post'),
                        'icon' => '<i class="fas fa-wifi"></i>'
                    ],
                    'tower' => [
                        'title' => 'Torre',
                        'href' => base_url('equipamentos/tower'),
                        'icon' => '<i class="fas fa-wifi"></i>'
                    ],
                    'servidor' => [
                        'title' => 'Servidores',
                        'href' => base_url('equipamentos/servidor'),
                        'icon' => '<i class="fas fa-server"></i>'
                    ],
                    'storage' => [
                        'title' => 'Storages',
                        'href' => base_url('equipamentos/storage'),
                        'icon' => '<i class="fas fa-hdd"></i>'
                    ],
                    'outros' => [
                        'title' => 'Outros',
                        'href' => base_url('equipamentos/outros'),
                        'icon' => '<i class="fas fa-question"></i>'
                    ],
                ]
            ],

            'Estoque' => [
                'title' => 'Estoque',
                'href' => base_url('estoque'),
                'icon' => '<i class="fas fa-boxes"></i>',
                'show_subitems' => true,
                'color' => '#00aeef',
                'subitems' => [
                    'Produtos' => [
                        'title' => 'Produtos',
                        'href' => base_url('estoque/produtos'),
                        'icon' => '<i class="fas fa-boxes"></i>'
                    ],

                    'Marcas' => [
                        'title' => 'Marcas',
                        'href' => base_url('estoque/marcas'),
                        'icon' => '<i class="fas fa-boxes"></i>'
                    ],

                    'Categorias' => [
                        'title' => 'Categorias',
                        'href' => base_url('estoque/categorias'),
                        'icon' => '<i class="fas fa-boxes"></i>'
                    ],

                    'Fornecedores' => [
                        'title' => 'Fornecedores',
                        'href' => base_url('estoque/fornecedores'),
                        'icon' => '<i class="fas fa-boxes"></i>'
                    ],
                    
                    'Fabricantes' => [
                        'title' => 'Fabricantes',
                        'href' => base_url('estoque/fabricantes'),
                        'icon' => '<i class="fas fa-boxes"></i>'
                    ],

                    'Entradas' => [
                        'title' => 'Entradas',
                        'href' => base_url('estoque/entradas'),
                        'icon' => '<i class="fas fa-boxes"></i>'
                    ],

                    'Saidas' => [
                        'title' => 'Saídas',
                        'href' => base_url('estoque/saidas'),
                        'icon' => '<i class="fas fa-boxes"></i>'
                    ],

                    'Transferencias' => [
                        'title' => 'Transferências',
                        'href' => base_url('estoque/transferencias'),
                        'icon' => '<i class="fas fa-boxes"></i>'
                    ],

                    'Ajustes' => [
                        'title' => 'Ajustes',
                        'href' => base_url('estoque/ajustes'),
                        'icon' => '<i class="fas fa-boxes"></i>'
                    ],

                    'Inventarios' => [
                        'title' => 'Inventários',
                        'href' => base_url('estoque/inventarios'),
                        'icon' => '<i class="fas fa-boxes"></i>'
                    ],

                    'Relatorios' => [
                        'title' => 'Relatórios',
                        'href' => base_url('estoque/relatorios'),
                        'icon' => '<i class="fas fa-boxes"></i>'
                    ],
                ]
            ],

            'settings' => [
                'title' => 'Configurações',
                'href' => base_url('configuracoes'),
                'icon' => '<i class="fas fa-cog"></i>',
                'show_subitems' => true,
                'color' => '#fff',
                'subitems' =>[
                    'Conta' => [
                        'title' =>'Contas',
                        'href' => base_url('configuracoes/contas'),
                    ],
                    'Ip Pool' => [
                        'title' =>'IP POOL',
                        'href' => base_url('configuracoes/ippool'),
                        'icon' => '<i class="fas fa-boxes"></i>'
                    ],
                    'Ipv6 Pool' => [
                        'title' =>'IPv6 POOL',
                        'href' => base_url('configuracoes/ipv6pool'),
                        'icon' => '<i class="fas fa-boxes"></i>'
                    ],
                    'Planos' => [
                        'title' =>'Planos',
                        'href' => base_url('configuracoes/planos'),
                        'icon' => '<i class="fas fa-boxes"></i>',

                    ],
                ]
            ],
        ];

        $this->data['lang'] = 'pt-br';
        $this->data['tittle'] = $this->tittle;
        $this->data['addButtonText'] = $this->addButtonText;
        $this->data['baseRoute'] = base_url($this->baseRoute);
    }

    public function index()
    {
        return view($this->viewPath . '/index', $this->data);
    }  

    public function form()
    {
        return view($this->viewPath . '/form', $this->data);
    }

    public function treatmentBeforeSave($data)
    {
        return $data;
    }

    public function save()
    {
        $data = $this->treatmentBeforeSave($this->request->getPost());

        $response = $this->mainModel->save($data);

        if($response) {
            $data = [
                'success' => true,
                'message' => $this->saveMessage,
                'data' => $response
            ];
        } else {
            $data = [
                'success' => false,
                'message' => 'Erro ao salvar!',
                'data' => $response
            ];
        }

        return $this->response->setJSON($data);
    }

    public function search()
    {
        $data = $this->request->getPost();

        $response = $this->mainModel->search($data);

        return $this->response->setJSON($response);
    }
}

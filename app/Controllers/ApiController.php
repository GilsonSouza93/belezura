<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\ClassApi\RouterosApi;

class ApiController extends BaseController
{
    protected $API = null;
    protected $ip = '169.254.30.185';
    protected $login = 'admin';
    protected $password = '';

    public function __construct()
    {
        $this->API = new RouterosApi();
        $this->API->debug = true;
        $this->API->connect($this->ip, $this->login, $this->password);
    }

    // public function index()
    // {
    //     $API = new RouterosApi();

    //     $API->debug = true;

    //     $ip = '169.254.30.185';
    //     $login = 'admin';
    //     $password = '';

    //     if ($API->connect($ip, $login, $password)) {
        
    //        $API->write('/interface/getall');
        
    //        $READ = $API->read(false);
    //        $ARRAY = $API->parseResponse($READ);
        
    //        print_r($ARRAY);
        
    //        $API->disconnect();
        
    //     }
    // }

    public function listAllQueue()
    {
        $this->API->write('/queue/simple/getall');
        $READ = $this->API->read(false);
        $ARRAY = $this->API->parseResponse($READ);
        return $this->response->setJSON($ARRAY);
    }

    public function createQueue()
    {
        $json = $this->request->getJSON();

        $data = [
            'name' => $json->name,
            'target' => $json->target,
            'max-limit' => $json->max_limit,
            'parent' => $json->parent,
            'comment' => $json->comment,
            'priority' => $json->priority,
            'limit-at' => $json->limit_at,
            'max-limit' => $json->max_limit,
            'burst-limit' => $json->burst_limit,
            'burst-threshold' => $json->burst_threshold,
            'burst-time' => $json->burst_time,
            'burst-threshold' => $json->burst_threshold,
            'burst-time' => $json->burst_time,
            'burst-limit' => $json->burst_limit,
            'burst-threshold' => $json->burst_threshold,
            'burst-time' => $json->burst_time,
            'burst-limit' => $json->burst_limit,
            'burst-threshold' => $json->burst_threshold,
            'burst-time' => $json->burst_time,
            'burst-limit' => $json->burst_limit,
            'burst-threshold' => $json->burst_threshold,
            'burst-time' => $json->burst_time,
            'burst-limit' => $json->burst_limit,
            'burst-threshold' => $json->burst_threshold,
            'burst-time' => $json->burst_time,
            'burst-limit' => $json->burst_limit,
            'burst-threshold' => $json->burst_threshold,
        ];

        $this->API->write('/queue/simple/add', false);
        $this->API->write($data);
        $READ = $this->API->read(false);
        $ARRAY = $this->API->parseResponse($READ);

        if ($ARRAY) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Fila cadastrada com sucesso!',
            ]);
        }
}

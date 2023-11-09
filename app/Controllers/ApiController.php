<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\ClassApi\RouterosApi;

class ApiController extends BaseController
{
    public function index()
    {
        $API = new RouterosApi();

        $API->debug = true;

        $ip = '192.168.1.74';
        $login = 'sergio';
        $password = 'admin';

        if ($API->connect($ip, $login, $password)) {
        
           $API->write('/interface/getall');
        
           $READ = $API->read(false);
           $ARRAY = $API->parseResponse($READ);
        
           print_r($ARRAY);
        
           $API->disconnect();
        
        }
    }
}

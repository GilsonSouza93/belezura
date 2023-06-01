<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'lang' => 'pt-br'
        ];

        return view('dashboard/index', $data);
    }
}

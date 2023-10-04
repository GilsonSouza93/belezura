<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SmsController extends BaseController
{
    public $tittle = 'SMS';
    public $addButtonText = 'Cadastrar SMS';
    public $viewPath = 'sms';
    public $baseRoute = '/gerencial/sms';

}

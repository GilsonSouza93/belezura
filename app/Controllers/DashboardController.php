<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public $tittle = 'Dashboard';
    public $viewPath = 'dashboard';

    protected $customerModel;
    protected $postModel;
    protected $FinancialTransactionsController;
    protected $notificationModel;   

    public function __construct()
    {
        $this->customerModel = new \App\Models\CustomerModel();
        $this->postModel = new \App\Models\PostModel();
        $this->FinancialTransactionsController = new \App\Controllers\FinancialTransactionsController();
        $this->notificationModel = new \App\Models\NotificationModel();

        return parent::__construct();
    }

    public function info()
    {
        $data = [
            'customerQty' => $this->customerModel->countAll(),
            'postQty' => $this->postModel->countAll(),
            'depositValue' => 0,
            'notifications' => $this->notificationModel->getNotifications(),
        ];

        return $this->response->setJSON($data);
    }
}

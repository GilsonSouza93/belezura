<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AsaasApiGatewayController extends BaseController
{
    public $tittle = 'Pagamentos';
    public $addButtonText = '';
    public $viewPath = '';
    public $baseRoute = '/pagamentos';

    private $apiKey;
    private $url;
    private $customerModel;

    public function __construct()
    {

        if (getenv('CI_ENVIRONMENT') === 'development') {
            $this->apiKey = getenv('asaasGatewayApiKeyDevelopmentMode');
            $this->url = getenv('assasGatewayApiUrlDevelopmentMode');
        }
    }

    public function initPayment($customerId)
    {
    }

    public function updatePaymentStatus()
    {
    }

    public function createCustomer()
    {
        var_dump("{$this->apiKey}"); die;
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "{$this->url}customers",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode([
                'name' => 'string',
                'cpfCnpj' => 'string',
                'email' => 'string',
                'phone' => 'string',
                'mobilePhone' => 'string',
                'address' => 'string',
                'addressNumber' => 'string',
                'complement' => 'string',
                'province' => 'string',
                'postalCode' => 'string',
                'externalReference' => 'string',
                'notificationDisabled' => true,
                'additionalEmails' => 'string',
                'municipalInscription' => 'string',
                'stateInscription' => 'string',
                'observations' => 'string',
                'groupName' => 'string',
                'company' => 'string'
            ]),
            CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "access_token: {$this->apiKey}",
                "content-type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }
}

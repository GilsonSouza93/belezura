<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Model;

class IntegrationsController extends BaseController
{
    public $tittle = 'Integrações';
    public $addButtonText = '0';
    public $viewPath = 'integrations';
    public $baseRoute = 'configuracoes/integracoes';

    public $saveMessage = 'Integração salva com sucesso!';
    public $failMessage = 'Falha ao salvar integração!';

    public function save()
    {
        $session = session();

        if (!$session->get('company_id')) {
            return redirect()->to('/');
        }
    }

    public function saveAsaas()
    {
        $session = session();

        if (!$session->get('company_id')) {
            return redirect()->to('/');
        }

        $company_id = $session->get('company_id');
        $companyModel = model('companiesModel');

        $assas_api_key = $this->request->getPost('assas_api_key');

        $response = $companyModel->update($company_id, [
            'assas_api_key' => $assas_api_key,
        ]);

        if ($response) {
            $data = [
                'status' => 'success',
                'message' => $this->saveMessage,
            ];
        } else {
            $data = [
                'status' => 'fail',
                'message' => $this->failMessage,
            ];
        }

        return $this->response->setJSON($data);
    }

    public function checkCompanyAssasApi()
    {
        $company_id = session()->get('company_id'); 

        $companyModel = model('companiesModel');
        
        $result = $companyModel->find($company_id);
        $assasApiKey = $result['assas_api_key'];

        if ($assasApiKey) {
            $data = [
                'status' => 'success',
                'message' => 'Chave de API encontrada!',
            ];
        } else {
            $data = [
                'status' => 'fail',
                'message' => 'Chave de API não encontrada!',
            ];
        }

        return $this->response->setJSON($data);
    }

    public function removeAsaas()
    {
        $company_id = session()->get('company_id'); 

        $companyModel = model('companiesModel');
        
        $data = [
            'assas_api_key' => null,
        ];

        $result = $companyModel->update($company_id, $data);

        if ($result) {
            $data = [
                'status' => 'success',
                'message' => 'Chave de API removida com sucesso!',
            ];
        } else {
            $data = [
                'status' => 'fail',
                'message' => 'Falha ao remover chave de API!',
            ];
        }

        return $this->response->setJSON($data);
    }

}

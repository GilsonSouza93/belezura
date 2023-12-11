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

        // in companies table set asaas_api_key and asaas_api_secret

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
}

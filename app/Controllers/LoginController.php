<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    
    public function index()
    {
        return view('auth/index', $this->data);
    }

    public function login()
    {
        if($this->request->getMethod('POST')) {
            $data = $this->request->getPost();

            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required|min_length[6]|max_length[16]'
            ];

            if(!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            } else {
                $email = $data['email'];
                $password = $data['password'];

                $userModel = new \App\Models\UserModel();

                $user = $userModel->where('email', $email)->first();

                if(!$user) {
                    return redirect()->back()->withInput()->with('errors', ['Usuário não encontrado']);
                } else {
                    if(!password_verify($password, $user['password'])) {
                        $response = [
                            'status' => 401,
                            'error' => true,
                            'messages' => 'Senha incorreta'
                        ];
                    } else {
                        $SessionData = [
                            'id' => $user['id'],
                            'name' => $user['name'],
                            'email' => $user['email'],
                            'isLoggedIn' => true
                        ];

                        session()->set($SessionData);
                        
                        $response = [
                            'status' => 200,
                            'error' => false,
                            'messages' => 'Login efetuado com sucesso'
                        ];
                    }

                    return $this->response->setJSON($response);
                }
            }


        }
    }
}

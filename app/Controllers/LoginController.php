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
                        return redirect()->back()->withInput()->with('errors', ['Senha incorreta']);
                    } else {
                        $this->setUserSession($user);
                        return redirect()->to('dashboard');
                    }
                }
            }


        }
    }
}

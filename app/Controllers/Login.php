<?php
namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('login_view');
    }

    public function authenticate()
    {
        $usuarios = [
            'admin' => 'admin123',
            'usuario' => 'usuario123'
        ];

        $user = $this->request->getPost('username');
        $pass = $this->request->getPost('password');

        if (isset($usuarios[$user]) && $usuarios[$user] === $pass) {
            session()->set('usuario', $user);
            return redirect()->to('/Principal');
        } else {
            return "Usuario o contraseña incorrectos";
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
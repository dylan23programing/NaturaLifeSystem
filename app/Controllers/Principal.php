<?php
namespace App\Controllers;

class Principal extends BaseController
{
    public function index()
    {
        if (!session()->has('usuario')) {
            return redirect()->to('/Principal');
        }

        return view('principal_view');
    }
}
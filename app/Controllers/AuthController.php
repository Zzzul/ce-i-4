<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index()
    {
        return view('auth');
    }

    public function create()
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
        ];

        $user = $this->user_model->where('username', $data['username'])->where('password', $data['password'])->first();

        if ($user) {
            return redirect()->to('/');
        }
        
        return redirect()->back()->withInput()->with('error', 'Invalid username or password');
    }
}

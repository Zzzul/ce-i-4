<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index()
    {
        if(session()->has('is_logged_in')) {
            return redirect()->to(url_to('Admin\DashboardController::index'));
        }

        return view('auth');
    }

    public function create()
    {
        $this->validation->setRules([
            'username' => 'required',
            'password' => 'required|check_password[password,username]',
        ],
        [
            'username' => [
                'required' => 'Username is required.'
            ],
            'password' => [
                'required' => 'Password is required.',
                'check_password' => 'Password is not match with username.'
            ]
        ]);

        
        if (!$this->validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
        }
        
        $this->set_session($this->request->getVar());

        return redirect()->to(url_to('Admin\DashboardController::index'));
    }

    public function delete(string $id)
    {
        foreach(session()->get() as $key => $value) {
            session()->remove($key);
        }

        return redirect()->to(url_to('AuthController::index'))->with('success', 'Logout success.');
    }

    protected function set_session($user)
    {
        $user = $this->user_model->where('username', $user['username'])->first();

        session()->set([
            'user_id' => $user->id,
            'is_logged_in' => true
        ]);
    }
}

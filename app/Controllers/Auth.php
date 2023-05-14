<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Auth extends BaseController {
    protected $session;
    protected $data;
    protected $userModel;

    public function __construct() {
        $this->userModel = new UsersModel();

        $this->session= \Config\Services::session();
        $this->data['session'] = $this->session;
    }

    public function login() {

        $this->data['title'] = "Login Form";

        return view('auth/login', $this->data);
    }

    public function process() {

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data_user = $this->userModel->where('username', $username)->first();
      
        if ($data_user) {
            $password_check = password_verify($password, $data_user['password']);
            if (!$password_check){
                session()->setFlashdata('error', 'Password Salah !');
                return redirect()->back()->withInput();
            } else {
                session()->set([
                    'username' => $data_user['username'],
                    'role_id' => $data_user['role_id'],
                    'logged_in' => true
                ]);
                return redirect()->to(base_url(''));
            }
        } else {
            session()->setFlashdata('error', 'Username belum terdaftar !');
            return redirect()->back()->withInput();
        }
    }
}
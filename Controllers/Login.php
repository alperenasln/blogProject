<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    }

    public function authorization()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = ($password == $pass);
            if ($verify_pass) {
                $session_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'logged_in' => TRUE
                ];
                $session->set($session_data);
                return redirect()->to('/dashboard');
                //return redirect()->to('/test');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                //return redirect()->to('/login');
                //Password not verified
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'User not found');
            return redirect()->to('/login');
        }
    }

}


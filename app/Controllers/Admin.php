<?php

namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{
    private function authenticate()
    {

    }

    public function dashboard()
    {
        echo view('Admin/header');
        echo view('Admin/dashboard');
        echo view('Admin/footer');
    }


     public function login()
     {
         helper('form');
         $session = session();
         $data = ['success' => false, 'error' => false];
         if ($this->request->getMethod() == 'post' && $this->validate([
                 'email' => 'required|valid_email',
                 'password' => 'required',
             ])) {
             $email = $this->request->getPost('email');
             $password = $this->request->getPost('password');

             $obj = new UserModel();
             $result = $obj->where(['email' => $email, 'password' => md5($password)])
                 ->get()->getResult('array');
             if (count($result) > 0) {
                 $session->set(['Is_Logged_In' => true, 'user_id' => $result[0]['id']]);
                 return redirect()->to('Admin/dashboard');

             } else {
                 $data['error'] = "Please Fill the Fields.";
             }
         }
         echo view('Admin/login');
     }


     public function logout()
     {
         $session = session();
         $session->destroy();
         return redirect()->to('/Admin/login');
     }

}

<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{

    public function list()
    {
        $obj = new UserModel();
        $data = ['user' => $obj->findAll()];
        echo view('Admin/header', $data);
        echo view('Alter/listing', $data);
        echo view('Admin/footer', $data);
    }


    public function create()
    {
        helper('form');
        $model = model(UserModel::class);
        $session = session();
        if (!$session->get('Is_Logged_In')) {
            return redirect()->to('/Admin/login');
        }

        if ($this->request->getMethod() === 'post' && $this->validate([
                'name' => 'required|min_length[3]|max_length[255]',
                'email' => 'required|valid_email',
                'password' => 'required|min_length[8]'
            ]))
           {
            $insert = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'id' => $session->get('id'),
            ];
            $model->save($insert);

            return redirect()->to('/Admin/dashboard');
           }
        else
        {
            echo view('Admin/header');
            echo view('Alter/create');
            echo view('Admin/footer');
        }
    }



    public function edit($id)
    {
        helper('form');
        $session = session();
        if (!$session->get('Is_logged_In')) {
            return redirect()->to('/Admin/login');
        }
        $model = model(UserModel::class);
        $row = $model->find($id);
        /*echo'<pre>';
        print_r($session);die();*/
        if ($row['id'] != $session->get('id')) {
            return redirect()->to('/Admin/user');
        }
        $data = ['row' => $row, 'success' => false];
        if (!$session->get('Is_logged_In')) {
            return redirect()->to('/Admin/login');
        }
        if ($this->request->getMethod() === 'post' && $this->validate([
                'name' => 'required|min_length[3]|max_length[255]',
                'email' => 'required|valid_email',
                'password' => 'required',
            ])) {

            $insert = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'id' => $session->get('id'),
            ];
            $model->update($id, $insert);
            $data['success'] = true;
        }
        echo view('Admin/header');
        echo view('User/edit');
        echo view('Admin/footer');
    }


    public function delete($id)
    {
        $session = session();
        if (!$session->get('Is_Logged_In')) {
            return redirect()->to('/Admin/login');
        }
        $obj = new UserModel();
        $find = $obj->find($id);
        if ($find['id'] == $session->get('id'))
        {
            $obj->delete($id);
        }
        return redirect()->to('/User/list');
    }
}

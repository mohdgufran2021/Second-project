<?php

namespace App\Controllers;

class Site extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Index'];
      echo view('templates/header',$data);
      echo view('Pages/index',$data);
      echo view('templates/footer',$data);
    }


    public function aboutUs()
    {
        $data = ['title' => 'About Us'];
        echo view('templates/header', $data);
        echo view('Pages/about_us', $data);
        echo view('templates/footer', $data);
    }


    public function contact()
    {
        $data = ['title' => 'Contact'];
        echo view('templates/header', $data);
        echo view('pages/contact', $data);
        echo view('templates/footer', $data);
    }


    public function services()
    {
        $data = ['title' => 'Services'];
        echo view('templates/header', $data);
        echo view('Pages/services', $data);
        echo view('templates/footer', $data);
    }


    public function termsAndConditions()
    {
        $data = ['title' => 'Terms and Conditions'];
        echo view('templates/header', $data);
        echo view('Pages/termsCondition', $data);
        echo view('templates/footer', $data);
    }


    public function privacyPolicy()
    {
        $data = ['title' => 'Privacy Policy'];
        echo view('templates/header', $data);
        echo view('Pages/privacyPolicy', $data);
        echo view('templates/footer', $data);
    }
}

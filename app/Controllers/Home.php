<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('pages/index');
        echo view('common/footer');
    }
    public function about()
    {
        echo view('common/header');
        echo view('pages/about');
        echo view('common/footer');
    }
    public function search()
    {
        echo view('common/header');
        echo view('pages/search');
        echo view('common/footer');
    }
    public function support()
    {
        echo view('common/header');
        echo view('pages/support');
        echo view('common/footer');
    }
    public function service()
    {
        echo view('common/header');
        echo view('pages/service');
        echo view('common/footer');
    }
    public function apply_visa()
    {
        echo view('common/header');
        echo view('pages/apply_visa');
        echo view('common/footer');
    }
}

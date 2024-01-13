<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('container/header');
        echo view('pages/index');
        echo view('container/footer');
    }
    public function about()
    {
        echo view('container/header');
        echo view('pages/about');
        echo view('container/footer');
    }
    public function search()
    {
        echo view('container/header');
        echo view('pages/search');
        echo view('container/footer');
    }
    public function support()
    {
        echo view('container/header');
        echo view('pages/support');
        echo view('container/footer');
    }
    public function service()
    {
        echo view('container/header');
        echo view('pages/service');
        echo view('container/footer');
    }
}

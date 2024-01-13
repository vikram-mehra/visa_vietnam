<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;

class HomeController extends Controller
{
    public function index()
    {
        echo view('admin/container/header');
        echo view('admin/pages/index');
        echo view('admin/container/footer');
    }

    public function dashboard()
    {
        echo view('admin/container/header');
        echo view('admin/container/sidebar');
        echo view('admin/pages/dashboard');
        echo view('admin/container/footer');
    }
}

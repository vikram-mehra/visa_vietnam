<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
    
    public function index()
    {
        echo view('admin/container/header');
        echo view('admin/pages/index');
        echo view('admin/container/footer');
    }

    public function dashboard()
    {
        $admin_id = $this->session->has('admin_id');
		if($admin_id)
		{
            echo view('admin/container/header');
            echo view('admin/container/sidebar');
            echo view('admin/pages/dashboard');
            echo view('admin/container/footer');
		}
		else
		{
            return redirect()->route('admin');
		}
    }
}

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
        echo view('admin/common/header');
        echo view('admin/pages/index');
        echo view('admin/common/footer');
    }

    public function dashboard()
    {
        $admin_id = $this->session->has('admin_id');
		if($admin_id)
		{
            echo view('admin/common/header');
            echo view('admin/common/sidebar');
            echo view('admin/pages/dashboard');
            echo view('admin/common/footer');
		}
		else
		{
            return redirect()->route('admin');
		}
    }
}

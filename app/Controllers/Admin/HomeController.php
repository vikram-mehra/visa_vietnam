<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use CodeIgniter\Controller;

class HomeController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->db = \Config\Database::connect();
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
    public function supportList()
    {
        $query = $this->db->table('support_query');
        $results = $query->get()->getResult();
        // pre($results);
        $admin_id = $this->session->has('admin_id');
		if($admin_id)
		{
            echo view('admin/common/header');
            echo view('admin/common/sidebar');
            echo view('admin/pages/support_list', ['data' => $results]);
            echo view('admin/common/footer');
		}
		else
		{
            return redirect()->route('admin');
		}
    }
}

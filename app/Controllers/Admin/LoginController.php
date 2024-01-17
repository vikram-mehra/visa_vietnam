<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
	{
        $admin_id = $this->session->has('admin_id');
		if($admin_id)
		{
            return redirect()->route('admin/dashboard');
		}
		else
		{
            echo view('admin/container/header');
            echo view('admin/pages/index');
            echo view('admin/container/footer');
		}		
	}

	public function UserlogOut()
	{
        $this->session->remove('admin_id');
        $this->session->close();
        return redirect()->route('admin');
    }
	public function setUserLogin()
	{
        $validation = \Config\Services::validation();

        $formData = [
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];

        $rules = [
            'password' => 'required',
            'email' => 'required|valid_email'
        ];
        
        // Set the rules
        $validation->setRules($rules);
        $status = $validation->run($formData);
        
        // Now, you can use the validation instance to check the rules
        if ($status) {
            $newdata = [
            'admin_id'  => 1,
            'username'  => 'johndoe',
            'email'     => 'johndoe@some-site.com',
            'logged_in' => true,
        ];
        
        $this->session->set($newdata);
            return redirect()->route('admin/dashboard');
            // Validation passed
        } else {
            // Validation failed
            $errors = $validation->getErrors();
            // Validation failed, return to the form with errors
            return redirect()->route('admin');
        }
	}
}

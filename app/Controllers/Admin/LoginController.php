<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\Admin\UserModel;

class LoginController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->validation = \Config\Services::validation();
        $this->userModel = new UserModel();
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
        $email = $_POST['email'];
        $password = $_POST['password'];
        $formData = [
            'email' => $email,
            'password' => $password
        ];

        $rules = [
            'password' => 'required',
            'email' => 'required|valid_email'
        ];
        
        // Set the rules
        $this->validation->setRules($rules);
        $status = $this->validation->run($formData);
        
        // Now, you can use the validation instance to check the rules
        if ($status) {
            $hashedPassword = md5($password);

            $users = $this->userModel
                    ->where('email', $email)
                    ->where('password', $hashedPassword)
                    ->where('status', 1)
                    ->first();
            if (!empty($users)) {
                $newdata = [
                    'admin_id'  => $users['id'],
                    'username'  => $users['name'],
                    'email'     => $users['email'],
                    'logged_in' => true,
                ];
                $this->session->set($newdata);
                return redirect()->route('admin/dashboard');
            }
        } else {
            // Validation failed
            $errors = $this->validation->getErrors();
            // Validation failed, return to the form with errors
        }
        return redirect()->route('admin');
	}
}

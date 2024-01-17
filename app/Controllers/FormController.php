<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Controllers\BaseController;

class FormController extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }

	public function submitSupportForm()
	{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $passport_no = $_POST['passport_no'];
        $nationality = $_POST['nationality'];
        $description = $_POST['description'];
        $problem = $_POST['problem'];
        $formData = [
            'name' => $name,
            'email' => $email,
            'passport_no' => $passport_no,
            'nationality' => $nationality,
            'description' => $description,
            'problem' => $problem
        ];

        $rules = [
            'name' => 'required',
            'email' => 'required|valid_email',
            'passport_no' => 'required|min_length[6]', // Example: Minimum length of 6 characters
            'nationality' => 'required',
            'description' => 'required',
            'problem' => 'required'
        ];
        
        // Set the rules
        $this->validation->setRules($rules);
        $status = $this->validation->run($formData);
        
        // Now, you can use the validation instance to check the rules
        if ($status) {


            print_r('add data here');die;
            return redirect()->route('e-visa-support');
        } else {
            // Validation failed
            $errors = $this->validation->getErrors();
            // Validation failed, return to the form with errors
        }
        return redirect()->route('e-visa-support');
	}
}

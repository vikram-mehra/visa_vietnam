<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->db      = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

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

    public function fetchSearchData()
	{
        $status = $this->validateUserData();
        // Now, you can use the validation instance to check the rules
        if ($status) {
            // pre('ksks');
            $this->session->setFlashdata('success', 'Data Fetched Successfully!');
            return redirect()->route('e-visa-search');
        } else {
            // Validation failed
            $errors = $this->validation->getErrors();
            // Validation failed, return to the form with errors
        }
        $this->session->setFlashdata('error', 'An error occurred!');
        return redirect()->route('e-visa-search');
	}
    

    public function validateUserData() {
        $registration = $_POST['registration'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $status = true;

        if (empty($email) || empty($registration) || empty($dob)) {
            $status = false;
        }
        return $status;
    }
}

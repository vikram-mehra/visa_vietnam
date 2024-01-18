<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Controllers\BaseController;

class FormController extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->db      = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    /** Support Form submission start */

	public function submitSupportForm()
	{
        $data = $this->supportValidation();
        // Now, you can use the validation instance to check the rules
        if ($data['status']) {
            $this->saveFormData($data['formData'], "support_query");
            $this->session->setFlashdata('success', 'Submitted successfully!');
            return redirect()->route('e-visa-support');
        } else {
            // Validation failed
            $errors = $this->validation->getErrors();
            // Validation failed, return to the form with errors
        }
        $this->session->setFlashdata('error', 'An error occurred!');
        return redirect()->route('e-visa-support');
	}

    public function supportValidation() {
        
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
        $status =  $this->validation->run($formData);
        return [
            "status" => $status,
            "formData" => $formData
        ];
    }

    /** Support Form submission end */

    
    /** visa Form submission start */

	public function submitVisaForm()
	{
        $data = $this->visaFormValidation();
        // Now, you can use the validation instance to check the rules
        if ($data['status']) {
            $this->saveFormData($data['formData'], "visa_application");
            $this->session->setFlashdata('success', 'Submitted successfully!');
            return redirect()->route('apply-visa');
        } else {
            // Validation failed
            $errors = $this->validation->getErrors();
            // Validation failed, return to the form with errors
        }
        $this->session->setFlashdata('error', 'An error occurred!');
        return redirect()->route('apply-visa');
	}
    

    public function visaFormValidation() {
        if (!isset($_POST['evisa_agree']) || $_POST['evisa_agree']== 0) {
            return [
                "status" => false,
                "formData" => []
            ];
        }
        $img_data = $this->processImage();

        $photo = $img_data['photo'];
        $doc = $img_data['doc'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $nationality = $_POST['nationality'];
        $purpose_of_entry = $_POST['purpose_of_entry'];
        $entry_checkpoint = $_POST['entry_checkpoint'];
        $date_valid = $_POST['date_valid'];
        $formData = [
            'full_name' => $full_name,
            'email' => $email,
            'phone' => $phone,
            'nationality' => $nationality,
            'purpose_of_entry' => $purpose_of_entry,
            'entry_checkpoint' => $entry_checkpoint,
            'date_valid' => $date_valid,
            'photo' => $photo,
            'doc' => $doc,
        ];

        $rules = [
            'full_name' => 'required',
            'email' => 'required|valid_email',
            'phone' => 'required',
            'nationality' => 'required',
            'purpose_of_entry' => 'required',
            'entry_checkpoint' => 'required',
            'date_valid' => 'required',
            'photo' => 'required',
            'doc' => 'required',
        ];
        
        // Set the rules
        $this->validation->setRules($rules);
        $status =  $this->validation->run($formData);
        return [
            "status" => $status,
            "formData" => $formData
        ];
    }

    public function processImage()
    {
        $result['photo'] = $result['doc'] = "";
        // Get the uploaded image file
        $imageFile = $this->request->getFile('photo');
        $docFile = $this->request->getFile('doc');
        $data = [
            "photo" => [
                "file" => $imageFile,
                "path" => './assets/upload/photo/',
            ],
            "doc" => [
                "file" => $docFile,
                "path" => './assets/upload/doc/',
            ],
        ];

        foreach ($data as $key => $value) {
            // pre($value['file']);
            $temp = $value['file']->getTempName();
            $path = $value['path'] . $value['file']->getName();

            if ($value['file']->isValid() && !$value['file']->hasMoved()) {
                // Define the upload directory
                $uploadDir = $value['path']; 
    
                // Move the file to the upload directory
                $value['file']->move($uploadDir);
    
                // Get the new file name after moving
                $name = $value['file']->getName();
                $result[$key] = $uploadDir.$name;
    
            }
        }
        return $result;

    }
    /** visa Form submission end */


    public function saveFormData($data, $table) {
        // Get an instance of the database query builder
        $builder = $this->db->table($table);

        // Insert the data
        $builder->insert($data);
    }
}

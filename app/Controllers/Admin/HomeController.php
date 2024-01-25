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
        $this->validation = \Config\Services::validation();
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
    public function appliedVisaList()
    {
        $admin_id = $this->session->has('admin_id');
		if($admin_id)
		{
            $query = $this->db->table('visa_application');
            $results = $query->get()->getResult();
            echo view('admin/common/header');
            echo view('admin/common/sidebar');
            echo view('admin/pages/applied_visa_list', ['data' => $results]);
            echo view('admin/common/footer');
		}
		else
		{
            return redirect()->route('admin');
		}
    }
    public function editAppliedVisaList($id)
    {
        $admin_id = $this->session->has('admin_id');
		if($admin_id)
		{
            $query = $this->db->table('visa_application');
            $condition = ['visa_application.id' => $id];
            $query->where($condition);
            $query->join('children_visa', 'children_visa.parent_id = visa_application.id', 'left');

            // Correct selection of columns
            $query->select('visa_application.*, children_visa.id as child_id, children_visa.child, children_visa.children_name, children_visa.children_gender, children_visa.children_dob, children_visa.children_photo, children_visa.status as child_status');

            $results = $query->get()->getResult();
            $data = [
                'id' => "",
                'full_name' => "",
                'email' => "",
                'phone' => "",
                'nationality' => "",
                'purpose_of_entry' => "",
                'photo' => "./assets/upload/photo/evisa-portrait-photo.jpg",
                'doc' => "./assets/upload/doc/evisa_passport_photo.jpg",
                'entry_checkpoint' => "",
                'status' => "Pending",
                'date_valid' => ""
            ];
            $firstChild = [
                'child_one' => 0,
                'evisa_childrenName1' => "",
                'evisa_childrenSex1' => "",
                'evisa_childrenDOB1' => "",
                'childphoto1' => "./assets/upload/children/evisa-child1-photo.jpg"
            ];
            $secondChild = [
                'child_two' => 0,
                'evisa_childrenName2' => "",
                'evisa_childrenSex2' => "",
                'evisa_childrenDOB2' => "",
                'childphoto2' => "./assets/upload/children/evisa-child2-photo.jpg"
            ];
            // pre($results);


            if (!empty($results)) {

                foreach ($results as $key => $value) {
                    $data = [
                        'id' => $value->id,
                        'full_name' => $value->full_name,
                        'email' => $value->email,
                        'phone' => $value->phone,
                        'nationality' => $value->nationality,
                        'purpose_of_entry' => $value->purpose_of_entry,
                        'photo' => (!empty($value->photo))? $value->photo:"./assets/upload/photo/evisa-portrait-photo.jpg",
                        'doc' => (!empty($value->doc))? $value->doc:"./assets/upload/doc/evisa_passport_photo.jpg",
                        'entry_checkpoint' => $value->entry_checkpoint,
                        'status' => $value->status,
                        'date_valid' => $value->date_valid
                    ];
                    if ($value->child==1) {
                        $firstChild = [
                            'child_one' => $value->child_id,
                            'evisa_childrenName1' => $value->children_name,
                            'evisa_childrenSex1' => $value->children_gender,
                            'evisa_childrenDOB1' => $value->children_dob,
                            'childphoto1' => (!empty($value->children_photo)) ? $value->children_photo : "./assets/upload/children/evisa-child1-photo.jpg"
                        ];
                    }
                    if ($value->child==2) {
                        $secondChild = [
                            'child_two' => $value->child_id,
                            'evisa_childrenName2' => $value->children_name,
                            'evisa_childrenSex2' => $value->children_gender,
                            'evisa_childrenDOB2' => $value->children_dob,
                            'childphoto2' =>(!empty($value->children_photo)) ? $value->children_photo : "./assets/upload/children/evisa-child2-photo.jpg"
                        ];
                    }
                }
    
                $result = array_merge($data,$firstChild,$secondChild);
                // pre($result);
                echo view('admin/common/header');
                echo view('admin/common/sidebar');
                echo view('admin/pages/edit_applied_visa', ['data' => $result]);
                echo view('admin/common/footer');
            }else {
                return redirect()->route('admin/applied-visa');
            }
		}
		else
		{
            return redirect()->route('admin');
		}
    }

        /** visa Form submission start */

	public function updateVisaForm($visaId,$child_one,$child_two)
	{
        $data = $this->visaFormValidation();
        // Now, you can use the validation instance to check the rules
        if ($data['status']) {
            $childFormStatus = $this->checkChildFormValidation();
            if (empty($data['formData']['photo'])) {
                unset($data['formData']['photo']);
            }
            if (empty($data['formData']['doc'])) {
                unset($data['formData']['doc']);
            }
            $this->updateFormData("id", $visaId, $data['formData'], "visa_application");
            if ($childFormStatus['firstChildStatus']) {
                if (empty($childFormStatus['firstChildData']['children_photo'])) {
                    unset($childFormStatus['firstChildData']['children_photo']);
                }
                $this->updateFormData("id", $child_one, $childFormStatus['firstChildData'], "children_visa");
            }
            if ($childFormStatus['secondChildStatus']) {
                if (empty($childFormStatus['secondChildData']['children_photo'])) {
                    unset($childFormStatus['secondChildData']['children_photo']);
                }
                $this->updateFormData("id", $child_two, $childFormStatus['secondChildData'], "children_visa");
            }
            $this->session->setFlashdata('success', 'Submitted successfully!');
            return redirect()->to("/admin/edit-applied-visa/{$visaId}");
        } else {
            // Validation failed
            $errors = $this->validation->getErrors();
            // Validation failed, return to the form with errors
        }
        $this->session->setFlashdata('error', 'An error occurred!');
        return redirect()->to("/admin/edit-applied-visa/{$visaId}");
	}

    public function checkChildFormValidation() {
        $firstChildValidation = $this->validateChildData(1);
        $firstChildStatus = $firstChildValidation['status'];
        $firstChildData = $firstChildValidation['formData'];        
        $secondChildStatus = false;
        $secondChildData = [];
        if ($firstChildStatus) {
            $secondChildValidation = $this->validateChildData(2);
            $secondChildStatus = $secondChildValidation['status'];
            $secondChildData = $secondChildValidation['formData'];
        }
        return [
            "firstChildStatus" => $firstChildStatus,
            "firstChildData" => $firstChildData,
            "secondChildStatus" => $secondChildStatus,
            "secondChildData" => $secondChildData,
        ];
    }
    
    public function validateChildData($child) {
        $img_data = $this->processChildImage($child);

        $photo = $img_data['photo'];
        $children_name = $_POST['evisa_childrenName'.$child]??"";
        $children_gender = $_POST['evisa_childrenSex'.$child]??"";
        $children_dob = $_POST['evisa_childrenDOB'.$child]??"";
        $formData = [
            'children_name' => $children_name,
            'children_gender' => $children_gender,
            'children_dob' => $children_dob,
            'children_photo' => $photo
        ];

        $rules = [
            'children_name' => 'required',
            'children_gender' => 'required',
            'children_dob' => 'required'
        ];
        
        // Set the rules
        $this->validation->setRules($rules);
        $status =  $this->validation->run($formData);
        return [
            "status" => $status,
            "formData" => $formData
        ];
    }

    public function processChildImage($child)
    {
        $key = 'childphoto'.$child;
        $result['photo'] = "";
        // Get the uploaded image file
        $imageFile = $this->request->getFile($key);
        $data = [
            "photo" => [
                "file" => $imageFile,
                "path" => './assets/upload/children/',
            ]
        ];

        return $this->uploadImg($data, $result);
    } 

    public function visaFormValidation() {
        $img_data = $this->processImage();

        $photo = $img_data['photo'];
        $doc = $img_data['doc'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $status = $_POST['status'];
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
            'status' => $status,
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
            'status' => 'required',
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

        $result = $this->uploadImg($data, $result);
        return $result;
    }

    public function uploadImg($imgData, $result) {
        foreach ($imgData as $key => $value) {
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
    public function updateFormData($key, $id, $data, $table) {
        // Get an instance of the database query builder
        $builder = $this->db->table($table);
    
        // Update the data based on the provided ID
        $builder->where($key, $id);
        $builder->update($data);
    
        // Return the number of affected rows (can be used to check if the update was successful)
        return $this->db->affectedRows();
    }

    /** visa Form submission end */
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('student_model');

        // Check if user is logged in
        if (!$this->session->userdata('username')) {
            redirect('user/login');
        }
    }

    /**
     * Display a list of students.
     */
    public function index() {
        $data['students'] = $this->student_model->get_students();
        $this->load->view('index', $data);
    }
    

    public function create() {
        $this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
        $this->form_validation->set_rules('enrollment_date', 'Enrollment Date', 'required');
        $this->form_validation->set_rules('enrollment_number', 'Enrollment Number', 'required');
        $this->form_validation->set_rules('course', 'Course', 'required');
        $this->form_validation->set_rules('year', 'Year', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('create');
        } else {
            $data = array(
                'fullname' => $this->input->post('fullname'),
                'email' => $this->input->post('email'),
                'date_of_birth' => $this->input->post('date_of_birth'),
                'gender' => $this->input->post('gender'),
                'address' => $this->input->post('address'),
                'phone_number' => $this->input->post('phone_number'),
                'enrollment_date' => $this->input->post('enrollment_date'),
                'enrollment_number' => $this->input->post('enrollment_number'),
                'course' => $this->input->post('course'),
                'year' => $this->input->post('year'),
                'status' => $this->input->post('status')
            );
    
            // Handle file upload
            if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
                $upload_path = 'uploads/profile_images/';
                if (!is_dir($upload_path)) {
                    mkdir($upload_path, 0777, true);
                }
                $file_name = basename($_FILES['profile_image']['name']);
                $file_tmp = $_FILES['profile_image']['tmp_name'];
                $file_path = $file_name . '_'  . time() ;
    
                if (move_uploaded_file($file_tmp, $file_path)) {
                    $data['image_path'] = $file_path;  // Change 'profile_image' to 'image_path'
                } else {
                    $data['upload_error'] = 'Failed to move uploaded file.';
                }
            }
    
            $this->student_model->add_student($data);
            redirect('students');
        }
    }
    
    public function edit($id) {
        $this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
        $this->form_validation->set_rules('enrollment_date', 'Enrollment Date', 'required');
        $this->form_validation->set_rules('enrollment_number', 'Enrollment Number', 'required');
        $this->form_validation->set_rules('course', 'Course', 'required');
        $this->form_validation->set_rules('year', 'Year', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $data['student'] = $this->student_model->get_student($id);
            $this->load->view('edit', $data);
        } else {
            $data = array(
                'fullname' => $this->input->post('fullname'),
                'email' => $this->input->post('email'),
                'date_of_birth' => $this->input->post('date_of_birth'),
                'gender' => $this->input->post('gender'),
                'address' => $this->input->post('address'),
                'phone_number' => $this->input->post('phone_number'),
                'enrollment_date' => $this->input->post('enrollment_date'),
                'enrollment_number' => $this->input->post('enrollment_number'),
                'course' => $this->input->post('course'),
                'year' => $this->input->post('year'),
                'status' => $this->input->post('status')
            );
    
            // Add image file to data if uploaded
            if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
                $upload_path = 'uploads/profile_images/';
                if (!is_dir($upload_path)) {
                    mkdir($upload_path, 0777, true);
                }
                $file_name = basename($_FILES['profile_image']['name']);
                $file_tmp = $_FILES['profile_image']['tmp_name'];
                $file_path = $upload_path . time() . '_' . $file_name;
    
                if (move_uploaded_file($file_tmp, $file_path)) {
                    $data['image_path'] = $file_path;
                } else {
                    $data['upload_error'] = 'Failed to move uploaded file.';
                }
            }
    
            $this->student_model->update_student($id, $data);
            redirect('students');
        }
    }


    // orginal code
    // /**
    //  * Edit an existing student.
    //  *
    //  * @param int $id Student ID
    //  */
    // public function edit($id) {
    //     $this->form_validation->set_rules('fullname', 'Fullname', 'required');
    //     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    //     $this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required');
    //     $this->form_validation->set_rules('gender', 'Gender', 'required');
    //     $this->form_validation->set_rules('address', 'Address', 'required');
    //     $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
    //     $this->form_validation->set_rules('enrollment_date', 'Enrollment Date', 'required');
    //     $this->form_validation->set_rules('enrollment_number', 'Enrollment Number', 'required');
    //     $this->form_validation->set_rules('course', 'Course', 'required');
    //     $this->form_validation->set_rules('year', 'Year', 'required');
    //     $this->form_validation->set_rules('status', 'Status', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         $data['student'] = $this->student_model->get_student($id);
    //         $this->load->view('edit', $data);
    //     } else {
    //         $data = array(
    //             'fullname' => $this->input->post('fullname'),
    //             'email' => $this->input->post('email'),
    //             'date_of_birth' => $this->input->post('date_of_birth'),
    //             'gender' => $this->input->post('gender'),
    //             'address' => $this->input->post('address'),
    //             'phone_number' => $this->input->post('phone_number'),
    //             'enrollment_date' => $this->input->post('enrollment_date'),
    //             'enrollment_number' => $this->input->post('enrollment_number'),
    //             'course' => $this->input->post('course'),
    //             'year' => $this->input->post('year'),
    //             'status' => $this->input->post('status')
    //         );
    //         $this->student_model->update_student($id, $data);
    //         redirect('students');
    //     }
    // }

//     /**
//  * Edit an existing student.
//  *
//  * @param int $id Student ID
//  */
// public function edit($id) {
//     // Validate form inputs
//     $this->form_validation->set_rules('fullname', 'Fullname', 'required');
//     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
//     $this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required');
//     $this->form_validation->set_rules('gender', 'Gender', 'required');
//     $this->form_validation->set_rules('address', 'Address', 'required');
//     $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
//     $this->form_validation->set_rules('enrollment_date', 'Enrollment Date', 'required');
//     $this->form_validation->set_rules('enrollment_number', 'Enrollment Number', 'required');
//     $this->form_validation->set_rules('course', 'Course', 'required');
//     $this->form_validation->set_rules('year', 'Year', 'required');
//     $this->form_validation->set_rules('status', 'Status', 'required');

//     if ($this->form_validation->run() == FALSE) {
//         // If validation fails, load the edit view again with the existing student data
//         $data['student'] = $this->student_model->get_student($id);
//         $this->load->view('edit', $data);
//     } else {
//         // If validation passes, check if an image is uploaded
//         if ($this->upload_image()) {
//             // If image upload is successful, proceed to update student
//             $data = array(
//                 'fullname' => $this->input->post('fullname'),
//                 'email' => $this->input->post('email'),
//                 'date_of_birth' => $this->input->post('date_of_birth'),
//                 'gender' => $this->input->post('gender'),
//                 'address' => $this->input->post('address'),
//                 'phone_number' => $this->input->post('phone_number'),
//                 'enrollment_date' => $this->input->post('enrollment_date'),
//                 'enrollment_number' => $this->input->post('enrollment_number'),
//                 'course' => $this->input->post('course'),
//                 'year' => $this->input->post('year'),
//                 'status' => $this->input->post('status')
//             );
//             $this->student_model->update_student($id, $data);
//             redirect('students');
//         } else {
//             // If image upload fails, display errors and load the edit view again with existing student data
//             $data['error'] = $this->upload->display_errors();
//             $data['student'] = $this->student_model->get_student($id);
//             $this->load->view('edit', $data);
//         }
//     }
// }


    /**
     * Delete a student.
     *
     * @param int $id Student ID
     */
    public function delete($id) {
        $this->student_model->delete_student($id);
        redirect('students');
    }

    public function upload_image() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 1024; // 1MB
        $config['max_width'] = 1024;
        $config['max_height'] = 1024;
    
        $this->load->library('upload', $config);
    
        if (!$this->upload->do_upload('image')) {
            $this->form_validation->set_message('upload_image', $this->upload->display_errors());
            return false;
        } else {
            return true;
        }
    }

}
?>

<?php
class Student_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Ensure the database library is loaded
    }

    public function get_students() {
        return $this->db->get('students')->result();
    }

    public function get_student($id) {
        return $this->db->get_where('students', array('id' => $id))->row();
    }

    public function add_student($data) {
        $this->db->insert('students', $data);
        return $this->db->insert_id();
    }

    public function delete_student($id) {
        $this->db->where('id', $id);
        $this->db->delete('students');
    }

    public function update_student($id, $data) {
        // Check if an image is being uploaded
        if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
            $upload_path = 'uploads/profile_images/'; // Define your upload directory
    
            // Ensure the upload directory exists
            if (!is_dir($upload_path)) {
                mkdir($upload_path, 0777, true);
            }
    
            $file_name = basename($_FILES['profile_image']['name']);
            $file_tmp = $_FILES['profile_image']['tmp_name'];
    
            // Generate a unique file name to avoid overwriting existing files
            $file_path = $upload_path . time() . '_' . $file_name;
    
            if (move_uploaded_file($file_tmp, $file_path)) {
                // Add the file path to the data array
                $data['profile_image'] = $file_path;
            } else {
                // Handle the error if the file couldn't be moved
                $data['upload_error'] = 'Failed to move uploaded file.';
            }
        }
    
        // Update the student record in the database
        $this->db->where('id', $id);
        return $this->db->update('students', $data);
    }
    
}
?>

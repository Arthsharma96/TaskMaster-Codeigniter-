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
        if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $upload_path = 'uploads/'; // Define your upload directory
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_path = $upload_path . $file_name;
    
            move_uploaded_file($file_tmp, $file_path);
    
            $data['image_path'] = $file_path;
        }
    
        $this->db->where('id', $id);
        $this->db->update('students', $data);
    }
}
?>

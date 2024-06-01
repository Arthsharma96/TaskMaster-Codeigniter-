<?php
class Items extends CI_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->library('session');
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->load->model('item_model');

      // Check if user is logged in
      if (!$this->session->userdata('username')) {
        redirect('user/login');
    }
  }

    public function index() {
        $data['items'] = $this->item_model->get_items();
        $this->load->view('index', $data);
    }

    public function create() {
        // Handle form submission to add a new item
        if ($_POST) {
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price')
            );
            $this->item_model->add_item($data);
            redirect('items');
        } else {
            $this->load->view('create');
        }
    }

    public function edit($id) {
        // Handle form submission to update an item
        if ($_POST) {
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price')
            );
            $this->item_model->update_item($id, $data);
            redirect('items');
        } else {
            $data['item'] = $this->item_model->get_item($id);
            $this->load->view('edit', $data);
        }
    }

    public function delete($id) {
        $this->item_model->delete_item($id);
        redirect('items');
    }
}

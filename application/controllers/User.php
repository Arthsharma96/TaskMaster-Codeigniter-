<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public $session;
    public $form_validation;
    public $db;
    public $User_model;

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('User_model'); // Ensure this line is present to load the model
    }

    public function login() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->User_model->get_user($username);

            if ($user && password_verify($password, $user->password)) {
                $this->session->set_userdata('username', $username);
                redirect('students/index');
            } else {
                $this->session->set_flashdata('error', 'Invalid username or password');
                redirect('user/login');
            }
        }
    }

    public function register() {
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        } else {
            $username = $this->input->post('username');
            $password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

            $this->User_model->insert_user(array('username' => $username, 'password' => $password)); // Ensure this line is present
            $this->session->set_flashdata('success', 'Your account has been created. You can now log in.');
            redirect('user/login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();
        redirect('user/login');
    }

    public function profile() {
        if (!$this->session->userdata('username')) {
            redirect('user/login');
        }
        $data['username'] = $this->session->userdata('username');
        $this->load->view('profile', $data);
    }
}

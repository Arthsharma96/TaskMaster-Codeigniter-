<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// class Welcome extends CI_Controller {

// 	/**
// 	 * Index Page for this controller.
// 	 *
// 	 * Maps to the following URL
// 	 * 		http://example.com/index.php/welcome
// 	 *	- or -
// 	 * 		http://example.com/index.php/welcome/index
// 	 *	- or -
// 	 * Since this controller is set as the default controller in
// 	 * config/routes.php, it's displayed at http://example.com/
// 	 *
// 	 * So any other public methods not prefixed with an underscore will
// 	 * map to /index.php/welcome/<method_name>
// 	 * @see https://codeigniter.com/userguide3/general/urls.html
// 	 */
// 	public function index()
// 	{
// 		$this->load->view('welcome_message');
// 	}
// }

class Welcome extends CI_Controller
{
    private $dynamicProperties = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function __get($name)
    {
        return array_key_exists($name, $this->dynamicProperties) ? $this->dynamicProperties[$name] : null;
    }

    public function __set($name, $value)
    {
        $this->dynamicProperties[$name] = $value;
    }

    public function index()
    {
		$this->load->view('welcome_message');
    }
}


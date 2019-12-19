<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	public function __construct(){
        parent::__construct();
    }
        public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/V_dashboard');
		$this->load->view('layouts/footer');
    }
}

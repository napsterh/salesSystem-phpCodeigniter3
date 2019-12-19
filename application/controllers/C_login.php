<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("M_login");
    }
        public function index()
	{
		//$this->load->view('layouts/header');
		//$this->load->view('layouts/aside');
		$this->load->view('admin/V_login');
		//$this->load->view('layouts/footer');
    }
    
    public function login(){
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $res = $this->M_login->login($username, sha1($password));

        if(!$res){
            redirect(base_url());
        }
        else {
            $data = array(
                'id' => $res->id_usuarios,
                'nombre' => $res->nombres,
                'rol' => $res->rol_id,
                'login' => $res-> TRUE
            );
            $tihs->session->set_userdata($data);
            redirect(base_url()."C_dashboard");
        }
    }
}

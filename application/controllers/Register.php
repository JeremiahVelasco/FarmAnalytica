<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    function __Construct(){
        parent::__Construct();
        $this->load->helper('url'); 
        $this->load->helper(array('form','url'));
        $this->load->library(array('form_validation'));
        $this->load->model('UserModel');  
    }
	public function index()
	{ 
        $this->form_validation->set_rules('firstname','Firstname','required|alpha');
        $this->form_validation->set_rules('lastname','lastname','required|alpha');
        $this->form_validation->set_rules('municipality','Municipality','required');
        $this->form_validation->set_rules('province','Province','required');
        $this->form_validation->set_rules('region','Region','required');
        $this->form_validation->set_rules('password','Password','required|min_length[8]');
        $this->form_validation->set_rules('confirmpassword','Confirm Password','required|matches[password]');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run()==FALSE){
            $this->load->view('registration');
        }
		else{
            $this->UserModel->addUser();
            $this->load->view('login');
        }
	}
}


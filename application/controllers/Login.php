<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    function __Construct(){
        parent::__Construct();
        $this->load->helper('url');
        $this->load->database(); 
        $this->load->helper(array('form','url'));
        $this->load->library(array('form_validation', 'session'));
    }
    public function index(){
        $this->form_validation->set_rules('email','Email Address',array(
            'required',
            array(
                'email_exists',
                function($email){
                    $result=0;
                    $this->db->where_in('email',$email);
                    $result=$this->db->count_all_results('users');
                    if($result>0){
                        return TRUE;
                    }
                    else{
                        $this->form_validation->set_message('email_exists',"Invalid Email");
                        return FALSE;
                    }
                }
            )
        ));
        $this->form_validation->set_rules('password',"Password",array(
           'required',
           array(
               'password_correct',
               function($pass){
                    $result=0;
                    $encryptpass=md5($pass);
                    $this->db->where_in('email',$_POST['email']);
                    $this->db->where_in('password',$encryptpass);
                    $result=$this->db->count_all_results('users');
                    if($result>0){
                        return TRUE;
                    }
                    else{
                        $this->form_validation->set_message('password_correct',"Invalid Password");
                        return FALSE;
                    }
               } 
           ) 
        ));
        if($this->form_validation->run()==FALSE){
            $this->load->view('login');
        }
        else{
            $this->load->view('landing');
            $this->session->set_userdata('userbase', $_POST["email"]);
        }
    }
}
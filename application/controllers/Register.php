<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH . 'controllers/Firebase.php');


class Register extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form','url'));
        $this->load->library(array('form_validation'));
        $this->load->model('UserModel');
        // No need to load the 'firebase' library as Firebase class is already defined in the same file
    }

    public function index() {
        $this->form_validation->set_rules('firstName', 'Firstname', 'required|alpha');
        $this->form_validation->set_rules('lastName', 'Lastname', 'required|alpha');
        $this->form_validation->set_rules('municipality', 'Municipality', 'required');
        $this->form_validation->set_rules('province', 'Province', 'required');
        $this->form_validation->set_rules('region', 'Region', 'required');
        $this->form_validation->set_rules('soilType', 'soilType', 'required');
        $this->form_validation->set_rules('areaFarm', 'areaFarm', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('registration');
        } 
        else {
            $user_data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'firstName' => $this->input->post('firstName'),
                'lastName' => $this->input->post('lastName'),
                'municipality' => $this->input->post('municipality'),
                'province' => $this->input->post('province'),
                'region' => $this->input->post('region'),
                'soilType' => $this->input->post('soilType'),
                'areaFarm' => $this->input->post('areaFarm')
                // Add other user data as needed
            );

            // Create the user in Firebase Authentication
            $firebase = new Firebase();
            $firebase_user = $firebase->getAuth()->createUserWithEmailAndPassword(
                $user_data['email'],
                $user_data['password']
            );

            // Generate the email verification link
            $link = $firebase->getAuth()->sendEmailVerificationLink($user_data['email']);

            // Add the user data to the Realtime Database
            $database = $firebase->getDatabase();
            $database->getReference('users')->push($user_data);
            
            $this->load->view('login');
        }
    }  
}


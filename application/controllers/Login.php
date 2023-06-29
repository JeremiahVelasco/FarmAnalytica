<?php
defined('BASEPATH') OR exit('No direct script access allowed');


use Kreait\Firebase\Factory;
use Kreait\Firebase\Contract\Auth;

class Login extends CI_Controller {
    private $firebase;
    private $database;
    private $userModel;


    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->helper(array('form','url'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->model("UserModel");

        $this->firebase = (new Factory())
            ->withServiceAccount(__DIR__.'/credentials.json')
            ->withDatabaseUri('https://farmanalytica-default-rtdb.firebaseio.com');

            $this->database = $this->firebase->createDatabase();
            $this->userModel = new UserModel();
    
            // Set the $database object in UserModel
            $this->userModel->setDatabase($this->database);

    }

    public function index() {
        $this->form_validation->set_rules('email','Email Address', array(
            'required',
            array(
                'email_exists',
                function($email) {
                    try {
                        // Check if the user exists in Firebase Authentication
                        $user = $this->firebase->createAuth()->getUserByEmail($email);
                        return TRUE;
                    } catch (\Kreait\Firebase\Exception\AuthException $e) {
                        $this->form_validation->set_message('email_exists', 'Invalid Email');
                        return FALSE;
                    }
                }
            )
        ));
        $this->form_validation->set_rules('password',"Password", array(
            'required',
            array(
                'password_correct',
                function($pass) {
                    $email = $this->input->post('email');
                    try {
                        // Sign in the user using Firebase Authentication
                        $this->firebase->createAuth()->signInWithEmailAndPassword($email, $pass);
                        return TRUE;
                    } catch (\Kreait\Firebase\Exception\AuthException $e) {
                        $this->form_validation->set_message('password_correct', 'Invalid Password');
                        return FALSE;
                    }
                }
            )
        ));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $email = $this->input->post('email');

            // Retrieve user data from Realtime Database
            $database = $this->firebase->createDatabase();
            $userRef = $database->getReference('users')->orderByChild('email')->equalTo($email)->getSnapshot();

            if ($userRef->numChildren() > 0) {
                // User exists in the database
                $userData = $userRef->getValue();
                $userInfo = reset($userData);

                $this->session->set_userdata('userbase', $email);
                $data['infos'] = $userInfo;
                $this->load->view('landing', $data);
            } else {
                // User not found in the database
                $this->form_validation->set_message('email_exists', 'Invalid Email');
                $this->load->view('login');
            }
        }
    }
}

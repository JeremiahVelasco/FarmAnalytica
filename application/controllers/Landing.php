<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require '../vendor/autoload.php';


use Kreait\Firebase\Factory;
use Kreait\Firebase\Contract\Auth;

class Landing extends CI_Controller {
    private $firebase;
    private $database;


  function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->helper(array('form','url'));
        $this->load->library(array('form_validation', 'session'));

        $this->firebase = (new Factory())
            ->withServiceAccount(__DIR__.'/credentials.json')
            ->withDatabaseUri('https://farmanalytica-default-rtdb.firebaseio.com');

        $this->database = $this->firebase->createDatabase();
    }

    public function home()
    {
        $this->load->view('landing');
    }

    public function about()
    {
        $this->load->view('about');
    }

    public function contact()
    {
        $this->load->view('contact');
    }

    public function profile()
    {
        $this->load->view('profile');
    }

    public function appCR()
    {
        $this->load->view('application/appcr');
    }

    public function GoToProfile() 
    {
        $email = $this->session->userdata('userbase');
        
        // Retrieve user data from Realtime Database
        $userRef = $this->database->getReference('users')->orderByChild('email')->equalTo($email)->getSnapshot();

        if ($userRef->numChildren() > 0) {
            // User exists in the database
            $userData = $userRef->getValue();
            $userInfo = reset($userData);
            
            $data = [
                'infos' => $userInfo,
                'infos' => $userInfo,
                'email' => $userInfo['email'],
                'firstName' => $userInfo['firstName'],
                'lastName' => $userInfo['lastName'],
                'municipality' => $userInfo['municipality'],
                'province' => $userInfo['province'],
                'region' => $userInfo['region'],
                'soilType' => $userInfo['soilType'],
                'areaFarm' => $userInfo['areaFarm']
            ];
            
            $this->load->view('ProfilePage', $data);
        } else {
            // User not found in the database
            $this->form_validation->set_message('email_exists', 'Invalid Email');
            $this->load->view('login');
        }
        
    }

}

?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

  function __Construct() {
    parent::__construct();
    
    // Load url helper
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->model("UserModel");
    }

    public function index()
    {
        $this->load->view('about');
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
      $data["infos"] = $this->UserModel->getUserInfo($_SESSION["userbase"]);
      $this->load->view('ProfilePage', $data);
      echo "</br>";
    }  
}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

  function __Construct() {
    parent::__construct();
    
    // Load url helper
    $this->load->helper('url');
    $this->load->library('session');
    }

    public function index()
    {
      header('location:'.base_url('Login'));
      session_destroy();
    }
}

?>
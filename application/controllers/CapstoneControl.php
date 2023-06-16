<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CapstoneControl extends CI_Controller {

  function __construct() {
    parent::__construct();
    
    // Load url helper
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->model("UserModel");
    }


    public function about()
    {
        $this->load->view('about');
    }

  /* ---------------------------------------------- 1ST METHOD OF THE CLASS -------------------------------------------------- */
    public function GoToProfile() 
    {
      $data["infos"] = $this->UserModel->getUserInfo($_SESSION["userbase"]);
      $this->load->view('ProfilePage', $data);
      echo "</br>";
    }  

  /* ---------------------------------------------- 2ND METHOD OF THE CLASS -------------------------------------------------- */
    public function EditProfile()
    {
      $data["infos"] = $this->UserModel->getUserInfo($_SESSION["userbase"]);
      $this->load->view('EditProfilePageCapstone', $data);
      echo "</br>";
    } 

  
    public function UpdateFirstName()
    {
      $this->UserModel->setFirstName($_SESSION["userbase"]);
      header("location:".base_url('CapstoneControl/EditProfile'));
    } 

    public function UpdateLastName()
    {
      $this->UserModel->setLastName($_SESSION["userbase"]);
      header("location:".base_url('CapstoneControl/EditProfile'));
    } 

    public function UpdateMunicipality()
    {
      $this->UserModel->setMunicipality($_SESSION["userbase"]);
      header("location:".base_url('CapstoneControl/EditProfile'));
    } 

    public function UpdateProvince()
    {
      $this->UserModel->setProvince($_SESSION["userbase"]);
      header("location:".base_url('CapstoneControl/EditProfile'));
    } 

    public function UpdateRegion()
    {
      $this->UserModel->setRegion($_SESSION["userbase"]);
      header("location:".base_url('CapstoneControl/EditProfile'));
    } 

    public function UpdateEmail()
    {
      $this->UserModel->setEmail($_SESSION["userbase"]);
      $_SESSION['userbase'] = $this->UserModel->getEmail();
      header("location:".base_url('CapstoneControl/EditProfile'));
    } 

}

?>
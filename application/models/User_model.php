<?php

  class User_model extends CI_Model {
    public $id;
    public $firstname;
    public $middlename;
    public $lastname;
    public $username;
    public $password;
    public $birthday;
    public $email;
    public $contactnum;

  /* CREATE A USER FUNCTION ----------------------------------------------------------------------------------------------------------------------------------------------------------------- */
    public function createAUser() 
    {
      $this->load->database();
      
      $this->firstname = $_POST['firstname'];
      $this->middlename = $_POST['middlename'];
      $this->lastname = $_POST['lastname'];
      $this->username = $_POST['username'];
      $this->password = md5($_POST['password']);
      $this->birthday = $_POST['birthday'];
      $this->email = $_POST['email'];
      $this->contactnum = $_POST['contactnum'];

      $this->db->insert('theusers', $this);
    }

  /* CHECK LOGIN CREDENTIALS FUNCTION ------------------------------------------------------------------------------------------------------------------------------------------------------- */
    public function checkLoginCredentials() {
      $result;
      $query;
      $this->load->database();
      $this->username = $_POST['username'];
      $this->db->where('username', $this->username);
      $query =$this->db->get('theusers');
      $result = $query->result();
      return $result;
    }

  /* RESET USER PASSWORD FUNCTION ----------------------------------------------------------------------------------------------------------------------------------------------------------- */
    public function resetUserPassword() {
      $this->load->database();
      $this->password = md5($_POST['newpassword']);
      $prevpass=md5($_POST["currentpassword"]);
      $this->db->set('password', $this->password);
      $this->db->where('password', $prevpass);
      $this->db->update('theusers');
    }
  }
?>

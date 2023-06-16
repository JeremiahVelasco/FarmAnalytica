<?php
class UserModel extends CI_Model{
    public function addUser(){
        $this->load->database();
        $data=array(
            'first_name'=>$_POST["firstname"],
            'last_name'=>$_POST["lastname"],
            'municipality'=>$_POST["municipality"],
            'province'=>$_POST["province"],
            'region'=>$_POST["region"],
            'password'=>md5($_POST["password"]),
            'email' =>$_POST["email"]
        );
        $this->db->insert('users',$data);
    }

    /* GET USER INFO FUNCTION ----------------------------------------------------------------------------------------------------------------------------------------------------------- */
    public function getUserInfo($email) {
        $this->load->database();
        $this->db->where("email", $email);
        $query = $this->db->get("users");
        $result = $query->result();
        return $result;
      }  
    
      public function setFirstName($email) {
        $this->load->database();
        $data=array(
            'first_name'=>$_POST["firstname"]
        );
        $this->db->where('email', $email);
        $this->db->update('users', $data);
      }

      public function setLastName($email) {
        $this->load->database();
        $data=array(
            'last_name'=>$_POST["lastname"]
        );
        $this->db->where('email', $email);
        $this->db->update('users', $data);
      }

      public function setMunicipality($email) {
        $this->load->database();
        $data=array(
            'municipality'=>$_POST["municipality"]
        );
        $this->db->where('email', $email);
        $this->db->update('users', $data);
      }

      public function setProvince($email) {
        $this->load->database();
        $data=array(
            'province'=>$_POST["province"]
        );
        $this->db->where('email', $email);
        $this->db->update('users', $data);
      }

      public function setRegion($email) {
        $this->load->database();
        $data=array(
            'region'=>$_POST["region"]
        );
        $this->db->where('email', $email);
        $this->db->update('users', $data);
      }

      public function setEmail($email) {
        $this->load->database();
        $data=array(
            'email' =>$_POST["email"]
        );
        $this->db->where('email', $email);
        $this->db->update('users', $data);
      }

      public function getEmail() {
        $this->load->database();
        $result = "";
        $data=array(
            'email' =>$_POST["email"]
        );
        $this->db->where('email', $data['email']);
        $query = $this->db->get('users');
        foreach($query->result() as $row) {
            $result = $row->email;
        }
        return $result;
      }
}
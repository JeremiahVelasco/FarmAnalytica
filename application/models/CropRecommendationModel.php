<?php

class CropRecommendationModel extends CI_Model{

    // FUNCTION TO INSERT DATA TO DATABASE - TABLE - datacroprecommendation
    public function inputCR(){
        $this->load->database();
        $data=array(
            'N'=>$_POST["N"],
            'P'=>$_POST["P"],
            'K'=>$_POST["K"],
            'temperature'=>$_POST["temperature"],
            'humidity'=>$_POST["humidity"],
            'precipitation'=>$_POST["precipitation"],
        );
        $this->db->insert('datacroprecommendation',$data);
    }

}
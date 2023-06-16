<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use joblib as joblib;

class CropYield extends CI_Controller {
    function __Construct(){
        parent::__Construct();
        $this->load->helper('url'); 
        $this->load->helper(array('form','url'));
        $this->load->library(array('form_validation'));
        $this->load->model('CropRecommendationModel');
    }

    public function home()
    {
        $this->load->view('.../landing');
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
        $this->load->view('appcr');
    }

    public function appFR()
    {
        $this->load->view('appfr');
    }

    public function appCY()
    {
        $this->load->view('appcy');
    }

    public function finish()
    {
        $this->load->view('landing');
    }

    public function processcr()
    {
    // Load the machine learning model from the pkl file
    $model = joblib::load('pickledfiles/cropRecommendationA1.pkl');

    // Retrieve the user input data
    $N = $this->input->post('N');
    $P = $this->input->post('P');
    $K = $this->input->post('K');
    $temperature = $this->input->post('temperature');
    $humidity = $this->input->post('humidity');
    $precipitation = $this->input->post('precipitation');
    $crop = $this->input->post('crop');

    // Perform any necessary validation or data preprocessing

    // Prepare the input data for prediction
    $inputData = [
        $N, $P, $K, $temperature, $humidity, $precipitation
    ];

    // Apply the machine learning model to the input data
    $result = $model->predict([$inputData]);

    // Pass the result and any other necessary data to a view for display
    $data['result'] = $result;
    $this->load->view('appcy', $data);
    }

	public function index()
	{ 
        $this->form_validation->set_rules('N','N','required');
        $this->form_validation->set_rules('P','P','required');
        $this->form_validation->set_rules('K','K','required');
        $this->form_validation->set_rules('temperature','Temperature','required');
        $this->form_validation->set_rules('humidity','Humidity','required');
        $this->form_validation->set_rules('precipitation','Precipitation','required');
        $this->form_validation->set_rules('crop','Crop','required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('appcy');
        }
		else{
            $this->UserModel->addUser();
            $this->load->view('appFR');
        }
	}
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CropRecommendation extends CI_Controller {
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
        $this->load->view('application/appcr');
    }

    public function appFR()
    {
        $this->load->view('appfr');
    }

    public function appCY()
    {
        $this->load->view('appcy');
    }

    // INPUT TO DATABASE
	public function inputCR()
	{ 

        $N = $this->input->post('N');
        $P = $this->input->post('P');
        $K = $this->input->post('K');
        $temperature = $this->input->post('temperature');
        $humidity = $this->input->post('humidity');
        $precipitation = $this->input->post('precipitation');

        $this->form_validation->set_rules('N','N','required');
        $this->form_validation->set_rules('P','P','required');
        $this->form_validation->set_rules('K','K','required');
        $this->form_validation->set_rules('temperature','Temperature','required');
        $this->form_validation->set_rules('humidity','Humidity','required');
        $this->form_validation->set_rules('precipitation','Precipitation','required');

        $data = [
            'n' => $N,
            'p' => $P,
            'k' => $K,
            'temperature' => $temperature,
            'humidity' => $humidity,
            'precipitation' => $precipitation,
        ];

        if($this->form_validation->run()==FALSE){
            $this->load->view('application/appcr');
        }
		else{
            $this->CropRecommendationModel->inputCR($data);
            $this->load->view('application/appFR');
        }
	}

    public function profileLocation()
    {
        $city_name = 'Manila';
        $weather_api_key = 'a3742f0932b641619fd111204230306';
        $weather_api_url = 'http://api.weatherapi.com/v1/current.json?key='.$weather_api_key.'&q='.$city_name.'&aqi=no';

        $weather_data = json_decode(file_get_contents($weather_api_url), true);

        $temperature = $weather_data['current']['temp_c'];
        $humidity = $weather_data['current']['humidity'];
        $precipitation = $weather_data['current']['precip_mm'];

        $data = array(
            'temperature' => $temperature,
            'humidity' => $humidity,
            'precipitation' => $precipitation
        );

        header('Content-Type: application/json');
        echo json_encode($data);

    }

    public function currentLocation()
    {
        $city_name = $this->input->get('city');
        $weather_api_key = 'a3742f0932b641619fd111204230306';
        $weather_api_url = 'http://api.weatherapi.com/v1/current.json?key='.$weather_api_key.'&q='.$city_name.'&aqi=no';

        $weather_data = json_decode(file_get_contents($weather_api_url), true);

        $temperature = $weather_data['current']['temp_c'];
        $humidity = $weather_data['current']['humidity'];
        $precipitation = $weather_data['current']['precip_mm'];

        $data = array(
            'temperature' => $temperature,
            'humidity' => $humidity,
            'precipitation' => $precipitation
        );

        header('Content-Type: application/json');
        echo json_encode($data);

    }

    public function processML()
    {
        $N = isset($_POST['N']) ? escapeshellarg($_POST['N']) : '';
        $P = isset($_POST['P']) ? escapeshellarg($_POST['P']) : '';
        $K = isset($_POST['K']) ? escapeshellarg($_POST['K']) : '';
        $temperature = isset($_POST['temperature']) ? escapeshellarg($_POST['temperature']) : '';
        $humidity = isset($_POST['humidity']) ? escapeshellarg($_POST['humidity']) : '';
        $precipitation = isset($_POST['precipitation']) ? escapeshellarg($_POST['precipitation']) : '';
    
        // Build the command to run the Python script
        $command = "python c:/laragon/www/FarmAnalytica/application/pythonscripts/cropRecommendationPS.py $N $P $K $temperature $humidity $precipitation";

        // Execute the command and capture the output
        $output = exec($command);

        // Pass the output to the view
        $data['res'] = $output;

        json_encode($data);

        $this->load->view('application/appcr', $data);

    }
    
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CropRecommendation extends CI_Controller {
    function __Construct(){
        parent::__Construct();
        $this->load->helper('url'); 
        $this->load->helper(array('form','url'));
        $this->load->library(array('form_validation', 'session')); // Load the session library
        $this->load->model('CropRecommendationModel');
        $this->load->library('session');

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
        $this->load->view('application/appfr');
    }

    public function appCY()
    {
        $this->load->view('application/appcy');
    }

    public function dataRep()
    {
        $this->load->view('application/datareport');
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


    public function processCR()
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

        $dataCR = [
            'N' => $N,
            'P' => $P,
            'K' => $K,
            'temperature' => $temperature,
            'humidity' => $humidity,
            'precipitation' => $precipitation,
            'res' => $output
        ];

        // Save data in session
        $this->session->set_userdata('dataCR', $dataCR);


        return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));

    }

    public function processFR()
    {

        // Retrieve data from session
        $data = $this->session->userdata('dataCR');

        $N = isset($data['N']) ? escapeshellarg($data['N']) : '';
        $P = isset($data['P']) ? escapeshellarg($data['P']) : '';
        $K = isset($data['K']) ? escapeshellarg($data['K']) : '';
        $temperature = isset($data['temperature']) ? escapeshellarg($data['temperature']) : '';
        $humidity = isset($data['humidity']) ? escapeshellarg($data['humidity']) : '';
        $soil = isset($_POST['soil']) ? escapeshellarg($_POST['soil']) : '';
        $crop = isset($_POST['crop']) ? escapeshellarg($_POST['crop']) : '';


        $command = "python c:/laragon/www/FarmAnalytica/application/pythonscripts/fertilizerRecommendation.py $N $P $K $temperature $humidity $soil $crop";


        $output = exec($command);

        $dataFR = [
            'N' => $N,
            'P' => $P,
            'K' => $K,
            'temperature' => $temperature,
            'humidity' => $humidity,
            'soil' => $soil,
            'crop' => $crop,
            'res' => $output
        ];

        $prediction = array('res' => $output);

        // Store output data in session
        $this->session->set_userdata('dataFR', $dataFR);

        return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($prediction));

    }

    public function processCY()
    {

        // Retrieve data from session
        $data = $this->session->userdata('dataFR');

        $Municipality = isset($_POST['Municipality']) ? escapeshellarg($_POST['Municipality']) : '';
        $Province = isset($_POST['Province']) ? escapeshellarg($_POST['Province']) : '';
        $season = isset($_POST['season']) ? escapeshellarg($_POST['season']) : '';
        $crop = isset($data['crop']) ? escapeshellarg($data['crop']) : '';
        $Area = isset($_POST['Area']) ? escapeshellarg($_POST['Area']) : '';

        $command = "python c:/laragon/www/FarmAnalytica/application/pythonscripts/cropYield.py $Municipality $Province $season $crop $Area";

        $output = exec($command);


        // Prepare the response data
        $dataCY = array(
            'Municipality' => $Municipality,
            'Province' => $Province,
            'season' => $season,
            'area' => $Area,
            'res' => $output
        );


        // Store output data in session
        $this->session->set_userdata('dataCY', $dataCY);

        return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($dataCY));
    }

    public function dataReport()
    {
        $dataCR = $this->session->userdata('dataCR');
        $dataFR = $this->session->userdata('dataFR');
        $dataCY = $this->session->userdata('dataCY');

        if ($dataCR && $dataFR && $dataCY) {
            //USER VALUES
            $N = isset($dataCR['N']) ? $dataCR['N'] : '';
            $P = isset($dataCR['P']) ? $dataCR['P'] : '';
            $K = isset($dataCR['K']) ? $dataCR['K'] : '';
            $temperature = isset($dataCR['temperature']) ? $dataCR['temperature'] : '';
            $humidity = isset($dataCR['humidity']) ? $dataCR['humidity'] : '';
            $precipitation = isset($dataCR['precipitation']) ? $dataCR['precipitation'] : '';
            $soil = isset($dataFR['soil']) ? $dataFR['soil'] : '';
            $crop = isset($dataFR['crop']) ? $dataFR['crop'] : '';
            $Municipality = isset($dataCY['Municipality']) ? $dataCY['Municipality'] : '';
            $Province = isset($dataCY['Province']) ? $dataCY['Province'] : '';
            $season = isset($dataCY['season']) ? $dataCY['season'] : '';
            $Area = isset($dataCY['area']) ? $dataCY['area'] : '';

            //OUTPUT VALUES
            $rcrop = isset($dataCR['res']) ? $dataCR['res'] : '';
            $fertilizer = isset($dataFR['res']) ? $dataFR['res'] : '';
            $yield = isset($dataCY['res']) ? $dataCY['res'] : '';

            // Pass the values to the view
            $data = array(
                'N' => $N,
                'P' => $P,
                'K' => $K,
                'temperature' => $temperature,
                'humidity' => $humidity,
                'precipitation' => $precipitation,
                'soil' => $soil,
                'crop' => $crop,
                'Municipality' => $Municipality,
                'Province' => $Province,
                'season' => $season,
                'Area' => $Area,
                'rcrop' => $rcrop,
                'rfertilizer' => $fertilizer,
                'pyield' => $yield
            );

            var_dump($data);
            $this->load->view('application/datareport', $data);
        }
        else {
            echo "IT AINT WORKING";
        }
        
    }
    
}


<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Kreait\Firebase\Factory;
use Kreait\Firebase\Contract\Auth;

require_once(APPPATH . '../../vendor/autoload.php');

class Firebase
{
    protected $firebase;
    protected $auth;
    protected $database;

    public function __construct()
    {
        $factory = (new Factory())
            ->withServiceAccount(__DIR__.'/credentials.json')
            ->withDatabaseUri('https://farmanalytica-default-rtdb.firebaseio.com');
        
        $this->firebase = $factory;
        $this->auth = $this->firebase->createAuth();
        $this->database = $this->firebase->createDatabase();
    }

    public function getFirebase()
    {
        return $this->firebase;
    }

    public function getAuth()
    {
        return $this->auth;
    }

    public function getDatabase()
    {
        return $this->database;
    }
}

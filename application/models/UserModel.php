<?php
defined('BASEPATH') or exit('No direct script access allowed');

require '../vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Contract\Auth;


class UserModel extends CI_Model
{
    protected $database;

    public function setDatabase($database)
    {
        $this->database = $database;
    }

    public function addUser()
    {
        $data = [
            'first_name' => $_POST["firstname"],
            'last_name' => $_POST["lastname"],
            'municipality' => $_POST["municipality"],
            'province' => $_POST["province"],
            'region' => $_POST["region"],
            'password' => md5($_POST["password"]),
            'email' => $_POST["email"]
        ];

        $this->database->getReference('users')->push($data);
    }

    public function getUserInfo($email)
    {
        $snapshot = $this->database->getReference('users')->orderByChild('email')->equalTo($email)->getSnapshot();
        $result = $snapshot->getValue();

        // Convert result array to object
        if (!empty($result)) {
            $result = (object) reset($result);
        }

        return $result;
    }

    public function setFirstName($email)
    {
        $data = [
            'first_name' => $_POST["firstname"]
        ];

        $this->database->getReference('users')->orderByChild('email')->equalTo($email)->getSnapshot()
            ->forEach(function ($child) use ($data) {
                $child->getReference()->update($data);
            });
    }

    // Implement other update methods (setLastName, setMunicipality, etc.) using the same approach as setFirstName

    public function getEmail()
    {
        $result = "";
        $email = $_POST["email"];

        $snapshot = $this->database->getReference('users')->orderByChild('email')->equalTo($email)->getSnapshot();
        $result = array_keys($snapshot->getValue())[0];

        return $result;
    }
}

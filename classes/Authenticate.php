<?php

require_once 'databaseConnect.php';

class LoginAuthenticate extends DatabaseConnect {

    private $required_data = array(
        "username" => "",
        "password" => "",
        "remember_me" => ""
    );
    protected $errorMsg; # For Displaying Error Message to User 

    protected function validate($username, $password, $rememberMe) {

        $returnValue = true;

        if (empty($username) || empty($password)) {

            $this->errorMsg = "Either Username Or Password left blank";

            $returnValue = false;
        } else if (strlen($username) > 32) {

            $this->errorMsg = "Invalid Username or Password";
        } else {

            $this->required_data["username"] = $username;
            $this->required_data["password"] = $password;
            $this->required_data["remember_me"] = $rememberMe;
        }

        return $returnValue;
    }

    public function authenticate($username, $password, $rememberMe) {

        if (validate($username, $password, $rememberMe)) {

            $conn = parent::connect();

            try {
                
              
                $this->required_data["username"] = preg_replace("/[^a-zA-Z0-9\_\.]/", "", $username);
                $this->required_data["password"] = md5(preg_replace("/[^a-zA-Z0-9\!\@\.]/", "", $password));

                $sql_validate_user = "";
            } catch (PDOException $ex) {

                die("Login Query Failed" . $ex->getMessage());
            }
        }
    }

}

?>
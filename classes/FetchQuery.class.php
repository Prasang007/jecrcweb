<?php

require_once 'DatabaseConnect.php';

class FetchQuery extends DatabaseConnect {

    protected $user_data = array(
        "firstName" => "",
        "lastName" => "",
        "contactNo" => "",
        "dob" => "",
        "cityName" => "",
        "stateName" => "",
        "address" => "",
        "email" => "",
        "tMarks" => "",
        "tenthBoard" => "",
        "twMarks" => "",
        "twBoard" => "",
        "tenYop" => "",
        "twYop" => "",
        "currentYear" => "",
        "perUg" => "",
        "resumeLink" => "",
        "Location" => "",
        "Duration" => "",
        "Description" => "",
        "WorkProfile" => "",
        "Designation" => "",
        "Organization" => "",
        "Skill" => "",
        "College" => "",
        "streamId" => "",
        "streamName" => "",
        "degreeId" => "",
        "degreeName" => "",
    );
    private $flag;

    public function fetchData($sql_query) {
        try {

            $conn = parent::connect();

            $dataFetched = $conn->query($sql_query);

            $result = $dataFetched->fetch(PDO::FETCH_ASSOC);

            if (!empty($result)) {  //Check If We have no empty result so that  valid arguments must be passed to the foreach else it will generate a warning


                foreach ($result as $key => $value) {

                    if (array_key_exists($key, $this->user_data)) {

                        $this->flag = TRUE;
                        
                    } else {

                        die("Invalid Accessing...");
                    }
                }
                if ($this->flag == TRUE) {

                    return $result;
                }
            }
        } catch (PDOException $ex) {

            echo "Unable to fetch data" . $ex->getMessage();
        }
    }

}

?>
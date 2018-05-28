<?php

/* * *****************************************************************************
 * 
 * Version 1.0
 * 
 * This Class Fetch all the required Data For Events and News page Only
 * 
 * 
 * @author Himanshu Singh
 * 
 * Created on ->23-09-2015 IST
 * 
 * **************************************************************************** */

include_once 'DatabaseConnect.php';

class FetchDataMain extends DatabaseConnect {

    public function fetchData($sql_query) {

        try {

            $conn = parent::connect();
            
            #Return this array which contains both the total no of rows and the required rows
           
            $result = array();
            
            
            $dataFetched = $conn->query($sql_query);
            
            $st = $conn->query("SELECT found_rows() AS totalRows");
            $tR = $st->fetch();
            
            $result["totalRows"] = $tR["totalRows"];
            
            $result["rows"] = $dataFetched->fetchAll(PDO::FETCH_ASSOC);

            if (!empty($result)) {

                return $result;
            }
        } catch (PDOException $ex) {

            echo "Unable to fetch data" . $ex->getMessage();
        }
    }

}

?>
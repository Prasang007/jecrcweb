<?php

require_once 'config.php';

class DatabaseConnect {

    public function connect() {

        try {

            $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);

            $conn->setAttribute(PDO::ATTR_PERSISTENT, true);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {

            echo "Unable to Connect to Database" . $ex->getMessage();
        }

        if( isset($conn) ) {

            return $conn;
        }
    }

    public function disConnect($conn) {

        $conn = "";
        return $conn;
    }

}

?>
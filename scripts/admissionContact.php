<?php

if (isset($_POST["name"], $_POST["phone"])) {

    if (!empty($_POST["name"]) && !empty($_POST["phone"])) {

        if (!preg_match("/^[ a-zA-Z]*$/", $_POST["name"])) {

            echo FALSE;
        } else if (!preg_match("/^\d*$/", $_POST["phone"])) {

            echo FALSE;
        } else {

            try {

                include "../classes/DatabaseConnect.php";

                $connObj = new DatabaseConnect();

                $conn = $connObj->connect();

                $sql = "INSERT INTO " . ADMISSION . "(name, phone, ip, dateTime) VALUES(:name, :phone, :ip, :dateTime)";

                $stmt = $conn->prepare($sql);
                $stmt->bindValue(":name", $_POST["name"], PDO::PARAM_STR);
                $stmt->bindValue(":phone", $_POST["phone"], PDO::PARAM_STR);
                $stmt->bindValue(":ip", $_SERVER["REMOTE_ADDR"], PDO::PARAM_STR);
                $stmt->bindValue(":dateTime", date('Y-m-d H:i:s'), PDO::PARAM_STR);

                if ($stmt->execute()) {

                   echo TRUE;
                }
            } catch (PDOException $e) {
                
                echo $e->getMessage();
            }


            
        }
    }
}
?>
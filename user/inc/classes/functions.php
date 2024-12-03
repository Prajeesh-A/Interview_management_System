<?php

    function fetchData($sql) {

        include 'config.php';


        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

            return $result;

        } else {

            return false;

        }


        $conn->close();

    }

?>
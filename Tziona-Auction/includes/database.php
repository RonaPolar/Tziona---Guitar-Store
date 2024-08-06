<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $databaseName = "tzionashop";

    $dbconnect = mysqli_connect($host, $user, $password, $databaseName);

    if($dbconnect === false){
        die("Connection Error");
    }

?>
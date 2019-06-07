<?php

    //Connect to database
    $servername = "localhost";
    $username = "vi433515";
    $password = "Victakeover83!";
    $database = "vi433515";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

?>
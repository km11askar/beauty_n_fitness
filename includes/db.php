<?php

    $hostname = "localhost";
    $username = "root";
    $pass     = "";
    $db       = "office";

    $con = new mysqli($hostname,$username,$pass,$db);

    if ($con->connect_error) 
    {
        die("Error" . $con->mysqli_error);
    }
    else 
    {
        // echo "Successfully Connected";
    }

?>

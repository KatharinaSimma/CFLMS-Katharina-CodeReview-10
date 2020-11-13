<?php 
    $localhost = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "CR10-Katharina-BigLibrary";

    // create connection
    $conn = new  mysqli($localhost, $username, $password, $dbname);

    // check connection
    if($conn->connect_error) {
        die("connection failed: " . $connect->connect_error);
    } else {
        //echo "Successfully Connected <br>";
    }
?>
<?php
    $hostName = "localhost";    
    $userName = "root";         
    $password = "";           
    $dbName   = "db_toko_sembako";
    $conn = new mysqli($hostName, $userName, $password,$dbName);   

    if ($conn->connect_errno) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // echo "Connection successful";
    }
?>
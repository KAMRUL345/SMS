<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'store_db';

    $conn = new mysqli($hostname, $username, $password, $dbname);

    if($conn->connect_error){
        // echo '';
        die("connection failed: " . $conn->connect_error);
    }else{
        // echo 'Database connected Successfully';
        echo '';
    }
?>
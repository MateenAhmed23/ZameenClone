<?php


    // firstname=&lastname=&email=&username=&password=&re-password=


    $f_name = $_POST["firstname"];
    $l_name = $_POST["lastname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $re_password = $_POST["re-password"];

    if ($password != $re_password){
        die ("Passwords does not match");
    }

    echo "<p> $f_name $l_name" ;
    
    
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db_name = "zameendb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>
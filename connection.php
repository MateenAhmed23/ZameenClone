<?php

// Establshing connection
    
    
$servername = "localhost";
$username = "pma";
$password = "";
$db_name = "zameendb";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


// Connection Made

?>
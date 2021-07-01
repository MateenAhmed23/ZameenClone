<?php

// Establshing connection
    
    
$servername = "localhost";
$username = "root";
$password = "umair8917";
$db_name = "zameenClone";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


// Connection Made

?>
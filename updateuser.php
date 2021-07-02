<?php


session_start();
include "connection.php";

//print_r($_POST);


// Take userId from session
$user_ID;
if(isset($_SESSION["user_id"]))
  $user_ID = (int)$_SESSION["user_id"]; 
else
  echo 'user_id not set';

$f_name = $_POST["firstName"];
$l_name = $_POST["lastName"];
$cnic = $_POST["cnic"];
$username = $_POST["username"];
$email = $_POST["email"];
$phone = $_POST["phone"];



//print_r($f_name);


$sql = "UPDATE `user` 
        SET `f_name`='$f_name',
        `l_name`='$l_name',`cnic`='$cnic',
        `username`='$username',
        `email`='$email',`phone`='$phone'
        where `user_id` = '$user_ID';";



$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    $conn->close();
    header("Location: profile.php?msg=Information Updated");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    $conn->close();
    exit();
}

$conn->close();




?>
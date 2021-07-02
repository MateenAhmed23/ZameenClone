<?php


session_start();
include "connection.php";


// Take userId from session
$user_ID;
if(isset($_SESSION["user_id"]))
  $user_ID = (int)$_SESSION["user_id"]; 
else{
    header("Location: login.php");
}



$oldpass = $_POST["OldPassword"];
$newpass = $_POST["NewPassword"];
$newpassre = $_POST["ReNewPassword"];



$sql = "SELECT `password` FROM `user` WHERE 
        `password` = '$oldpass' and `user_id` = '$user_ID'";


$result = $conn->query($sql);


if ($result->num_rows == 1) {

    if($newpass == $newpassre)
    {
        $sql = "UPDATE `user` 
        SET `password` = '$newpass'
        where `user_id` = '$user_ID';";



$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    $conn->close();
    header("Location: editprofile.php?msg=Password Updated");
    exit();
} else {
    $conn->close();
        header("Location: editprofile.php?msg=Password could not be updated");
}
    }
    else{
        $conn->close();
        header("Location: editprofile.php?msg=New passwords do not match");
    }

    

$conn->close();
}
// User not found with this Id and password
else{
    $conn->close();
    header("Location: editprofile.php?msg=Incorrect old password");
}

?>
<?php
session_start();
include "connection.php";
//Get userID from session
$user_ID;
if(isset($_SESSION["user_id"]))
  $user_ID = (int)$_SESSION["user_id"]; 
else{
  echo 'user_id not set';
  header("Location: login.php?msg=Please login to continue");
}
$Ad="";
if(isset($_POST["ad_ID"]))
{
  $Ad=(int)$_POST["ad_ID"];
  echo "ad id  received: "."$Ad";
}
// insert ad_id into starred ad table
$sql = "INSERT INTO 
        `starred_ad`
        (`user_id`, `ad_id`) VALUES 
        ('$user_ID','$Ad');";
if($conn->query($sql)==true)
{
  $last_id = $conn->insert_id;
  echo "data inserted";
}
else
{
    $sql="DELETE from `starred_ad` where '$Ad'=ad_id";
    if($conn->query($sql)==true)
    {
        $last_id = $conn->insert_id;
        echo "data deleted";
    }
    
}
$conn->close();

?>
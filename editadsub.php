<?php


session_start();
include "connection.php";


// Take userId from session
$user_ID;
if(isset($_SESSION["user_id"]))
  $user_ID = (int)$_SESSION["user_id"]; 
else
    header("Location: login.php");

$ad_ID;
if (isset($_GET['ad_id']))
  $ad_ID = (int)$_GET['ad_id'];
else
    header("Location: profile.php");
    
    

$title = $_POST["title"];
$desc = $_POST["desc"];
$price = $_POST["price"];
$type = $_POST["type"];
$location = $_POST["location"];
$cities = $_POST["cities"];
$cateogory = $_POST["category"];
$s_cateogry = $_POST["s_category"];



//print_r($f_name);


$sql = "UPDATE `ad` 
        SET `ad_title`='$title',`ad_price`='$price',
        `ad_area`='$location',`ad_city`='$cities',
        `ad_desc`='$desc',`sub_category`='$s_cateogry',
        `ad_type`='$type',`category`='$cateogory'
        WHERE `user_id`='$user_ID' and `ad_id` = '$ad_ID'";


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

?>
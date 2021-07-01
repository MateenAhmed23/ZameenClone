<?php

include "connection.php";


$type = $_POST["type"];

$city = $_POST["cities"];
$location = $_POST["location"];
$category = $_POST["category"];
$s_category = $_POST["s_category"];
$min_price = $_POST["min-price"];

$max_price = $_POST["max-price"];

// things which are required are here

if(strcasecmp($s_category, 'Any') == 0){
    $sql = "SELECT * FROM ad where '$location' = ad_area AND '$type' = ad_type and '$category'=category 
    and ad_price between '$min_price'and '$max_price'"; 
}
else{

$sql = "SELECT * FROM ad where '$location' = ad_area AND '$type' = ad_type and '$category'=category 
and '$s_category' = sub_category and ad_price between '$min_price'and '$max_price'"; 
}

$res = $conn->query($sql);

var_dump($res);

?>
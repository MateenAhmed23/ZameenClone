<?php
include "connection.php";
$adid;
if(isset($_GET["varname"]))
{
    $adid=(int)$_GET["varname"];
    echo $adid;
}    
else
echo "not received";
$sql ="DELETE from ad_picture where '$adid'=ad_id";
if($conn->query($sql)==TRUE)
    echo "Pictures deleted successfully";
else
echo "Pictures deleted not successful";
$sql = "DELETE from ad where '$adid'=ad_id";
if($conn->query($sql)==TRUE)
    echo "ad deleted successfully";
else
echo "ad deleted not successful";
$conn->close();
header("location:profile.php");
?>
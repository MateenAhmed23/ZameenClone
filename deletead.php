<?php
include "connection.php";
$adid;
if(isset($_GET["varname"]))
{
    $adid=(int)$_GET["varname"];
    echo $adid;
}    
else{

}
    // header("location:profile.php");
$sql ="DELETE from ad_picture where '$adid'=ad_id";
echo $sql;
if($conn->query($sql)==TRUE)
    echo "Pictures deleted successfully";
else
echo "Pictures deleted not successful";

$sql = "DELETE FROM `starred_ad` WHERE `ad_id`='$adid'";
if($conn->query($sql)==TRUE)
    echo "staareed ad deleted successfully";
else
    echo "starred ad deleted not successful";

$sql = "DELETE from `ad` where `ad_id`='$adid'";
print_r($sql);
if($conn->query($sql)==TRUE)
    echo "ad deleted successfully";
else
    echo "ad deleted not successful";
$conn->close();
header("location:profile.php");
?>
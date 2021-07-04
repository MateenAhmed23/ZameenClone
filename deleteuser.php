<?php
include "connection.php";
$user;
if(isset($_GET["del"]))
{
    $user=(int)$_GET["del"];
    // echo $user;
}
else
    echo"not received";
$sql = "SELECT ad_id FROM ad WHERE '$user'= user_id";
$Result=$conn->query($sql);
if($Result->num_rows > 0)
{
    while($row=$Result->fetch_assoc())
    {
        $id=$row["ad_id"];
        $sql="DELETE from ad_Picture where `ad_id`='$id'";
        if($conn->query($sql)==TRUE)
        {
            echo "Pictures Deleted successfully";
        }
        else
            echo "Pictures not Deleted successfully";

        $sql = "DELETE from ad where '$id'=ad_id";
        if($conn->query($sql)==TRUE)
            echo"ads deleted successfully";
        else
            echo"not deleted successfully";
    }
    $sql = "DELETE from user where '$user' =user_id";
    if($conn->query($sql)==TRUE)
        echo "User deleted successfully";
    else
        echo "User not deleted successfully";

}
else if($Result->num_rows == 0){
     $sql = "DELETE from user where '$user' =user_id";
    if($conn->query($sql)==TRUE)
        echo "User deleted successfully";
    else
        echo "User not deleted successfully";
}
else
{
    echo "error";
    exit();   
}
$conn->close();
header("location: Signout.php");
?>
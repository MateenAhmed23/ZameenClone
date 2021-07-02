<?php



include "connection.php";

print_r($_POST);


// Take userId from session


$user_ID = 1;

$f_name = $_POST["firstName"];
$l_name = $_POST["lastName"];
$cnic = $_POST["cnic"];
$username = $_POST["username"];
$email = $_POST["email"];
$phone = $_POST["phone"];



print_r($f_name);


$sql = "UPDATE `user` 
        SET `f_name`='$f_name',
        `l_name`='$l_name',`cnic`='$cnic',
        `username`='$username',
        `email`='$email',`phone`='$phone'
        where `user_id` = '$user_ID';";

echo "<br>";

print_r($sql);



$result = $conn->query($sql);


if ($conn->query($sql) === TRUE) {
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>
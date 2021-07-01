<?php

include "connection.php";


$userNameOrEmail = $_POST["username"];
$password = $_POST["password"];


// echo "<p> $userNameOrEmail $password";


$sql = "SELECT username, email, password,user_id from user where
 ('$userNameOrEmail'=email AND '$password'=password)
 OR 
 ('$userNameOrEmail' = username AND '$password'=password)";


$res = $conn->query($sql);
echo"<br>";
var_dump($res);

if ($res->num_rows >0 && $res->num_rows == 1) {
    echo "User Did sign in successfully";
    var_dump($userNameOrEmail) ;
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }




?>
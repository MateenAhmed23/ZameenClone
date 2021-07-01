<?php
session_start();
include "connection.php";



$userNameOrEmail = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT f_name,l_name from user where
('$userNameOrEmail'=email AND '$password'=password)
OR 
('$userNameOrEmail' = username AND '$password'=password)";
$result = $conn->query($sql);
$fname;
$lname;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $fname=$row["f_name"];
      $lname=$row["l_name"];
      $_SESSION["f_name"]=$fname;
      $_SESSION["l_name"]=$lname;
    }
}


$sql = "SELECT username, email,password,user_id from user where
 ('$userNameOrEmail'=email AND '$password'=password)
 OR 
 ('$userNameOrEmail' = username AND '$password'=password)";



$res = $conn->query($sql);





if ($res->num_rows >0 &&$res->num_rows ==1) {
    echo "User sign in successful";
    $_SESSION['username']=$userNameOrEmail;
    header("Location: http://localhost/zameenclone/loggedin.php");
    exit();

}
if ($res->num_rows >0 && $res->num_rows == 1) {
    

    echo "User Did sign in successfully";

    } else {
        header("Location: http://localhost/zameenclone/login.php?error=Error: Either Username or Password entered is Invalid or empty");
    exit();
    }


    $conn->close();
    header("Location: index.php");
        exit();
}
?>
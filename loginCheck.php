<?php
session_start();
include "connection.php";

$email="SELECT email from user where 
('$userNameOrEmail'=email AND '$password'=password)
OR 
('$userNameOrEmail' = username AND '$password'=password)";

$userNameOrEmail = $_POST["username"];
$password = $_POST["password"];


$sql = "SELECT email,username,user_id,password from user where
('$userNameOrEmail'=email AND '$password'=password)
OR 
('$userNameOrEmail' = username AND '$password'=password)";

$result = $conn->query($sql);

$userID;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $userID=(int)$row["user_id"];
      $userNameOrEmail=$row["username"];
      $password=$row["password"];
    }
    $_SESSION["user_id"]=$userID;
    if(isset($email))
    $_SESSION["email"]=$email;
    echo "User sign in successful";
    //$_SESSION['username']=$userNameOrEmail;
    header("Location: index.php");
    $conn->close();
    exit();
}
else
{
  $conn->close();
  header("Location: login.php?error= Invalid Username or password or if your don't have an account please sign up!");
  exit();
}



// $sql = "SELECT username, email,password,user_id from user where
//  ('$userNameOrEmail'=email AND '$password'=password)
//  OR 
//  ('$userNameOrEmail' = username AND '$password'=password)";



// $res = $conn->query($sql);





// if ($result->num_rows >0 &&$result->num_rows ==1) {
//     echo "User sign in successful";
//     //$_SESSION['username']=$userNameOrEmail;
//     header("Location: loggedin.php");
//     exit();

// }
// if ($res->num_rows >0 && $res->num_rows == 1) {
    

//     echo "User Did sign in successfully";

// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//     }


//     $conn->close();
//     header("Location: index.php");
//         exit();

?>
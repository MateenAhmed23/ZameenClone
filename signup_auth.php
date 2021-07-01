<?php
session_start();
    include "connection.php";


    // firstname=&lastname=&email=&username=&password=&re-password=

    $f_name = $_POST["firstname"];
    $l_name = $_POST["lastname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $re_password = $_POST["re-password"];

    // Optional

    $cnic = NULL;
    if (isset($_POST["cnic"])){
        $cnic = $_POST["cnic"];
    }

    $phone = NULL;
    if (isset($_POST["phone"]))
    {
        $phone = $_POST["phone"];
    }


    // Checking password

    if ($password != $re_password){
        die ("Passwords does not match");
    }


    // Writing Query to check if username already exists
    $sql = "INSERT INTO user (f_name ,l_name,username,password,email,phone, cnic)
    VALUES ('$f_name', '$l_name', '$username', '$password', '$email', '$phone', '$cnic')";


    if ($conn->query($sql) === TRUE) {
    echo "User account sign up successfully";
    if(isset($_SESSION['username']))
    {
        $_SESSION['f_name']=$f_name;
        $_SESSION['l_name']=$l_name;
    }
    ?>
   <br><a href="http://localhost/zameenclone/index.php">Return to HomePage</a><br>     
    <?php
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

        
    exit();
?>
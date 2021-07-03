<?php

    session_start();
    include "connection.php";




    if(isset($_POST["publish"]))
    {

        // Query to save ad starts

        $title = $_POST["title"];
        $desc = $_POST["desc"];
        $price = $_POST["price"];
        $type = $_POST["type"];
        $location = $_POST["location"];
        $cities = $_POST["cities"];
        $category = $_POST["category"];
        $s_category = $_POST["s_category"];


        $user_Id = $_SESSION["user_id"];


        // Writing Query to check if username already exists
        $sql = "INSERT INTO 
        `ad`
        (`user_id`, `ad_title`, `ad_price`, `ad_area`, `ad_city`, `ad_desc`, `ad_type`, `category`, `sub_category`) VALUES 
        ('$user_Id','$title','$price','$location','$cities','$desc','$type','$category','$s_category');";

        

        if ($conn->query($sql) === TRUE) {
             

            $last_id = $conn->insert_id;


            $file_ext_permis = array('png', 'jpg', 'jpeg');

        foreach ($_FILES['files']['tmp_name'] as $key => $value)
        {
            $file_name = $_FILES["files"]["name"][$key];
            $file_tem_loc = $_FILES["files"]["tmp_name"][$key];
            $file_store = 'images/' . $file_name;
print_r($file_name);
echo "<br>";
print_r($file_tem_loc);
echo "<br>";
print_r($file_store);
echo "<br>";

            $ext = pathinfo($file_name, PATHINFO_EXTENSION);

            if(in_array($ext,$file_ext_permis))
            {
                if(!file_exists($file_store))
                {
                    move_uploaded_file($file_tem_loc, $file_store);
                }
                else{

                    $file_name = str_replace('.','-',basename($file_name,$ext));
                    $newfilename = $file_name.time().'.'.$ext;
                    $file_store = 'images/' . $newfilename;
                    move_uploaded_file($file_tem_loc, $file_store);    
                }

                //Insert into database

                $sql = "INSERT INTO ad_picture (`ad_id`, `link`) VALUES ('$last_id','$file_store')";

                if ($conn->query($sql) === TRUE) {
                }
                else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }


            }
            else
            {
                echo "<h1> You uploaded the wrong image file </h1>";
            }

        }







        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // 

        // // Image Upload to databse
        // $files = $_FILES["files"];

        // $file_name = $_FILES["files"]["name"];
        // $file_type = $_FILES["files"]["type"];
        // $file_size = $_FILES["files"]["size"];
        // $file_tem_loc = $_FILES["files"]["tmp_name"];
        // $file_store = 'images/' . $file_name;



        // $file_ext = explode('.', $file_name);
        // $file_check = strtolower(end($file_ext));

        // $file_ext_permis = array('png', 'jpg', 'jpeg');


        // if(in_array($file_check,$file_ext_permis))
        // {
        //     move_uploaded_file($file_tem_loc, $file_store);
        // }
        // else
        // {
        //     echo "<h1> You uploaded the wrong file </h1>";
        // }


        


        // Now saving all other information


        $conn->close();

       // header("Location: index.php");
       // exit();




    }

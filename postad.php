<?php

    if(isset($_POST["publish"]))
    {

        // Image Upload to databse
        $files = $_FILES["files"];

        $file_name = $_FILES["files"]["name"];
        $file_type = $_FILES["files"]["type"];
        $file_size = $_FILES["files"]["size"];
        $file_tem_loc = $_FILES["files"]["tmp_name"];
        $file_store = 'images/' . $file_name;



        $file_ext = explode('.', $file_name);
        $file_check = strtolower(end($file_ext));

        $file_ext_permis = array('png', 'jpg', 'jpeg');


        if(in_array($file_check,$file_ext_permis))
        {
            move_uploaded_file($file_tem_loc, $file_store);
        }
        else
        {
            echo "<h1> You uploaded the wrong file </h1>";
        }


        // Now saving all other information

        


    }

    



?>
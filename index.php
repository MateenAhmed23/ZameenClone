<?php
session_start();
  $type = array('Buy', 'Rent');

  $cities = array('Lahore', 'Karachi' , 'Islamabad', 'Peshawar', 'Quetta', 'Muzaffarabad');

  $category = array('House', 'Flat', 'Commercial', 'Farm House');

  $sc_for_House = array('Any', 'Basement', 'Ground Floor', 'First Floor');

  $sc_for_Flat = array('Any', 'Pent House');

  $sc_for_Commercial = array('Office', 'Shop');

  $sc_for_Farm = array('Any');

  $find = 0;

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Real Estate</title>
  <link rel="icon" href="favicon.ico">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link href="css/index.css" rel="stylesheet">
  <link href="css/btn.css" rel="stylesheet">
  <style>
      .container-fluid {
      width:95%;
    }
    .navbar-items {
      padding-right: 4rem;
    }
  </style>
</head>

<body>
  <!-- <section id="header"> -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-3 pb-3">
      <a class="navbar-brand ps-5" href="index.php"><h2><i>Real Estate</i></h2></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-items collapse navbar-collapse ms-5" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto pe-5">
        <?php
        if(isset($_SESSION["user_id"]))
        {
        ?>
        <li class="navbar-item"><a class="nav-link" href="publish.php">Publish Ad</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
                <li><a class="dropdown-item" href="editprofile.php">Edit Profile</a></li>
                <li><a class="dropdown-item" href="wishlist.php">Wish List</a></li>
                <li><a class="dropdown-item" href="Signout.php">Sign Out</a></li>
                <?php
        }
        else
        {
          ?>
          <li class="navbar-item pe-2"><a class="nav-link" href="login.php">Login</a></li>
          <li class="navbar-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
          <?php

        }?>
        
        </ul>
      </div>
    </nav>
  </header>

  <!-- Query Section -->
  <section id="Query" class="m-5 ps-5 pe-5 pb-3">
    <h1>Search</h1>
    <form class="row g-3" action="index.php" method="POST">
      <!-- Type -->
      <div class="col-md-4">
        <label class="form-label" for="type">Type</label>
        <select class="form-select" name="type" id="type">
        <?php
          foreach ($type as $value) {
              echo "<option value='$value'>$value</option>";
          }
        ?>
        </select>
      </div>

      <!-- Cities -->
      <div class="col-md-4">
        <label class="form-label" for="cities">City</label>
        <select class="form-select" name="cities" id="cities">
        <?php
          foreach ($cities as $value) {
              echo "<option value='$value'>$value</option>";
          }
        ?>
        </select>
      </div>

      <!-- Location -->
      <div class="col-md-4">
        <label class="form-label" for="location">Area</label>
        <input class="form-control" type="text" name="location" id="location" maxlength="50">
      </div>

      <!-- Category -->
      <div class="col-lg-3 col-md-4">
        <label class="form-label" for="category">Category</label>
        <select class="form-select" name="category" id="category">
        <?php
          foreach ($category as $value) {
            echo "<option value='$value'>$value</option>";
          }
        ?>
        </select>
      </div>

      <!-- Sub- Category -->
      <div class="col-lg-3 col-md-4">
        <label class="form-label" for="s_category">Sub-Category</label>
        <select class="form-select" name="s_category" id="s_category">
          <?php
            foreach ($sc_for_House as $value) {
              echo "<option value='$value'>$value</option>";
            }
          ?>
        </select>
      </div>

      <!-- Minimum Price -->
      <div class="col-lg-3 col-md-4">
        <label class="form-label" for="min-price">Minimum Price(1000)</label>
        <input class="form-control" type="number" name="min-price" id="min-price" min="1000">
      </div>

      <!-- Maximum Price -->
      <div class="col-lg-3 col-md-4">
          <label class="form-label" for="max-price">Maximum Price</label>
          <input class="form-control" type="number" name="max-price" id="max-price">
      </div>

      <!-- Input Button -->
      <div class="col-lg-3">
        <input class="w-50 btn btn-secondary" type="submit" value="Find" name = "findB">
      </div>
    </form>
  </section>




<?php
if(isset($_POST["findB"]))
{
 

  include "connection.php";


  $type = $_POST["type"];

  $city = $_POST["cities"];
  $location = $_POST["location"];
  $category = $_POST["category"];
  $s_category = $_POST["s_category"];
  $min_price = $_POST["min-price"];

  $max_price = $_POST["max-price"];

  // things which are required are here

  if (strcasecmp($s_category, 'Any') == 0) 
  {
              $sql = "SELECT * FROM ad  where '$location' = ad_area 
                      AND '$type' = ad_type and '$category'=category 
                      and ad_price between '$min_price'and '$max_price'";

    $linkOFPicture = "SELECT ad_picture.link FROM `ad_picture` left join  `ad` on  ad.ad_id = ad_picture.ad_id
                      WHERE (ad.ad_area='$location'
                      AND ad.ad_type = '$type' 
                      and ad.category = '$category'
                      and ad.ad_price between '$min_price' and '$max_price');";
  } else {

    $sql = "SELECT * FROM ad where '$location' = ad_area AND '$type' = ad_type and '$category'=category 
  and '$s_category' = sub_category and ad_price between '$min_price'and '$max_price'";

    $linkOFPicture = "SELECT ad_picture.link FROM `ad_picture` left join  `ad` on  ad.ad_id = ad_picture.ad_id
  WHERE (ad.ad_area='$location'
  AND ad.ad_type = '$type' and ad.category = '$category' and '$s_category' = sub_category
  and ad.ad_price between '$min_price' and '$max_price');";

    //$pulisherContactInfo = "SELECT phone from user where '$sql['user_id']'=user_id;"

  }

  $res = $conn->query($sql);

  $pic = $conn->query($linkOFPicture);



?>


    <!-- Result Section -->
    <section id="result">
      <div class="container-fluid">
        
        <!-- Row 1 of Result -->
        <div class="row ms-5 me-5">
          
          <!-- there i need to add the loop -->
          <?php
          for($i=0;$i<$res->num_rows;$i++)
          {
            $row = $res->fetch_assoc();
            $picture = $pic->fetch_assoc();

            $imageaddress = $picture["link"];
            $title = $row["ad_title"];
            $price = $row["ad_price"];
            $AdId=$row["ad_id"];

          ?>

          <div class="col mb-3">
            <div class="card" style="width: 18rem;">
              <img style="height: 12rem;" src="<?php echo $imageaddress ?>" class="card-img-top" alt="Ad Image">
              <div class="card-body">
                <h5 class="card-title mt-0 mb-0"><?php echo $title ?></h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Price: </b><?php echo $price?></li>
              </ul>
              <div class="card-body pt-1 pb-1">
              <a href="adin.php?varname=<?php echo $AdId ?>" class="btn btn-secondary card-link">see</a>
                <!-- <a href="buttonres.php" class="btn btn-secondary cark-link" > -->
                <a class="btn btn-secondary card-link" href="buttonres.php" onClick="return acall(<?php echo $AdId ?>)">Wish List
                  <!-- <form onsubmit="return acall(<?php echo $AdId ?>)">
                  <input type="submit" value="Wishlist" /> 
                  </form> -->
                 
                </a>
              </div>
            </div>
          </div>

            <?php
              }
              ?>
        </div>
      </div>

      <!-- Show More Button -->
      <!-- <div class="d-flex justify-content-center mt-5 mb-5">
      <button class="btn btn-md btn-secondary ms-auto me-auto">Show More</button>
      </div> -->
    </section>
<?php
}
?>
  <footer>
  </footer>

<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

  	$("#category").on("change",function(){

  		var category = $("#category").val();
      // Please change arrays if there are changes in sub categories.... THEY ARE NOT DYNAMMIC

      let txt = "";
      if (category === 'House')
      {
        var House = ['Any', 'Basement', 'Ground Floor', 'First Floor'];


        for (let i = 0; i < House.length; ++i) {
          txt += "<option value=" + House[i] + ">" + House[i] + "</option>";
        }
        
      }

      else if (category === 'Flat')
      {

        var Flat = ['Any', 'Pent House'];

        for (let i = 0; i < Flat.length; ++i) {
          txt += "<option value=" + Flat[i] + ">" + Flat[i] + "</option>";
        }
      }


      else if (category === 'Commercial')
      {
        var Commercial = ['Office', 'Shop'];

        for (let i = 0; i < Commercial.length; ++i) {
          txt += "<option value=" + Commercial[i] + ">" + Commercial[i] + "</option>";
        }
      }

      else{

        var Farm = ['Any'];

        for (let i = 0; i < Farm.length; ++i) {
          txt += "<option value=" + Farm[i] + ">" + Farm[i] + "</option>";
        }
        
      }


      $('#s_category').html(txt);
  	})
  });
</script>
<script>
    function acall(first) {
      console.log(first);
        var data = new FormData();

        data.append("ad_ID", first);

        var xhr = new XMLHttpRequest();

        xhr.open("POST", "buttonres.php");

        xhr.onload = function(){
            if (this.response == "success")
            {
              

            }
        };
        xhr.send(data);
        return false;
        }
</script>
</body>
</html>
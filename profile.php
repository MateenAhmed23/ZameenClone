<!DOCTYPE html>
<?php
session_start();
include "connection.php";
//Get userID from session
$user_ID;
if (isset($_SESSION["user_id"]))
  $user_ID = (int)$_SESSION["user_id"];
else {
  echo 'user_id not set';
  header("Location: login.php?msg=Please login to continue");
}




$sql = "SELECT `f_name`, `l_name` FROM `user` where ('$user_ID'=user_id)";



$result = $conn->query($sql);

$f_name = "";
$l_name = "";

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $f_name = $row["f_name"];
    $l_name = $row["l_name"];
  }
} else {
  echo "0 results";
}



// Get the ads published by the user

$sql = "SELECT `ad_id`,`ad_title`,`ad_price` FROM `ad` WHERE `user_id` = '$user_ID'";


$result = $conn->query($sql);

//Saving number of ads user has published
$No_of_ads = $result->num_rows;


//Array of information

$ad_id = array();
$titles = array();
$prices = array();


if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    array_push($ad_id, $row["ad_id"]);
    array_push($titles, $row["ad_title"]);
    array_push($prices, $row["ad_price"]);
  }
}

//Array made.

$conn->close();


?>
<html lang="en">

<head>
  <title>Real Estate</title>
  <link rel="icon" href="favicon.ico">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style>
    .profile-dropdown {
      padding-right: 4rem;
    }

    #Intro {
      width: 50%;
      margin-left: auto;
      margin-right: auto;
    }

    #AdPublished {
      width: 75%;
      margin-left: auto;
      margin-right: auto;
    }

    .profile-picture {
      width: 170px;
      height: 170px;
      border-radius: 50%;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-3 pb-3">
      <a class="navbar-brand ps-5" href="loggedin.php">
        <h2><i>Real Estate</i></h2>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="profile-dropdown collapse navbar-collapse ms-5" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto pe-5">
          <li class="navbar-item"><a class="nav-link" href="publish.php">Publish Ad</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profile
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
              <li><a class="dropdown-item" href="editprofile.php">Edit Profile</a></li>
              <li><a class="dropdown-item" href="wishlist.php">Wish List</a></li>
              <li><a class="dropdown-item" href="index.php">Sign Out</a></li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>

  <section id="Intro">
    <div>
      <div class="row mt-5">
        <div class="col-md-4">
          <img class="profile-picture" src="images/profile.png" alt="profile alternative picture">
        </div>
        <div class="col-md-8 pt-3">
          <?php
          if (isset($user_ID))
            echo "<h1>" . "$f_name " . "$l_name" . "</h1>";
          else {
          ?>
            <h1> No session name</h1>
          <?php
            //Lead back to sign up page to login the user???
          } ?>




        </div>
      </div>
    </div>
  </section>

  <section class="mt-5" id="AdPublished">
    <div class="container">
      <h2 class="ps-4">Ads Published by <?php echo $f_name . " " . $l_name;   ?></h2>
      <div class="container-fluid">
        <!-- Row 1 of Result -->
        <div class="row ms-auto me-auto">
          <?php
          for ($i = 0; $i < $No_of_ads; $i++) {
          ?>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="card" style="width: 18rem;">
                <img style="height: 12rem;" src="images/house2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $titles[$i];  ?></h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>Price: </b><?php echo $prices[$i];  ?></li>
                </ul>
                <div class="row card-body">
                  <a href="adin.php?varname= <?php echo $ad_id[$i];  ?>" class="ms-auto me-auto w-50 btn btn-dark me-auto card-link">See</a>
                  <a href="" class="btn btn-secondary cark-link">
                    <img class="mb-1" src="star.ico">
                  </a>
                </div>
              </div>
            </div>
          <?php
          }
          ?>

        </div>
      </div>
    </div>
  </section>
</body>

</html>
<?php
  session_start();
  include "connection.php";
  //Get userID from session
  $user_ID;
  if(isset($_SESSION["user_id"]))
    $user_ID = (int)$_SESSION["user_id"]; 
  else{
    echo 'user_id not set';
    header("Location: login.php?msg=Please login to continue");
  }

  //Getting all the ad_ids which the user has starred;
  //$ads=(int)$_GET["ad_id"];
  $sql = "SELECT `ad_id` FROM `starred_ad` WHERE `user_id` = '$user_ID'";


  $result = $conn->query($sql);


  //Saving number of ads user has starred
  $No_of_ads = $result->num_rows;


  $ad_id = array();


  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      array_push($ad_id , $row["ad_id"]);
    }
  }
  $PictureLink="SELECT ad_picture.link FROM `ad_picture` left join  `starred_ad` on  starred_ad.ad_id = ad_picture.ad_id
  WHERE ('$user_ID'= starred_ad.user_id)";
    $res = $conn->query($PictureLink);

  $PictureLink = array();
  for ($i=0;$i<$No_of_ads;$i++)
  {

    if($res->num_rows>0)
    {
      while ($row=$res->fetch_assoc())
        array_push($PictureLink,$row["link"]);
    }
    else
      echo "query not successful";
  }
  // All ads saved




  //Array of information


  $titles = array();
  $prices = array();


  //Array of titles prices and adId

  // Get the ads info starred by the user


  foreach($ad_id as $ID){
    $sql = "SELECT `ad_title`,`ad_price` FROM `ad` WHERE `ad_id` = '$ID'";


    $result = $conn->query($sql);


  if ($result->num_rows == 1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      array_push($titles , $row["ad_title"]);
      array_push($prices , $row["ad_price"]);
    }
  }
  }
  //Array made.

  $conn->close();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Real Estate</title>
    <link rel="icon" href="favicon.ico">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/btn.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
      <style>
        .profile-dropdown {
          padding-right: 4rem;
        }
      </style>
</head>
<body>
  <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-3 pb-3">
        <a class="navbar-brand ps-5" href="index.php"><h2><i>Real Estate</i></h2></a>
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
                <li><a class="dropdown-item" href="Signout.php">Sign Out</a></li>
              </ul>
            </li>

            
            <!-- <li class="navbar-item pe-2"><a class="nav-link" href="login.php">Login</a></li>
            <li class="navbar-item"><a class="nav-link" href="signup.php">Sign Up</a></li> -->
          </ul>
        </div>
        
      </nav>
  </header>

  <section class="m-5 p-5" id="WishList">
    <h1 class="ms-3">Wish List</h1>
    <div class="container">
      <!-- Row 1 of Result -->
      <div class="row ms-auto me-auto">


        <?php
        for ($i = 0; $i < $No_of_ads; $i++) {
        ?>
          <div class="col-lg-4 col-md-6 mb-3">
            <div class="card" style="width: 18rem;">
              <img style="height: 12rem;" src="<?php echo $PictureLink[$i] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $titles[$i]  ?></h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Price: </b><?php echo $prices[$i]  ?></li>
              </ul>
              <div class="card-body pt-1 pb-1">
                <a href="adin.php?varname=<?php echo $ad_id[$i]  ?>" class="ms-auto me-auto btn btn-secondary me-auto card-link">See</a>
                <a class="btn btn-secondary card-link" onClick="return acall(<?php echo $ad_id[$i]; ?>)">Wish List
                  <!-- <img class="pb-1" src="star-red.ico"> -->
                </a>

                <!-- <a href="" class="btn btn-secondary cark-link"> -->
                <!-- <img class="mb-1" src="star.ico"> -->
                <!-- </a> -->
              </div>
            </div>
          </div>
        <?php
        }

        ?>

      </div>
    </div>
  </section>
 
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

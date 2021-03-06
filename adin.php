
<?php
session_start();
include "connection.php";
$Adid = (int)$_GET['varname'];
//echo $Adid;
//  var_dump($mAdID);
//var_dump($id);
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
  <!-- <section id="header"> -->
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand ps-5" href="index.php"><h2><i>Real Estate</i></h2></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="profile-dropdown collapse navbar-collapse ms-5" id="navbarSupportedContent">
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

          }
          ?>
        </ul>
      </div>
      
    </nav>
  </header>
<?php
  ///If loggedin .....
  // do this...
  // $userid=$_SESSION["user_id"];
  $sql="SELECT ad.ad_title,ad.ad_desc,ad.category,ad.ad_type,user.phone,user.email,ad.ad_price, ad.ad_city, ad.ad_area from ad  
  inner join user on ad.user_id=user.user_id and ad.ad_id='$Adid'";
  $res=$conn->query($sql);
  $Title="";
  $description="";
  $category="";
  $type="";
  $phone="";
  $city="";
  $area="";
  $price="";
  $email="";
  if($conn->query($sql)==TRUE)
  {
    while($row = $res->fetch_assoc()) {
      $Title=$row["ad_title"];
      //echo "$Title";
      $description=$row["ad_desc"];
      $category=$row["category"];
      $type=$row["ad_type"];
      $phone=$row["phone"];
      $email=$row["email"];
      $price=$row["ad_price"];
      $city = $row["ad_city"];
      $area = $row["ad_area"];
    }
  // echo "ad belong to: "."$email";
  }
  else
  echo"Query error";
  $sql="SELECT ad_picture.link from ad_picture  inner join ad on ad_picture.ad_id = ad.ad_id and ad_picture.ad_id='$Adid'";
  $result = $conn->query($sql);
  $picturelink=array();
  $count=0;
  if($conn->query($sql)==TRUE)
  {
    while($row = $result->fetch_assoc()) {
      array_push($picturelink,$row["link"]);
    } 
  }
  //$animals = array(???Bear???, ???Leopard???, ???Tiger???);

  $noOfPicture = count($picturelink);

  //print_r($noOfPicture);
  $conn->close();
?>

  <section id="advertisment">
    <div class="advertisment-result container  w-50 border pt-3 pb-3">
    <?php
    echo"<h1>"."$Title"."</h1>";
    ?>
      <!-- <h1>Title Of Add</h1> -->
      <div class="row ms-auto me-auto mb-3">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <!-- needs to be dynamic -->



            <!-- loop here for diplaying image -->
         
            <div class="carousel-item active">
              <img src="<?php echo $picturelink[0] ?>" class="d-block w-100" alt="...">
            </div>
          
            <?php
            for($i=1;$i<$noOfPicture;$i++)
            {
              ?>
              
            <div class="carousel-item">
              <img src="<?php echo $picturelink[$i]?>" class="d-block w-100" alt="...">
            </div>
            <?php
            }
            ?>
            <!-- <div class="carousel-item">
              <img src="images/house3.jpg" class="d-block w-100" alt="...">
            </div> -->
            <!-- loop ends here -->

          </div>
          
          <!-- Button functionality disabled atm -->
          <!-- Previous and Next Buttons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button> 
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="row  ms-auto me-auto">
        <div class="col-lg-8 border ">
        <?php
        echo"<p>"."$description"."</p>";
        ?>
          <!-- <h2>Description</h2> -->
          <p>
            
        </p>
        </div>
        <div class="col-lg-4">
          <ul class="list-group">
            <li class="list-group-item">
            <?php
            echo"<p><b>Category: </b>"."$category"."</p>"."</li>";
            ?>
            <!-- <h6>Category</h6></li> -->
            <li class="list-group-item">
            <?php
            echo"<p><b>Type: </b>"."$type"."</p>"."</li>";
            ?>
            <!-- City -->
            <li class="list-group-item">
            <?php
            echo"<p><b>City: </b>"."$city"."</p>"."</li>";
            ?>
            <!-- Area -->
            <li class="list-group-item">
            <?php
            echo"<p><b>Area: </b>"."$area"."</p>"."</li>";
            ?>
            <!-- <h6>Type</h6></li> -->
            <li class="list-group-item">
            <!-- <h6>0334-0099221</h6></li> -->
            <?php
            echo"<p><b>Contact: </b>"."$phone"."</p>"."</li>";
            ?>
            <li class="list-group-item">
            <!-- <h6>Price: 1000000</h6></li> -->
            <?php
            echo"<p><b>Price: </b>$"."$price"."</p>"."</li>";
            ?>
            <a href="mailto:<?php echo $email ?>"   class="list-group-item btn btn-dark" >Mail</a></li>
          </ul>
        </div>
      </div>
    </div>

  </section>

  <footer>

  </footer>

  <!-- </section> -->

</body>

</html>
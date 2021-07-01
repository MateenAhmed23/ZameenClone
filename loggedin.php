<?php
  $type = array('Buy', 'Rent');

  $cities = array('Lahore', 'Karachi' , 'Islamabad', 'Peshawar', 'Quetta', 'Muzaffarabad');

  $category = array('House', 'Flat', 'Commercial', 'Farm House');

  $sc_for_House = array('Any', 'Basement', 'Ground Floor', 'First Floor');

  $sc_for_Flat = array('Any', 'Pent House');

  $sc_for_Commercial = array('Office', 'Shop');

  $sc_for_Farm = array('Any');

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
        .container-fluid{
          width:95%;
        }
        .profile-dropdown {
          padding-right: 4rem;
        }
      </style>
      <link href="css/btn.css" rel="stylesheet">
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-3 pb-3">
        <a class="navbar-brand ps-5" href="loggedin.php"><h2><i>Real Estate</i></h2></a>
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
  
  <!-- Query Section -->
  <section id="Query" class="m-5 ps-5 pe-5 pb-3">
    <h1>Search</h1>
    <form class="row g-3" action="searchads.php" method="POST">
      <div class="col-md-4">

      <!-- Type -->
        <label class="form-label" for="type">Type</label>
        <select class="form-select" name="type" id="type">
          <!-- <option value="buy">Buy</option>
          <option value="rent">Rent</option> -->
        <?php
          foreach ($type as $value) {
              echo "<option value='$value'>$value</option>";
          }
        ?>
        </select>
      </div>

      <!-- Cities -->
      <div class="col-md-4">
        <label class="form-label" for="cities">Cities</label>
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
        <label class="form-label" for="location">Location</label>
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
      <!-- <div class="row mt-3"> -->
        <div class="col-lg-3">
        <input class="w-50 btn btn-secondary" type="submit" value="Find">
        </div>
      <!-- </div> -->
    </form>
  </section>

  <!-- Result Section -->
  <section id="result">
    <div class="container-fluid">
      <!-- Row 1 of Result -->
      <div class="row ms-5 me-5">
        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img style="height: 12rem;" src="images/house.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title mt-0 mb-0">House In DHA Phase 11</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Price: </b>10000000</li>
              <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
            </ul>
            <div class="card-body pt-1 pb-1">
              <a href="adin.php" class="btn btn-secondary card-link">see</a>
            </div>
          </div>
        </div>

        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img style="height: 12rem;" src="images/house2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title mt-0 mb-0">House In DHA Phase 11</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Price: </b>10000000</li>
              <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
            </ul>
            <div class="card-body pt-1 pb-1">
              <a href="adin.php" class="btn btn-secondary card-link">see</a>
            </div>
          </div>
        </div>

        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img style="height: 12rem;" src="images/house3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title mt-0 mb-0">House In DHA Phase 11</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Price: </b>10000000</li>
              <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
            </ul>
            <div class="card-body pt-1 pb-1">
              <a href="adin.php" class="btn btn-secondary card-link">see</a>
            </div>
          </div>
        </div>

        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img style="height: 12rem;" src="images/house4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title mt-0 mb-0">House In DHA Phase 11</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Price: </b>10000000</li>
              <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
            </ul>
            <div class="card-body pt-1 pb-1">
              <a href="adin.php" class="btn btn-secondary card-link">see</a>
            </div>
          </div>
        </div>

        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img style="height: 12rem;" src="images/house.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title mt-0 mb-0">House In DHA Phase 11</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Price: </b>10000000</li>
              <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
            </ul>
            <div class="card-body pt-1 pb-1">
              <a href="adin.php" class="btn btn-secondary card-link">see</a>
            </div>
          </div>
        </div>

        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img style="height: 12rem;" src="images/house2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title mt-0 mb-0">House In DHA Phase 11</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Price: </b>10000000</li>
              <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
            </ul>
            <div class="card-body pt-1 pb-1">
              <a href="adin.php" class="btn btn-secondary card-link">see</a>
            </div>
          </div>
        </div>

        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img style="height: 12rem;" src="images/house3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title mt-0 mb-0">House In DHA Phase 11</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Price: </b>10000000</li>
              <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
            </ul>
            <div class="card-body pt-1 pb-1">
              <a href="adin.php" class="btn btn-secondary card-link">see</a>
            </div>
          </div>
        </div>

        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img style="height: 12rem;" src="images/house4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title mt-0 mb-0">House In DHA Phase 11</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Price: </b>10000000</li>
              <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
            </ul>
            <div class="card-body pt-1 pb-1">
              <a href="adin.php" class="btn btn-secondary card-link">see</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center mt-5 mb-5">
      <button class="btn btn-md btn-secondary ms-auto me-auto">Show More</button>

    </div>
  </section>
  

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
  </body>
  </html>

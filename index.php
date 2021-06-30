<?php

  $type = array('Buy', 'Rent');

  $cities = array('Lahore', 'Karachi' , 'Islamabad', 'Peshawar', 'Quetta', 'Muzaffarabad');

  $category = array('House', 'Flat', 'Commercial', 'Farm House');

  $sc_for_House = array('All Floors', 'Basement', 'Ground Floor', 'First Floor');

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

  <!-- bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link href="css/index.css" rel="stylesheet">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
  <!-- <section id="header"> -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand ps-5" href="index.php">Real Estate</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-items collapse navbar-collapse ms-5" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto pe-5">
          <li class="navbar-item pe-2"><a class="nav-link" href="login.php">Login</a></li>
          <li class="navbar-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Query Section -->
  <section id="Query" class="m-5 ps-5 pe-5 border border-dark pt-3 pb-3">
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

      <div class="col-md-4">
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

      <div class="col-md-4">
        <label class="form-label" for="s_category">Sub-Category</label>
        <select class="form-select" name="s_category" id="s_category">

          <option value="house">House</option>
          <option value="flat">Flat</option>
          <option value="upper portion">Upper Portion</option>
          <option value="lower portion">Lower Portion</option>
          <option value="farm house">Farm House</option>
          <option value="penthouse"> Penthouse</option>
        </select>
      </div>


      <!-- Minimum Price -->

      <div class="col-md-4">
        <label class="form-label" for="min-price">Minimum Price(1000)</label>
        <input class="form-control" type="number" name="min-price" id="min-price" min="1000">
      </div>


      <!-- Maximum Price -->

      <div class="col-md-4">
          <label class="form-label" for="max-price">Maximum Price</label>
          <input class="form-control" type="number" name="max-price" id="max-price">
      </div>


      <!-- Input Button -->
      <div class="row mt-3">
        <!-- <div class="col ms-auto me-auto"> -->
        <input class="w-25 btn btn-dark ms-auto me-auto" type="submit" value="Find">
      </div>
    </form>
  </section>

  <!-- Result Section -->
  <section id="result">
    <div class="container-fluid">
      <!-- Row 1 of Result -->
      <div class="row ms-auto me-auto">
        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img style="height: 12rem;" src="images/house.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">House In DHA Phase 11</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Price: </b>10000000</li>
              <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
            </ul>
            <div class="row card-body">
              <a href="ad.php" class="ms-auto me-auto w-50 btn btn-dark me-auto card-link">See</a>
            </div>
          </div>
        </div>

        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img style="height: 12rem;" src="images/house2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">House In DHA Phase 11</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Price: </b>10000000</li>
              <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
            </ul>
            <div class="row card-body">
              <a href="ad.php" class="ms-auto me-auto w-50 btn btn-dark me-auto card-link">See</a>
            </div>
          </div>
        </div>

        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img style="height: 12rem;" src="images/house3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">House In DHA Phase 11</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Price: </b>10000000</li>
              <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
            </ul>
            <div class="row card-body">
              <a href="ad.php" class="ms-auto me-auto w-50 btn btn-dark me-auto card-link">See</a>
            </div>
          </div>
        </div>

        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img style="height: 12rem;" src="images/house4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">House In DHA Phase 11</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Price: </b>10000000</li>
              <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
            </ul>
            <div class="row card-body">
              <a href="ad.php" class="ms-auto me-auto w-50 btn btn-dark me-auto card-link">See</a>
            </div>
          </div>
        </div>

        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img style="height: 12rem;" src="images/house.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">House In DHA Phase 11</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Price: </b>10000000</li>
              <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
            </ul>
            <div class="row card-body">
              <a href="ad.php" class="ms-auto me-auto w-50 btn btn-dark me-auto card-link">See</a>
            </div>
          </div>
        </div>

        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img style="height: 12rem;" src="images/house2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">House In DHA Phase 11</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Price: </b>10000000</li>
              <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
            </ul>
            <div class="row card-body">
              <a href="ad.php" class="ms-auto me-auto w-50 btn btn-dark me-auto card-link">See</a>
            </div>
          </div>
        </div>

        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img style="height: 12rem;" src="images/house3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">House In DHA Phase 11</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Price: </b>10000000</li>
              <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
            </ul>
            <div class="row card-body">
              <a href="ad.php" class="ms-auto me-auto w-50 btn btn-dark me-auto card-link">See</a>
            </div>
          </div>
        </div>

        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img style="height: 12rem;" src="images/house4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">House In DHA Phase 11</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Price: </b>10000000</li>
              <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
            </ul>
            <div class="row card-body">
              <a href="ad.php" class="ms-auto me-auto w-50 btn btn-dark me-auto card-link">See</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Row 2 Of Result -->
      <!-- <div class="row ms-auto me-auto mb-3"> -->
      <!-- pull origin -u master -->

      <!-- </div>     -->
    </div>
    <div class="d-flex justify-content-center">
      <button class="btn btn-sm btn-dark ms-auto me-auto">Show More</button>

    </div>
  </section>

  <footer>

  </footer>

</body>

</html>
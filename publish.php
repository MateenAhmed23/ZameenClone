<?php

$type = array('Buy', 'Rent');

$cities = array('Lahore', 'Karachi', 'Islamabad', 'Peshawar', 'Quetta', 'Muzaffarabad');

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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="css/publish.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style>
    .profile-dropdown {
      padding-right: 4rem;
    }
  </style>

  <script src="jquery/publish.js"></script>
  <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
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

  <section id="PublishAd">
    <h1>Pusblish Ad</h1>
    <form class="row g-3" action="postad.php" method="POST">

      <!-- Title -->

      <div class="col-md-8">
        <label class="form-label" for="title">Title of Ad</label>
        <input class="form-control" type="text" name="title" id="title" maxlength="50">
      </div>
      <div class="col-md-8">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>

        <!-- Description -->
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" maxlength="250"></textarea>

      </div>


      <!-- Price -->
      <div class="col-md-4">
        <label class="form-label" for="price">Price (Minimum: 1000)</label>
        <input class="form-control" type="number" name="price" id="price" min="1000">

        <!-- Type -->

        <label class="form-label mt-2" for="type">Type</label>
        <select class="form-select" name="type" id="type"> -->
          <?php
          foreach ($type as $value) {
            echo "<option value='$value'>$value</option>";
          }
          ?>
        </select>


      </div>


      <!-- Location -->

      <div class="col-md-8">
        <label class="form-label" for="location">Location</label>
        <input class="form-control" type="text" name="location" id="location" maxlength="50">
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



      <!-- Category -->

      <div class="col-md-8">
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
          <?php
          foreach ($sc_for_House as $value) {
            echo "<option value='$value'>$value</option>";
          }
          ?>
        </select>
      </div>


      <!-- File Upload -->
      <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02" name="files" accept=".jpg,.png,.jpeg" multiple>
        <label class="input-group-text" for="files">Upload</label>
      </div>

      <!-- File Upload Button -->
      <div class="col-md-8">
        <input class="btn btn-dark" type="submit" value="Publish">
      </div>


    </form>

    </div>

  </section>


  <script type="text/javascript" src="jquery/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      $("#category").on("change", function() {

        var category = $("#category").val();


        // Please change arrays if there are changes in sub categories.... THEY ARE NOT DYNAMMIC

        let txt = "";

        if (category === 'House') {
          var House = ['Any', 'Basement', 'Ground Floor', 'First Floor'];


          for (let i = 0; i < House.length; ++i) {
            txt += "<option value=" + House[i] + ">" + House[i] + "</option>";
          }

        } else if (category === 'Flat') {

          var Flat = ['Any', 'Pent House'];

          for (let i = 0; i < Flat.length; ++i) {
            txt += "<option value=" + Flat[i] + ">" + Flat[i] + "</option>";
          }
        } else if (category === 'Commercial') {
          var Commercial = ['Office', 'Shop'];

          for (let i = 0; i < Commercial.length; ++i) {
            txt += "<option value=" + Commercial[i] + ">" + Commercial[i] + "</option>";
          }
        } else {

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
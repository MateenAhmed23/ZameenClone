<!DOCTYPE html>
<html lang="en">

<head>
     <title>Real Estate</title>
    <link rel="icon" href="favicon.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <style>
          /* .query-form {
            margin-left: 12rem;
            margin-right:12rem;
          } */
          .profile-btn{
            color:white;
          }
          .profile-btn:active{
            color:black;
          }
          @media (min-width:900px){
            #Query {
            margin-left: 15rem;
            margin-right: 15rem;
            border:1px solid;
          }
          }
          
        </style>
       
</head>
<body>
<section id="result">
    <div class="container-fluid">
      <!-- Row 1 of Result -->
      <div class="row ms-5 me-5">
      <?php
      // Loop Here
    $imageaddress = "images/house.jpg";
    $title = "title of Ad";
    $price = "100000";
    $contact = "+92-334-1234567";
    $ref = "adin.php";
      echo
        '<div class="col mb-3">
        <div class="card" style="width: 18rem;">' .
          '<img style="height: 12rem;" src="' . "$imageaddress". '" class="card-img-top" alt="...">' .
          '<div class="card-body">' .
            '<h5 class="card-title mt-0 mb-0">' . "$title" . '</h5>' .
          '</div>' .
          '<ul class="list-group list-group-flush">' .
            '<li class="list-group-item"><b>Price: </b>' . "$price" . '</li>' .
            '<li class="list-group-item"><b>Contact: </b>' . "$contact" . '</li>' .
          '</ul>' .
          '<div class="card-body pt-1 pb-1">
            <a href="adin.php" class="btn btn-secondary card-link">see</a>
           <a href="" class="btn btn-secondary cark-link">
              <img class="mb-1" src="star.ico">
            </a>
          </div>
        </div>
      </div>';
        ?>
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
              <a href="" class="btn btn-secondary cark-link">
                <img class="mb-1" src="star.ico">
              </a>
            </div>
          </div>
        </div>

        <?php
      // Loop Here
    $imageaddress = "images/house.jpg";
    $title = "title of Ad";
    $price = "100000";
    $contact = "+92-334-1234567";
    $ref = "adin.php";
      echo
        '<div class="col mb-3">
        <div class="card" style="width: 18rem;">' .
          '<img style="height: 12rem;" src="' . "$imageaddress". '" class="card-img-top" alt="...">' .
          '<div class="card-body">' .
            '<h5 class="card-title mt-0 mb-0">' . "$title" . '</h5>' .
          '</div>' .
          '<ul class="list-group list-group-flush">' .
            '<li class="list-group-item"><b>Price: </b>' . "$price" . '</li>' .
            '<li class="list-group-item"><b>Contact: </b>' . "$contact" . '</li>' .
          '</ul>' .
          '<div class="card-body pt-1 pb-1">
            <a href="adin.php" class="btn btn-secondary card-link">see</a>
           <a href="" class="btn btn-secondary cark-link">
              <img class="mb-1" src="star.ico">
            </a>
          </div>
        </div>
      </div>';
        ?>

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
              <a href="" class="btn btn-secondary cark-link">
                <img class="mb-1" src="star.ico">
              </a>
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
              <a href="" class="btn btn-secondary cark-link">
                <img class="mb-1" src="star.ico">
              </a>
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
              <a href="" class="btn btn-secondary cark-link">
                <img class="mb-1" src="star.ico">
              </a>
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
              <a href="" class="btn btn-secondary cark-link">
                <img class="mb-1" src="star.ico">
              </a>
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
              <a href="" class="btn btn-secondary cark-link">
                <img class="mb-1" src="star.ico">
              </a>
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
              <a href="" class="btn btn-secondary cark-link">
                <img class="mb-1" src="star.ico">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Show More Button -->
    <div class="d-flex justify-content-center mt-5 mb-5">
     <button class="btn btn-md btn-secondary ms-auto me-auto">Show More</button>
    </div>
  </section>

</body>
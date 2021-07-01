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
    .navbar-items {
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
      <div class="navbar-items collapse navbar-collapse ms-5" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto pe-5">
          <li class="navbar-item pe-2"><a class="nav-link" href="login.php">Login</a></li>
          <li class="navbar-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
        </ul>
      </div>
    </nav>
  </header>

<!--<gm changes>-->
  <section id="advertisment">
    <div class="advertisment-result container  w-50 border pt-3 pb-3">
      <h1>Title Of Add</h1>
      <div class="row ms-auto me-auto mb-3">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/house.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/house2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/house3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
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
          <h2>Description</h2>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
          </p>
        </div>
        <div class="col-lg-4">
          <ul class="list-group">
            <li class="list-group-item"><h6>Category</h6></li>
            <li class="list-group-item"><h6>Type</h6></li>
            <li class="list-group-item"><h6>0334-0099221</h6></li>
            <li class="list-group-item"><h6>Price: 1000000</h6></li>
            <li class="list-group-item btn btn-dark">Message</li>
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
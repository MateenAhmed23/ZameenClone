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
    
</head>

<body>
    <!-- <section id="header"> -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand ps-5" href="index.php">Real Estate</a>
            <ul class="navbar-nav ms-auto pe-5">
                <li class="navbar-item pe-2"><a class="nav-link" href="login.php">Login</a></li>
                <li class="navbar-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
            </ul>
        </nav>
    </header>
    <section id="query" class="m-5 ps-5 pe-5">
        <form class="" action="">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label" for="type">Type</label>
                    <select class="form-select" name="type" id="type">
                        <option value="buy">Buy</option>
                        <option value="rent">Rent</option>
                    </select>
                </div>
                <div class="col">
                    <label class="form-label" for="cities">Cities</label>
                    <select class="form-select" name="cities" id="cities">
                        <option value="lahore">Lahore</option>
                        <option value="karachi">Karachi</option>
                        <option value="quetta">Quetta</option>
                    </select>
                </div>
                <div class="col">
                    <label class="form-label" for="location">Location</label>
                    <input class="form-control" type="text" name="location" id="location" maxlength="50">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label" for="category">Category</label>
                    <select class="form-select" name="category" id="category">
                        <option value="house">House</option>
                        <option value="flat">Flat</option>
                        <option value="upper portion">Upper Portion</option>
                        <option value="lower portion">Lower Portion</option>
                        <option value="farm house">Farm House</option>
                        <option value="penthouse"> Penthouse</option>
                    </select>
                </div>
                <div class="col">
                    <label class="form-label" for="min-price">Minimum Price(1000)</label>
                    <input class="form-control" type="number" name="min-price" id="min-price" min="1000">
                </div>
                <div class="col">

                    <label class="form-label" for="max-price">Maximum Price</label>
                    <input class="form-control" type="number" name="max-price" id="max-price">
                </div>
            </div>

            <div class="row">

                <!-- <div class="col"> -->
                    <input class="w-50 btn btn-dark ms-auto me-auto" type="submit" value="Find">
                <!-- </div> -->
            </div>
        </form>
    </section>

    <section id="result">
        <div class="container">
            <div class="row ms-auto me-auto mb-3">
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img src="images/house.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">House In DHA Phase 11</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><b>Price: </b>10000000</li>
                          <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
                        </ul>
                        <div class="card-body">
                          <a href="ad.php" class="w-100 btn btn-dark me-auto card-link">See</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img src="images/house2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">House In DHA Phase 11</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><b>Price: </b>10000000</li>
                          <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
                        </ul>
                        <div class="card-body">
                          <a href="ad.php" class="w-100 btn btn-dark me-auto card-link">See</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img src="images/house3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">House In DHA Phase 11</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><b>Price: </b>10000000</li>
                          <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
                        </ul>
                        <div class="card-body">
                          <a href="ad.php" class="w-100 btn btn-dark me-auto card-link">See</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img src="images/house4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">House In DHA Phase 11</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><b>Price: </b>10000000</li>
                          <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
                        </ul>
                        <div class="card-body">
                          <a href="ad.php" class="w-100 btn btn-dark me-auto card-link">See</a>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row ms-auto me-auto mb-3">
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img src="images/house.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">House In DHA Phase 11</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><b>Price: </b>10000000</li>
                          <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
                        </ul>
                        <div class="card-body">
                          <a href="ad.php" class="w-100 btn btn-dark me-auto card-link">See</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img src="images/house2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">House In DHA Phase 11</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><b>Price: </b>10000000</li>
                          <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
                        </ul>
                        <div class="card-body">
                          <a href="ad.php" class="w-100 btn btn-dark me-auto card-link">See</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img src="images/house3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">House In DHA Phase 11</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><b>Price: </b>10000000</li>
                          <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
                        </ul>
                        <div class="card-body">
                          <a href="ad.php" class="w-100 btn btn-dark me-auto card-link">See</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img src="images/house4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">House In DHA Phase 11</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><b>Price: </b>10000000</li>
                          <li class="list-group-item"><b>Contact: </b>0333-1233211</li>
                        </ul>
                        <div class="card-body">
                          <a href="ad.php" class="w-100 btn btn-dark me-auto card-link">See</a>
                        </div>
                      </div>
                </div>
            </div>    
        </div>
        
    </section>

    <footer>

    </footer>

    <!-- </section> -->

</body>

</html>
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

    <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  pt-3 pb-3">
        <a class="navbar-brand ps-5" href="index.php"><h2><i>Real Estate</i></h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-items collapse navbar-collapse ms-5" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto pe-5">
        <li class="navbar-item pe-2"><a class="nav-link" href="login.php">Login</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <main class="form-signin">
<?php
if(isset($_GET["error"]))
echo $_GET["error"];
?>
    <div class="m-5 p-5">
      <form method="POST" action="signup_auth.php">
      
        <h1 class="h3 mb-3 fw-normal">Sign Up</h1>
        <div class="row">
          <div class="col">
            <div class="form-floating mb-3">
              <input type="text" name="firstname" class="form-control" id="floatingFirstName" placeholder="First Name" required>
              <label for="floatingEmail">First Name</label>
            </div>
          </div>
          <div class="col">
            <div class="form-floating mb-3">
              <input type="text" name="lastname" class="form-control" id="floatingLastName" placeholder="Last Name" required>
              <label for="floatingLastName">Last Name</label>
            </div>
          </div>
           
            
        </div>
        <div class="form-floating mb-3">
          <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com" required>
          <label for="floatingEmail">Email address</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" name="username" class="form-control" id="floatingUsername" placeholder="Username" required>
          <label for="floatingUsername">Username</label>
        </div>
  
        <div class="form-floating mb-3">
          <input type="tel" name="phone" class="form-control" id="floatingPhone" placeholder="+92-331-1234561" pattern="[0]{1}[0-9]{10}" required>
          <label for="floatingPhone">Phone (03311234561)</label>
        </div>

        <div class="form-floating mb-3">
          <input type="number" name="cnic" class="form-control" id="cnic" placeholder="XXXXXXXXXXXXX">
          <label for="cnic">CNIC (XXXXXXXXXXXXX) (Optional)</label>
        </div>

        <div class="form-floating mb-3">
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
          <label for="floatingPassword">Password</label>
        </div>
       
        <div class="form-floating mb-3">
          <input type="password" name="re-password" class="form-control" id="floatingRePassword" placeholder="Password" required>
          <label for="floatingRePassword">Re-enter Your Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-dark" type="submit">Sign Up</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
        
      </form>
    </div>
   
  </main>
</body>
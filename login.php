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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand ps-5" href="index.php">Real Estate</a>
    </nav>
  </header>
  <main class="form-signin">
    <div class="m-5 p-5">
      <form method = "POST" action = "loginCheck.php">
      
        <h1 class="h3 mb-3 fw-normal">Sign in</h1>
    
        <div class="form-floating mb-3">
          <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username or email">
          <label for="floatingInput">Email or Username</label>
        </div>
  
        <div class="form-floating mb-3">
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
    
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" name="remember-me" value="remember-me"> Remember me
          </label>
        </div>
  
        <button class="w-100 btn btn-lg btn-dark" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
        
      </form>
    </div>
   
  </main>
</body>
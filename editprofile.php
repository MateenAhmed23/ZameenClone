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

    .profile-btn {
      color: grey;
    }

    .profile-btn:hover {
      color: white;
    }

    .profile-btn:active {
      color: rgb(122, 119, 119);
    }

    #Intro {
      width: 50%;
      margin-left: auto;
      margin-right: auto;
    }

    .profile-picture {
      width: 170px;
      height: 170px;
      border-radius: 50%;
    }
  </style>
</head>

<body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-3 pb-3">
      <a class="navbar-brand ps-5" href="loggedin.php"><h2><i>Real Estate</i></h2></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="profile-dropdown collapse navbar-collapse ms-5" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto pe-5">
          <li class="navbar-item"><a class="nav-link" href="publish.php">Publish Ad</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
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
  <section id="Intro">
    <div>
      <div class="row mt-5">
        <div class="col-md-4">
          <img class="profile-picture" src="images/profile.png" alt="profile alternative picture">
        </div>
        <div class="col-md-8 pt-3">
          <h1>Muhammad Muneeb Ur Rahman</h1>
        </div>
      </div>
    </div>
  </section>
  <div>
    <div style="width: 50%;" class="container-fluid ms-auto me-auto pt-5 pb-5">
      <ul class="nav nav-tabs bg-dark" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="profile-btn nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
            type="button" role="tab" aria-controls="home" aria-selected="true">Info</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="profile-btn nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
            type="button" role="tab" aria-controls="profile" aria-selected="false">Password</button>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active mt-3" id="home" role="tabpanel" aria-labelledby="home-tab">
          <h3>Update Information</h3>
          <form class="row g-3 mt-3" action="" method="POST">

            <div class="col-md-6">
              <label class="form-label" for="FirstName">First Name</label>
              <input class="form-control" type="text" name="FirstName" id="FirstName">

            </div>

            <!-- Cities -->
            <div class="col-md-6">
              <label class="form-label" for="LastName">Last Name</label>
              <input class="form-control" type="text" name="LastName" id="LastName">

            </div>

            <div class="col-md-6">
              <label class="form-label" for="LastName">Phone Number</label>
              <input class="form-control" type="tel" name="phone" id="floatingPhone" placeholder="+92-331-1234561" pattern="[0]{1}[0-9]{10}"
                required>
            </div>

            <div class="col-md-6">
              <label class="form-label" for="cnic">CINC</label>
              <input class="form-control" type="number" name="cnic" id="cnic" placeholder="XXXXX-XXXXXXX-X">
            </div>

            <div class="col-md-6">
              <label class="form-label" for="Username">Username</label>
              <input class="form-control" type="text" id="Username" placeholder="">
            </div>

            <div class="col-md-6">
              <label class="form-label" for="Email">Email</label>
              <input class="form-control" type="email" id="Email">
            </div>

            <!-- Input Button -->
            <div class="mt-3">
              <!-- <div class="col ms-auto me-auto"> -->
              <input class="w-25 btn btn-dark" type="submit" value="Update">
            </div>
          </form>
        </div>


        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <h3 class="mt-3">Change Password</h3>
          <form class="row g-3 mt-3" action="" method="POST">
            <div class="col-md-4">
              <label class="form-label" for="OldPassword">Old Password</label>
              <input class="form-control" type="password" id="OldPassword">
            </div>
            <div class="col-md-4">
              <label class="form-label" for="NewPassword">New Password</label>
              <input class="form-control" type="password" id="OldPassword">
            </div>
            <div class="col-md-4">
              <label class="form-label" for="ReNewPassword">Re-Enter New Password</label>
              <input class="form-control" type="password" id="OldPassword">
            </div>
            <div class="mt-3">
              <!-- <div class="col ms-auto me-auto"> -->
              <input class="w-25 btn btn-dark" type="submit" value="Update">
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</body>

</html>
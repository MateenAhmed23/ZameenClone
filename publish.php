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
      
    <link rel="stylesheet" href="css/publish.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
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
              <li><a class="dropdown-item" href="index.php">Sign Out</a></li>
            </ul>
          </li>

        </ul>
      </div>
      
    </nav>
  </header>

  <section id="PublishAd">
    <h1>Pusblish Ad</h1>
    <form class="row g-3" action="" method="POST">
      <div class="col-md-8">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" maxlength="250"></textarea>
        <!-- Type -->
        
      </div>

      <!-- Cities -->
      <div class="col-md-4">
        <label class="form-label" for="price">Price (Minimum: 1000)</label>
        <input class="form-control" type="number" name="price" id="price" min="1000">

        <label class="form-label mt-2" for="type">Type</label>
        <select class="form-select" name="type" id="type"> -->
          <option value="buy">Buy</option>
          <option value="rent">Rent</option>
        </select>

        
      </div>


      <!-- Location -->

      <div class="col-md-8">
        <label class="form-label" for="location">Location</label>
        <input class="form-control" type="text" name="location" id="location" maxlength="50">
      </div>

      <div class="col-md-4">
        <label class="form-label" for="cities">Cities</label>
        <select class="form-select" name="cities" id="cities">
        </select>
      </div>
      <!-- Category -->

      <div class="col-md-8">
        <label class="form-label" for="category">Category</label>
        <select class="form-select" name="category" id="category">
        </select>
      </div>

      <!-- Sub- Category -->

      <div class="col-md-4">
        <label class="form-label" for="s_category">Sub-Category</label>
        <select class="form-select" name="s_category" id="s_category">
        </select>
      </div>


      <!-- Minimum Price -->

      <div class="col-md-4">
       
      </div>


      <!-- Maximum Price -->

      <!-- <div class="col-md-4">
          <label class="form-label" for="max-price">Maximum Price</label>
          <input class="form-control" type="number" name="max-price" id="max-price">
      </div> -->
      <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02" accept=".jpg,.png,.jpeg,.mp4,.mkv" multiple>
        <label class="input-group-text" for="inputGroupFile02">Upload</label>
        <!-- <fieldset class="form-group">
          <a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a>
          <input type="file" id="pro-image" name="pro-image" style="display: none;" class="form-control" multiple>
      </fieldset>
      <div class="preview-images-zone">
          <div class="preview-image preview-show-1">
              <div class="image-cancel" data-no="1">x</div>
              <div class="image-zone"><img id="pro-img-1" src="https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5Ny85NTkvb3JpZ2luYWwvc2h1dHRlcnN0b2NrXzYzOTcxNjY1LmpwZw=="></div>
              <div class="tools-edit-image"><a href="javascript:void(0)" data-no="1" class="btn btn-light btn-edit-image">edit</a></div>
          </div>
          <div class="preview-image preview-show-2">
              <div class="image-cancel" data-no="2">x</div>
              <div class="image-zone"><img id="pro-img-2" src="https://www.codeproject.com/KB/GDI-plus/ImageProcessing2/flip.jpg"></div>
              <div class="tools-edit-image"><a href="javascript:void(0)" data-no="2" class="btn btn-light btn-edit-image">edit</a></div>
          </div>
          <div class="preview-image preview-show-3">
              <div class="image-cancel" data-no="3">x</div>
              <div class="image-zone"><img id="pro-img-3" src="http://i.stack.imgur.com/WCveg.jpg"></div>
              <div class="tools-edit-image"><a href="javascript:void(0)" data-no="3" class="btn btn-light btn-edit-image">edit</a></div>
          </div>

          <script>
            $(document).ready(function() {
  document.getElementById('pro-image').addEventListener('change', readImage, false);
  
  $( ".preview-images-zone" ).sortable();
  
  $(document).on('click', '.image-cancel', function() {
      let no = $(this).data('no');
      $(".preview-image.preview-show-"+no).remove();
  });
});



var num = 4;
function readImage() {
  if (window.File && window.FileList && window.FileReader) {
      var files = event.target.files; //FileList object
      var output = $(".preview-images-zone");

      for (let i = 0; i < files.length; i++) {
          var file = files[i];
          if (!file.type.match('image')) continue;
          
          var picReader = new FileReader();
          
          picReader.addEventListener('load', function (event) {
              var picFile = event.target;
              var html =  '<div class="preview-image preview-show-' + num + '">' +
                          '<div class="image-cancel" data-no="' + num + '">x</div>' +
                          '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                          '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">edit</a></div>' +
                          '</div>';

              output.append(html);
              num = num + 1;
          });

          picReader.readAsDataURL(file);
      }
      $("#pro-image").val('');
  } else {
      console.log('Browser not support');
  }
}


          </script> -->
      </div>
  </div>
      </div>

      <div class="col-md-8">
        <input class="btn btn-dark" type="submit" value="Publish">
      </div>


      <!-- Input Button -->
      <div class="row mt-3">
        <!-- <div class="col ms-auto me-auto"> -->
      </div>
    </form>

    </div>

  </section>
  </body>
  </html>

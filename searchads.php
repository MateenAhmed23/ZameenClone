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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style>
    /* .query-form {
            margin-left: 12rem;
            margin-right:12rem;
          } */
    .profile-btn {
      color: white;
    }

    .profile-btn:active {
      color: black;
    }

    @media (min-width:900px) {
      #Query {
        margin-left: 15rem;
        margin-right: 15rem;
        border: 1px solid;
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



        ////////// queries for retriving ad


        include "connection.php";


        $type = $_POST["type"];

        $city = $_POST["cities"];
        $location = $_POST["location"];
        $category = $_POST["category"];
        $s_category = $_POST["s_category"];
        $min_price = $_POST["min-price"];

        $max_price = $_POST["max-price"];

        // things which are required are here

        if (strcasecmp($s_category, 'Any') == 0) {
          $sql = "SELECT * FROM ad  where '$location' = ad_area AND '$type' = ad_type and '$category'=category 
    and ad_price between '$min_price'and '$max_price'";
          // $sql will have the data for the ad
          // need to write a new query which will have only the link of the picture
          // i need join two tables

          $linkOFPicture = "SELECT ad_picture.link FROM `ad_picture` left join  `ad` on  ad.ad_id = ad_picture.ad_id
    WHERE (ad.ad_area='DHA'
     AND ad.ad_type = 'Buy' and ad.category = 'House'
     and ad.ad_price between '$min_price' and '$max_price');";
        } else {

          $sql = "SELECT * FROM ad where '$location' = ad_area AND '$type' = ad_type and '$category'=category 
and '$s_category' = sub_category and ad_price between '$min_price'and '$max_price'";

          $linkOFPicture = "SELECT ad_picture.link FROM `ad_picture` left join  `ad` on  ad.ad_id = ad_picture.ad_id
WHERE (ad.ad_area='DHA'
 AND ad.ad_type = 'Buy' and ad.category = 'House' and '$s_category' = sub_category
 and ad.ad_price between '$min_price' and '$max_price');";

          //$pulisherContactInfo = "SELECT phone from user where '$sql['user_id']'=user_id;"

        }

        $res = $conn->query($sql);

        $pic = $conn->query($linkOFPicture);






        /////////// ends here 

        // displaying ad





        for ($i = 0; $i < $res->num_rows; $i++) {
          $ref = "adin.php";
          $row = $res->fetch_assoc();
          $picture = $pic->fetch_assoc();


          $imageaddress = $picture["link"];
          $title = $row["ad_title"];
          $price = $row["ad_price"];
          $adID = $row["ad_id"];
print_r($adID);
          echo
          '<div class="col mb-3">
        <div class="card" style="width: 18rem;">' .
            '<img style="height: 12rem;" src="' . "$imageaddress" . '" class="card-img-top" alt="...">' .
            '<div class="card-body">' .
            '<h5 class="card-title mt-0 mb-0">' . "$title" . '</h5>' .
            '</div>' .
            '<ul class="list-group list-group-flush">' .
            '<li class="list-group-item"><b>Price: </b>' . "$price" . '</li>' .
            '</ul>' .
            '<div class="card-body pt-1 pb-1">
          
            <a  href="adin.php?varname=';
            echo $adID ; echo '"class="btn btn-secondary card-link">see</a>
            <a href="" class="btn btn-secondary cark-link">
              <img class="mb-1" src="star.ico">
            </a>
          </div>
        </div>
      </div>';
        }
        ?>

      </div>
    </div>

    <!-- Show More Button -->
    <!-- <div class="d-flex justify-content-center mt-5 mb-5">
      <button class="btn btn-md btn-secondary ms-auto me-auto">Show More</button>
    </div> -->
  </section>

</body>
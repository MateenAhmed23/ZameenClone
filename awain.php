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

    <form class="row g-3" action="postad.php" method="POST" enctype="multipart/form-data">

        <!-- Title -->
        <div class="col-md-12">
            <label class="form-label" for="title">Title of Ad</label>
            <input class="form-control" type="text" name="title" id="title" maxlength="50">
        </div>



        <!-- Description -->
        <div class="col-md-8">
            <label for="desc" class="form-label">Description</label>
            <textarea class="form-control" name="desc" id="desc" rows="8" maxlength="250"></textarea>
        </div>


        <!-- Price & Type -->
        <div class="col-md-4">
            <label class="form-label" for="price">Price (Minimum: 1000)</label>
            <input class="form-control" type="number" name="price" id="price" min="1000">
            <label class="form-label mt-2" for="type">Type</label>
            <select class="form-select" name="type" id="type">
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
            <!-- <label class="input-group-text" for="files"></label> -->
            <input type="file" class="form-control" id="fileupload" name="files[]" accept=".jpg,.png,.jpeg" multiple>
        </div>


        <!-- File Upload Button -->
        <div class="col-md-8">
            <input class="btn btn-dark" type="submit" value="Publish" name="publish">
        </div>


    </form>


</body>

</html>
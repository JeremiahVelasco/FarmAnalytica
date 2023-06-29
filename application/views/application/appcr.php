<!doctype html>
<html lang="en">
  <head>
    <title>Farm Analytica - Crop Recommendation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "stylesheet" href = "<?php echo base_url('.../CSS/style.css')?>">
    <link rel = "icon" href = "<?php echo base_url('assets/images/FARM_ANALYTICA_LOGO.png')?>">
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  
  <body id="apppage" style="background-size: cover; background-attachment: fixed; background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0)), url(<?= base_url('assets/images/illiya-vjestica-W5FdAcHp7l8-unsplash.jpg') ?>);">
  <!--Main Navigation-->
<header>
        <style>

          body {
            padding: 3%;
          }

          #navilink:hover {
            outline: 1px solid white;
            border-radius: 10px;
          }

          #cardimg {
            border-radius: 5px;
          }

          .navbar i {
            padding: 3px 3px;
            border-radius: 5px;
          }

          .navbar i:hover {
            background: #157347;
          }
        </style>

        <!--BOOTSTRAP CDN || FOR RESPONSIVENESS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <!--FONT AWESOME CDN || FOR ICONS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="<?php echo base_url("assets/images/innovatron_industries.png")?>" alt="Bootstrap" width="300" height="40"></a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse mx-5" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a id="navilink" class="nav-link px-3 text-white" aria-current="page" href="<?php echo base_url("Landing/home")?>">Home</a>
              </li>
              <li class="nav-item">
                <a id="navilink" class="nav-link px-3 text-white" href="<?php echo base_url("Landing/appCR") ?>" rel="nofollow" target="_blank">Application</a>
              </li>
              <li class="nav-item">
                <a id="navilink" class="nav-link px-3 text-white" href="<?php echo base_url("Landing/about") ?>" rel="nofollow" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a id="navilink" class="nav-link px-3 text-white" href="contact.html" target="_blank">Contact Us</a>
              </li>
              <li class="nav-item dropdown">
                <!-- Example split danger button -->
                <div class="btn-group">
                              <button type="button" class="btn btn-secondary"> <img src="<?php echo base_url('assets/images/placeholder_picture.png')?>" alt="avatar" class="rounded-circle img-fluid" style="width: 25px"> </button>
                              <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                              </button>
                              <ul class="dropdown-menu" style = "width: 70px">
                                <li><p class = "px-3" style = "font-weight: bold">Craig Ronquillo</p></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                  <table>
                                    <tr>
                                      <th> <a class="dropdown-item w-100" href="<?php echo base_url("Landing/GoToProfile") ?>" style = "padding-left: 3px"><i class="fa fa-eye px-3"></i>View Profile</a></th>
                                    </tr>
                                  </table>
                                </li>
                                <li>
                                  <table>
                                    <tr> 
                                      <th> <a class="dropdown-item w-100" href="<?php echo base_url('Logout') ?>" style = "padding-left: 3px"><i class="fa fa-sign-out px-3"></i>Log Out</a></th>
                                    </tr>
                                  </table>
                                </li>
                              </ul>
                            </div>
              </li>
            </ul>
          </div>
    </div>
  </div>
</nav>
        <!-- Navbar -->
    <div class="container-fluid">
      <form id="crForm" action="<?php echo base_url("CropRecommendation/processCR") ?>" method="post" class="text-white text-center mt-5 px-5">
            <h1 class="text-center text-white">Crop Recommendation</h1>
            <div class="row p-3 mt-4">
              <div class="col-md-4">
                  <label for="nitrogen" class="form-label"><h4>Nitrogen Level</h4></label>
                  <input name="N" type="number" class="form-control digits" id="nitrogen">
                  <small id="nitrogenHelpId" class="form-text text-muted"></small>
              </div>
            
              <div class="col-md-4">
                  <label for="phosphorus" class="form-label"><h4>Phosphorus Level</h4></label>
                  <input name="P" type="number" class="form-control digits" id="phosphorus">
                  <small id="phosphorusHelpId" class="form-text text-muted"></small>
              </div>

              <div class="col-md-4">
                  <label for="potassium" class="form-label"><h4>Potassium Level</h4></label>
                  <input name="K" type="number" class="form-control digits" id="potassium">
                  <small id="potassiumHelpId" class="form-text text-muted"></small>
              </div>
            </div>
            <div class="row p-3 mt-1">
              <div class="col-md-4">
                  <label for="temperature" class="form-label"><h4>Temperature</h4></label>
                  <input name = "temperature" type="number" class="form-control digits" step=".01" id="temperature" value="<?php echo isset($temperature) ? $temperature : ''; ?>">
                  <small id="temperatureHelpId" class="form-text text-muted"></small>
              </div>

              <div class="col-md-4">
                  <label for="humidity" class="form-label"><h4>Humidity</h4></label>
                  <input name="humidity" type="number" class="form-control digits" step=".01" id="humidity" value="<?php echo isset($humidity) ? $humidity : ''; ?>">
                  <small id="humidityHelpId" class="form-text text-muted"></small>
              </div>

              <div class="col-md-4">
                  <label for="precipitation" class="form-label"><h4>Precipitation</h4></label>
                  <input name="precipitation" type="number" class="form-control digits" step=".01" id="precipitation" value="<?php echo isset($precipitation) ? $precipitation : ''; ?>">
                  <small id="precipitationHelpId" class="form-text text-muted"></small>
              </div>
            </div>
            <div class="row p-3 mt-2">
              <div class="col-md-4">
              </div>
              <div class="col-md-4 mprow" style="display: none;">
                  <label for="mp" class="form-label"><h4>Municipality, Province</h4></label>
                  <input name="mp" type="text" class="form-control digits text-center" id="mp">
                  <button id="fillBtn" name="fillBtn" type="submit" class="btn btn-success mt-5 pt-2 px-4"><h6>FILL</h6></button>
                  <small id="mpHelpId" class="form-text text-muted"></small>
              </div>
              <div class="col-md-4">
              </div>
            </div>
            <div class = "row mb-3">
              <div class="col-3">
                  <button id="profileLocationBtn" name="profileLocationBtn" type="submit" class="btn btn-success mt-5 pt-2 px-4"><h4>Use Location from Profile</h4></button>
              </div>
            
              <div class="col-3">
                  <button id="currentLocationBtn" name="currentLocationBtn" type="submit" class="btn btn-success mt-5 pt-2 px-4"><h4>Use Current Location</h4></button>
              </div>

              <div class="col-3">
                  <button id="predictBtn" name="predict" type="button" class="btn btn-success mt-5 pt-2 px-4"><h4>Predict</h4></button>
              </div>

              <div class="col-3">
                  <button id="nextBtn" type="button" class="btn btn-success mt-5 pt-2 px-4"><h4>Next</h4></button>
              </div>
            </div>
            <div class = "row mb-3">
              <div class="col-4">
                  
              </div>
            
              <div class="col-4">
                <input name="res" class="text-center text-dark" id="res" value="<?php echo isset($res) ? $res : ''; ?>">
              </div>

              <div class="col-4">
                
              </div>
            </div>
            

      </form>
    
    <!--BUTTON SCRIPTS-->  
    <script>
    
    //FOR LOCATION FROM PROFILE
    $(document).ready(function() {
      // FOR PROFILE LOCATION
      $('#profileLocationBtn').click(function(e) {
        e.preventDefault();

        $.ajax({
          url: '<?php echo base_url("CropRecommendation/profileLocation") ?>',
          method: 'GET',
          success: function(response) {
            $('#temperature').val(response.temperature);
            $('#humidity').val(response.humidity);
            $('#precipitation').val(response.precipitation);
          },
          error: function() {
            // Handle error if the request fails
          }
        });
      });

      // FOR CURRENT LOCATION
      $('#fillBtn').click(function(e) {
        e.preventDefault();

        var city = $('#mp').val();

        $.ajax({
          url: '<?php echo base_url("CropRecommendation/currentLocation") ?>',
          method: 'GET',
          data: { city: city },
          success: function(response) {
            $('#temperature').val(response.temperature);
            $('#humidity').val(response.humidity);
            $('#precipitation').val(response.precipitation);
          },
          error: function() {
            // Handle error if the request fails
          }
        });
      });

      // TOGGLE MUNICIPALITY, PROVINCE ROW
      $('#currentLocationBtn').click(function(e) {
        e.preventDefault();

        const mp = document.querySelector('.mprow');

        if(mp.style.display === 'none') {
          mp.style.display = 'block';
        }
        else {
          mp.style.display = 'none';
        }
      }); 

      // PROCESS USING ML MODEL AND TO DISPLAY RECOMMENDED CROP
      $("#crForm").click(function(event) {
        event.preventDefault(); // Prevent form submission

        // Serialize form data
        var formData = $('#crForm').serialize();


        // Send an AJAX request to the PHP script
        $.ajax({
          url: "<?php echo base_url("CropRecommendation/processCR") ?>",
          type: "POST",
          data: formData,
          dataType: "json",
          success: function(response) {
            // Update the #res element with the returned data
              $('#res').val(response.res);
          },
          error: function(xhr, status, error) {
            // Handle errors
              console.log(xhr.responseText);
          }
        });
      });

      // GO TO NEXT PAGE BUTTON
      $("#nextBtn").click(function(event) {
        window.location.href = "<?php echo base_url('CropRecommendation/appFR') ?>";
      });

    });
    </script>

    </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </body>
</html>
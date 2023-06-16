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
    <div class="container-fluid">
      <form id="crForm" action="<?php echo base_url("CropRecommendation/processML") ?>" method="post" class="text-white text-center mt-5 px-5">
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
                  <button id="submitBtn" name="submit" type="submit" class="btn btn-success mt-5 pt-2 px-4"><h4>Next</h4></button>
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
      <script>
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

    // PROCESS USING ML MODEL
    $("#predictBtn").click(function(event) {
        event.preventDefault(); // Prevent form submission

        // Serialize form data
        var formData = $('#crForm').serialize();


        // Send an AJAX request to the PHP script
        $.ajax({
            url: "<?php echo base_url("CropRecommendation/processML") ?>",
            type: "POST",
            data: formData,
            dataType: "json",
            success: function(response) {
                // Update the #res element with the returned data
                $('#res').val(responseData);
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.log(xhr.responseText);
            }
        });
    });
});

      </script>

    </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </body>
</html>
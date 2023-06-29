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

  <body id="apppage" style="background: #1e1e1e;">
    <div class="container-fluid">
      <form id="crForm" action="<?php echo base_url("CropRecommendation/dataReport") ?>" method="post" class="text-white text-center mt-5 px-5">
            <h1 class="text-center text-white">Summary Report</h1>
            <!--ROW-->
            <div class="row p-3 mt-5">
              <div class="col-md-4">
                <label for="N" class="form-label"><h4>Nitrogen</h4></label>
                <?php var_dump($N); ?>
                <input type ="text" name="N" class="text-center text-dark" id="N" value="<?php echo $N; ?>">
              </div>
            
              <div class="col-md-4">
                <label for="P" class="form-label"><h4>Phosphorus</h4></label>
                <input name="P" class="text-center text-dark" id="P" value="<?php echo $P; ?>">
              </div>

              <div class="col-md-4">
                <label for="K" class="form-label"><h4>Potassium</h4></label>
                <input name="K" class="text-center text-dark" id="K" value="<?php echo $K; ?>">
              </div>
            </div>

            <!--ROW-->
            <div class="row p-3 mt-5">
              <div class="col-md-4">
                <label for="temperature" class="form-label"><h4>Temperature</h4></label>
                <input name="temperature" class="text-center text-dark" id="temperature" value="<?php echo $temperature; ?>">
              </div>
            
              <div class="col-md-4">
                <label for="humidity" class="form-label"><h4>Humidity</h4></label>
                <input name="humidity" class="text-center text-dark" id="humidity" value="<?php echo $humidity; ?>">
              </div>

              <div class="col-md-4">
                <label for="precipitation" class="form-label"><h4>Precipitation</h4></label>
                <input name="precipitation" class="text-center text-dark" id="precipitation" value="<?php echo $precipitation; ?>">
              </div>
            </div>

            <!--ROW-->
            <div class="row p-3 mt-5">
              <div class="col-md-4">
                <label for="season" class="form-label"><h4>Season</h4></label>
                <input name="season" class="text-center text-dark" id="season" value="<?php echo $season; ?>">
              </div>
            
              <div class="col-md-4">
                <label for="soil" class="form-label"><h4>Soil Type</h4></label>
                <input name="soil" class="text-center text-dark" id="soil" value="<?php echo $soil; ?>">
              </div>

              <div class="col-md-4">
                <label for="crop" class="form-label"><h4>Crop</h4></label>
                <input name="crop" class="text-center text-dark" id="crop" value="<?php echo $crop; ?>">
              </div>
            </div>

            <!--ROW-->
            <div class="row p-3 mt-5">
              <div class="col-md-4">
                <label for="Municipality" class="form-label"><h4>Municipality</h4></label>
                <input name="Municipality" class="text-center text-dark" id="Municipality" value="<?php echo $Municipality; ?>">
              </div>
            
              <div class="col-md-4">
                <label for="Province" class="form-label"><h4>Province</h4></label>
                <input name="Province" class="text-center text-dark" id="Province" value="<?php echo $Province; ?>">
              </div>

              <div class="col-md-4">
                <label for="Area" class="form-label"><h4>Area</h4></label>
                <input name="Area" class="text-center text-dark" id="Area" value="<?php echo $Area; ?>">
              </div>
            </div>

            <!--ROW-->
            <div class="row p-3 mt-5">
              <div class="col-md-4">
                <label for="rcrop" class="form-label"><h4>Recommended Crop</h4></label>
                <input name="rcrop" class="text-center text-dark" id="rcrop" value="<?php echo $rcrop; ?>">
              </div>
            
              <div class="col-md-4">
                <label for="rfertilizer" class="form-label"><h4>Recommended Fertilizer</h4></label>
                <input name="rfertilizer" class="text-center text-dark" id="rfertilizer" value="<?php echo $rfertilizer; ?>">
              </div>

              <div class="col-md-4">
                <label for="pyield" class="form-label"><h4>Crop Yield Prediction</h4></label>
                <input name="pyield" class="text-center text-dark" id="pyield" value="<?php echo $pyield; ?>">
              </div>
            </div>


            
            <div class="row p-3 mt-5">
              <div class="col-md-6">
                <button class="btn btn-success mt-5 pt-2 px-4"><a href="javascript:void(0);" onClick="printPage(crForm.innerHTML)">PRINT</a></button>
              </div>
            
              <div class="col-md-6">
                <button id="homeBtn" type="button" class="btn btn-success mt-5 pt-2 px-4"><h4>Back to Home</h4></button>
              </div>
            </div>
      </form>
    </div>

    <!--BUTTON SCRIPTS-->  
    <script>
    function printPage(printContent) {
      var display_setting="toolbar=yes,menubar=yes,";
      display_setting+="scrollbars=yes,width=650, height=600, left=100, top=25";
      var printpage=window.open("","",display_setting);
      printpage.document.open();
      printpage.document.write('<html><head><title>Print Page</title></head>');
      printpage.document.write('<body onLoad="self.print()" align="center">'+ printContent +'</body></html>');
      printpage.document.close();
      printpage.focus();
    }
    </script>

    



  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
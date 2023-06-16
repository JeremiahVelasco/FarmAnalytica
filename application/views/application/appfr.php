<!doctype html>
<html lang="en">
  <head>
    <title>Farm Analytica - Crop Recommendation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "stylesheet" href = "<?php echo base_url('.../CSS/style.css')?>">
    <link rel = "icon" href = "<?php echo base_url('assets/images/FARM_ANALYTICA_LOGO.png')?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  </head>

  <body id="apppage" style="background-size: cover; background-attachment: fixed; background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0)), url(<?= base_url('assets/images/illiya-vjestica-W5FdAcHp7l8-unsplash.jpg') ?>);">
    <div class="container-fluid">
      <form id="crForm" action="<?php echo base_url("FertilizerPrediction/index") ?>" method="post" class="text-white text-center mt-5 px-5">
            <h1 class="text-center text-white">Fertilizer Recommendation</h1>

            <div class="row p-3 mt-5">
              <div class="col-md-4">
                  
              </div>
            
              <div class="col-md-4 mt-5">
                  <label for="phosphorus" class="form-label"><h4>Recommended Fertilizer</h4></label>
                  <div class="resultviewer">
                    <h3 class="text-dark" style="background: white; padding: 25px 0; border-radius: 10px;">TESTING</h3>
                  </div>
              </div>

              <div class="col-md-4">
                  
              </div>
            </div>
            
          
            <div class="col-12">
                <button id="submitBtn" name="submit" type="submit" class="btn btn-success mt-5 pt-2 px-4"><h4>Next</h4></button>
            </div>
      </form>
    </div>



  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
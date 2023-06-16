<!doctype html>
<html lang="en">
  <head>
    <title>Farm Analytica - Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "stylesheet" href="<?php echo base_url("CSS/style.css")?>">
    <link rel = "icon" href = "assets/images/FARM_ANALYTICA_LOGO.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
      body {
        background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.4)), url("<?php echo base_url('assets/images/illiya-vjestica-W5FdAcHp7l8-unsplash.jpg') ?>");
        background-size: cover;
        
      }

      .p-5 {
        padding: 250px 500px !important;
      }
    </style>
  </head>
  <body class="p-5 text-center">    
    <!-- Optional JavaScript -->
    <!-- Bootstrap Html -->
    <div class="card" style = "background: transparent; border: none;">
      <div class="card-body">
        <form action="<?php echo base_url('Login') ?>" method="post" class="text-white">
          <h1 class="text-center text-white">Login</h1>
          <br>
          <div class="row justify-content-center">
            <div class="col-md-6">
                <label for="email" class="form-label text-white">Email Address</label>
                <input name = "email" type="email" class="form-control" id="email">
                <small id="emailHelpId" class="form-text text-muted"><?php echo form_error('email')?></small>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6 py-3">
                <label for="password" class="form-label text-white">Password</label>
                <input name = "password" type="password" class="form-control" id="password">
                <small id="emailHelpId" class="form-text text-muted"><?php echo form_error('password')?></small>
            </div>
          </div>
          <div class="col-12">
              <button name = "submit" type="submit" class="btn btn-outline-success mt-3">Submit</button>
          </div>
          <div class="col-12">
            <br>
            <a href = "<?php echo base_url ('Register') ?>"> New to Farm Analytica? Create an account here </a>
          </div>
        </form>
      </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
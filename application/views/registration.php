<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm Analytica - Registration</title>
    <link rel = "icon" href = "<?php echo base_url("assets/images/FARM_ANALYTICA_LOGO.png")?>">
    <link rel = "stylesheet" href ="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

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
<body class="p-5 text-center text-white">
<form class="row g-3" action = "<?php echo base_url("Register")?>" method = "post">
<h1 class="text-center">Registration</h1>
  <div class="row">
    <div class="col-md-6">
      <label for="firstname" class="form-label">First Name</label>
      <input name = "firstname" type="text" class="form-control" id="firstname">
      <small id="emailHelpId" class="form-text text-muted"><?php echo form_error('firstname') ?></small>
    </div>
    <div class="col-md-6">
      <label for="lastname" class="form-label">Last Name</label>
      <input name = "lastname" type="text" class="form-control" id="lastname">
      <small id="emailHelpId" class="form-text text-muted"><?php echo form_error('lastname') ?></small>
    </div>
  </div>
  <div class="row py-3">
    <div class="col-md-4">
      <label for="municipality" class="form-label">Municipality</label>
      <input name = "municipality" type="text" class="form-control" id="municipality">
      <small id="emailHelpId" class="form-text text-muted"><?php echo form_error('municipality') ?></small>
    </div>
    <div class="col-md-4">
      <label for="province" class="form-label">Province</label>
      <input name = "province" type="text" class="form-control" id="province">
      <small id="emailHelpId" class="form-text text-muted"><?php echo form_error('province') ?></small>
    </div>
    <div class="col-md-4">
      <label for="region" class="form-label">Region</label>
      <select name = "region" id="region" class="form-select">
        <option selected>Select Region</option>
        <option>Region I | Ilocos Region</option>
        <option>Region II | Cagayan Valley</option>
        <option>Region III | Central Luzon</option>
        <option>Region IVA | CALABARZON</option>
        <option>MIMAROPA Region</option>
        <option>Region V | Bicol Region</option>
        <option>Region VI | Western Visayas</option>
        <option>Region VII | Central Visayas</option>
        <option>Region VIII | Eastern Visayas</option>
        <option>Region IX | Zamboanga Peninsula</option>
        <option>Region X | Northern Mindanao</option>
        <option>Region XI | Davao Region</option>
        <option>Region XII | SOCCSKSARGEN</option>
        <option>Region XIII | Caraga</option>
        <option>NCR | National Capital Region</option>
        <option>CAR | Cordillera Administrative Region</option>
        <option>BARMM | Bangsamoro Autonomous Region in Muslim Mindanao</option>
      </select>
      <small id="emailHelpId" class="form-text text-muted"><?php echo form_error('region') ?></small>
    </div>
  </div>
  <div class="row py-3">
    <div class="col-md-4">
      <label for="password" class="form-label">Password</label>
      <input name = "password" type="password" class="form-control" id="password">
      <small id="emailHelpId" class="form-text text-muted"><?php echo form_error('password') ?></small>
    </div>
    <div class="col-md-4">
      <label for="confirmpassword" class="form-label">Confirm Password</label>
      <input name = "confirmpassword" type="password" class="form-control" id="password">
      <small id="emailHelpId" class="form-text text-muted"><?php echo form_error('confirmpassword') ?></small>
    </div>
    <div class="col-md-4">
      <label for="email" class="form-label">Email Address</label>
      <input name = "email" type="email" class="form-control" id="email">
      <small id="emailHelpId" class="form-text text-muted"><?php echo form_error('email')?></small>
    </div>
    <div class="col-12">
      <button name = "submit" type="submit" class="btn btn-outline-success mt-3">Submit</button> 
    </div>
    <div class="col-12">
      <br>
      <a href = "<?php echo base_url ('Login') ?>"> Already have an account? Sign in here </a>
    </div>
  </div>
</form>
</body>
</html>
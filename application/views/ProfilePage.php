<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farm Analytica - Profile</title>
  <link rel = "icon" href = "<?php echo base_url("assets/images/FARM_ANALYTICA_LOGO.png")?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("CSS/style.css")?>">
</head>
<body class = "p-5">
      <!--Main Navigation-->
<header>
        <!--BOOTSTRAP CDN || FOR RESPONSIVENESS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        

        <!--FONT AWESOME CDN || FOR ICONS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!--GOOGLE FONTS || FOR CUSTOM TEXT-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Merriweather:wght@900&family=Noto+Serif:wght@700&family=Playfair+Display:wght@700&family=Roboto+Serif:wght@600&display=swap" rel="stylesheet">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="<?php echo base_url("assets/images/innovatron_industries.png")?>" alt="Bootstrap" width="300" height="40"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse mx-5" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a id="navilink" class="nav-link px-3 text-white" aria-current="page" href="<?php echo base_url("ProfileControl/home")?>">Home</a>
              </li>
              <li class="nav-item">
                <a id="navilink" class="nav-link px-3 text-white" href="<?php echo base_url("ProfileControl/appCR")?>" rel="nofollow" target="_blank">Application</a>
              </li>
              <li class="nav-item">
                <a id="navilink" class="nav-link px-3 text-white" href="<?php echo base_url("about.html")?>" rel="nofollow" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a id="navilink" class="nav-link px-3 text-white" href="contact.html" target="_blank">Contact Us</a>
              </li>
              <li class="nav-item dropdown">
                            <!-- Example split danger button -->
                            <div class="btn-group">
                              <button type="button" class="btn btn-secondary"> <img src="<?php echo base_url("assets/images/placeholder_picture.png")?>" alt="avatar" class="rounded-circle img-fluid" style="width: 25px"> </button>
                              <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                              </button>
                              <ul class="dropdown-menu" style = "width: 70px">
                                <li><p class = "px-3" style = "font-weight: bold">Craig Ronquillo</p></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                  <table>
                                    <tr>
                                      <th> <a class="dropdown-item w-100" href="<?php echo base_url("ProfileControl/GoToProfile") ?>" style = "padding-left: 3px"><i class="fa fa-eye px-3"></i>View Profile</a></th>
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

        <!-- Background image -->
        <div id="intro" class="bg-image shadow-1-strong">
          <div class="mask" style="background-image: url(<?php echo base_url('assets/images/illiya-vjestica-W5FdAcHp7l8-unsplash.jpg')?>); background-size:cover; background-attachment: fixed;">
            <div class="container d-flex align-items-center justify-content-center text-center h-100">
              <div class="text-white">
                <img src="<?php echo base_url('assets/images/NEW_FARMANALYTICA_V2.png')?>" width="350" height="90"> <br> <br>
                <img src="<?php echo base_url('assets/images/FARM_ANALYTICA_LOGO.png')?>" height="100vh"> <br> <br>
                <h1 class="companyName">Profile Page</h1> <br> <br> <br>
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->

      </header>

      <hr class="my-5 text-white" />

      <!--Main layout-->
      <main class="mt-5">
        <div class="container-fluid">
          <!--Section: Content-->
          <section class="text-center p-3">
            <h4 class="mb-5 text-white fs-2" id = "profile-section"><strong>YOUR PROFILE</strong></h4>

            <?php foreach($infos as $info) { ?>
              <div class="container text-center">
                <div class="row align-items-center">
                  <div class="personal-info">
                    <div class="card w-100 mb-5 text-center">
                        <div class="card-body">
                            <br>
                            <img src="<?php echo base_url("assets/images/placeholder_picture.png")?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;"> 
                            <br> <br>
                            <h2 class = "name"> <?php echo $info->first_name." ".$info->last_name ?> </h2>
                            <!--<p class = "role"> Project Manager </p>-->
                            <br>
                            <!--<a href="EditProfileCapstone.php" class="btn btn-primary">Edit Profile</a>--> 
                            <a class="btn btn-primary btn-lg m-2" href="<?php echo base_url("ProfileControl/EditProfile") ?>" target="_blank" role="button">Edit Profile</a>
                            <br> <br>
                            <!-- PERSONAL INFORMATION -->
                            <div class="card">
                              <div class="card-body">
                              <h3 class = "profile-headers"> PERSONAL INFORMATION </h3> <br>
                                ________________ <br>
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">FIRST NAME</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0"><?php echo $info->first_name ?></p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">LAST NAME</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0"><?php echo $info->last_name ?></p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">MUNICIPALITY</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0"><?php echo $info->municipality ?></p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">PROVINCE</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0"><?php echo $info->province ?></p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">REGION</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0"><?php echo $info->region ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">EMAIL</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0"><?php echo $info->email ?></p>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <br>
                  </div>  
                </div>
              </div>
              <?php } ?>
            </section>
          <!--Section: Content-->


          <hr class="my-5 text-white" /> 

          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
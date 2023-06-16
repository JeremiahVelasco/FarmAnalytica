<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farm Analytica - Home</title>
  <link rel ="stylesheet" href="<?php echo base_url(".../CSS/style.css")?>">
  <link rel = "icon" href ="<?php echo base_url("assets/images/FARM_ANALYTICA_LOGO.png")?>">
</head>
<body class = "p-5">
      <!--Main Navigation-->
<header>
        <style>
          body {
            background: #1e1e1e !important;
          }

          #intro {
            background-image: url(<?php echo base_url("assets/images/illiya-vjestica-W5FdAcHp7l8-unsplash.jpg")?>);
            background-size: cover;
            background-attachment: fixed;
            height: 100vh;
          }

          /*.navbar .nav-link {
            color: #fff !important;
          }*/

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

        <!-- Background image -->
        <div id="intro" class="bg-image shadow-1-strong">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.35);">
            <div class="container d-flex align-items-center justify-content-center text-center h-100">
              <div class="text-white">
                <img src="<?php echo base_url("assets/images/NEW_FARMANALYTICA_V2.png")?>" width="350" height="90"> <br> <br>
                <p class="mb-4 fs-5" id = "detail">Empowering Filipino Farmers with Machine Learning and Data Analytics.</p>
                <a class="btn btn-outline-light btn-lg m-2" href="#" target="_blank"
                  rel="nofollow" target="_blank">Learn More</a>
                <a class="btn btn-success btn-lg m-2" href="#" target="_blank"
                  role="button">Predict!</a>
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
            <h4 class="mb-5 text-white fs-2"><strong>FEATURES</strong></h4>

            <div class="row">
              <div class="col-lg-4 col-md-3 mb-4">
                <div class="card rounded-0">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img id="cardimg" src="<?php echo base_url("assets/images/NASA.png")?>" class="img-fluid rounded-0"  />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Integrated with WeatherAPI</h5>
                    <p class="card-text">
                      Some quick example text to build on the card title and make up the bulk of the
                      card's content.
                    </p>
                    
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-3 mb-4">
                <div class="card rounded-0">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img id="cardimg" src="<?php echo base_url("assets/images/opensource.png")?>" class="img-fluid rounded-0" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Open-Source</h5>
                    <p class="card-text">
                      Some quick example text to build on the card title and make up the bulk of the
                      card's content.
                    </p>
                    
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-3 mb-4">
                <div class="card rounded-0">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img id="cardimg" src="<?php echo base_url("assets/images/Farmer.png")?>" class="img-fluid rounded-0" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Art in Agriculture</h5>
                    <p class="card-text">
                      Some quick example text to build on the card title and make up the bulk of the
                      card's content.
                    </p>
                    
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--Section: Content-->

          <hr class="my-5 text-white" /> 
  </body>
</html>
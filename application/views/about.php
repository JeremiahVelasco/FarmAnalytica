<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farm Analytica - About Us</title>
  <link rel = "stylesheet" href = "<?php echo base_url('CSS/style.css'); ?>">
  <link rel = "icon" href = "<?php echo base_url('assets/images/FARM_ANALYTICA_LOGO.png')?>">

  <style>
    h1#aboutuspage {
  font-family: Inter, sans-serif;
  color: white;
  font-weight: bold;
  text-align: center;
  font-size: 100px;
  animation: focus-in-contract 5s;
}

@-webkit-keyframes focus-in-contract {
  0% {
    letter-spacing: 0.5em;
    -webkit-filter: blur(12px);
            filter: blur(12px);
    opacity: 0;
  }
  100% {
    -webkit-filter: blur(0px);
            filter: blur(0px);
    opacity: 1;
  }
}
@keyframes focus-in-contract {
  0% {
    letter-spacing: 0.5em;
    -webkit-filter: blur(12px);
            filter: blur(12px);
    opacity: 0;
  }
  100% {
    -webkit-filter: blur(0px);
            filter: blur(0px);
    opacity: 1;
  }
}
  </style>
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
                <a id="navilink" class="nav-link px-3 text-white" aria-current="page" href="<?php echo base_url("About/home")?>">Home</a>
              </li>
              <li class="nav-item">
                <a id="navilink" class="nav-link px-3 text-white" href="<?php echo base_url("About/appCR")?>" rel="nofollow" target="_blank">Application</a>
              </li>
              <li class="nav-item">
                <a id="navilink" class="nav-link px-3 text-white" href="<?php echo base_url("About/about")?>" rel="nofollow" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a id="navilink" class="nav-link px-3 text-white" href="<?php echo base_url("About/contact")?>" target="_blank">Contact Us</a>
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
                                      <th> <a class="dropdown-item w-100" href="<?php echo base_url("About/GoToProfile") ?>" style = "padding-left: 3px"><i class="fa fa-eye px-3"></i>View Profile</a></th>
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
          <div class="mask" style="background-size: cover; height: 100vh; background-attachment: fixed; background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0)), url(<?= base_url('assets/images/karsten-wurth-UbGYPMbMYP8-unsplash.jpg') ?>);">
            <div class="container d-flex align-items-center justify-content-center text-center h-100">
              <div class = "text-white">
                <img src="<?php echo base_url("assets/images/NEW_FARMANALYTICA_V2.png")?>" width="350" height="90"> <br> <br>
                <img src = "<?php echo base_url("assets/images/FARM_ANALYTICA_LOGO.png")?>" height = "100vh"> <br> <br>
                <h1 id = aboutuspage> About Us </h1> <br> <br> <br>
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>

      <hr class="my-5 text-white" />

      <main class="mt-5">
        <div class="container-fluid text-white" id="mission">
            <div class="row bg-success bg-gradient p-5" style="height: 300px;">
                <div class="col">
                  <h4>OUR MISSION</h4>
                </div>
                <div class="col">
                  Our Mission is to transform the agriculture business by providing cutting-edge crop recommendation services that harness the most recent technological, data analysis, and machine learning developments. We want to assist farmers make more educated crop decisions, increase yields, minimize waste, and improve sustainability. And is to provide farmers with precise and tailored crop suggestions using innovative technology and data analytics. We hope to assist farmers raise crop yields, cut input costs, and promote sustainable farming practices by leveraging the power of machine learning and agronomic expertise.
                </div>
            </div>
        </div>

        <div class="container-fluid text-white" id="vision" style="background-size: cover; background-attachment: fixed; background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.3)), url(<?= base_url('assets/images/dan-meyers-IQVFVH0ajag-unsplash.jpg') ?>);">
            <div class="row p-5" style="height: 300px;">
                <div class="col">
                  <h4>OUR VISION</h4>
                </div>
                <div class="col">
                  Our Vision is for every farmer to have access to individualized, data-driven crop recommendations that are suited to their own requirements and circumstances. We foresee a future in which precision agriculture is the norm and farmers are empowered to make the best decisions possible for their crops, land, and communities. We think that by using our application , we can help create a more sustainable, equitable, and successful agriculture sector for future generations. And aims to transform crop decision-making by providing farmers with the knowledge and tools they need to optimize crop yield, increase profitability, and promote a more sustainable and resilient food system.<br><br>
                </div>
            </div>
        </div>

        <div class="container-fluid text-white" id="values">
            <div class="row bg-dark bg-gradient p-5" style="height: 300px;">
                <div class="col">
                  <h4>OUR VALUES</h4>
                </div>
                <div class="col">
                  -Innovation <br> <br>
                  -Respect: We value everyone and treat people with dignity and professionalism.<br> <br>
                  -Teamwork: We achieve more when we collaborate and all work together.<br> <br>
                  -Integrity: We build trust through responsible actions and honest relationships.<br> <br>
                  -Accountability: Each of us is responsible for our words, our actions, and our results.<br>
                </div>
            </div>
        </div>

        <hr class="my-5 text-white" />

        <!--THE TEAM-->
        <div class="container-fluid text-white" id="team">
            <div class="row justify-content-center" style="height: 500px;">

                <!--PERSON-->
                <div class="col-md-auto" id="ronquillo" style="background-position: center; background-size: cover; width: 320px; background-image: url(<?= base_url('assets/images/pm.jpg') ?>);">
                    <card>
                        <div class="details">
                            <h3>Craig Trevor Ronquillo</h3>
                            <p>Project Manager</p>
                        </div>
                    </card>
                </div>

                <!--PERSON-->
                <div class="col-md-auto" id="velasco" style="background-position: center; background-size: cover; width: 320px; background-image: url(<?= base_url('assets/images/velasco.png') ?>);">
                    <card>
                        <div class="details">
                            <h3>Jeremiah Velasco</h3>
                            <p>Full-Stack Developer</p>
                        </div>
                    </card>
                </div>

                <!--PERSON-->
                <div class="col-md-auto" id="espanola" style="background-position: center; background-size: cover; width: 320px; background-image: url(<?= base_url('assets/images/ui.jpg') ?>);">
                    <card>
                        <div class="details">
                            <h3>Pam Española</h3>
                            <p>UI/UX Designer</p>
                        </div>
                    </card>
                </div>

                <!--PERSON-->
                <div class="col-md-auto" id="tumbokon" style="background-position: center; background-size: cover; width: 320px; background-image: url(<?= base_url('assets/images/fd1.jpg') ?>);">
                    <card>
                        <div class="details">
                            <h3>Andrei Tumbokon</h3>
                            <p>Front-End Developer 1</p>
                        </div>
                    </card>
                </div>
                 <!--PERSON-->
                 <div class="col-md-auto" id="capacillo" style="background-position: center; background-size: cover; width: 320px; background-image: url(<?= base_url('assets/images/fd2.jpg') ?>);">
                  <card>
                      <div class="details">
                          <h3>Eisen Capacillo</h3>
                          <p>Front-End Developer 2</p>
                      </div>
                  </card>
              </div>
            </div>
        </div>

      </main>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  </body>
</html>
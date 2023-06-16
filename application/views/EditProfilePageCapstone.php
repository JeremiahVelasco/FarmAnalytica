<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farm Analytica - Edit Profile</title>
  <link rel = "icon" href = "../images/FARM_ANALYTICA_LOGO.png">
  <link rel="stylesheet" type="text/css" href="../css/ProfilePageStyle.css">
</head>
<body class = "p-5">
      <!--Main Navigation-->
<header>
        <!--BOOTSTRAP CDN || FOR RESPONSIVENESS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        
        <!--FONT AWESOME CDN || FOR ICONS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!--GOOGLE FONTS || FOR CUSTOM TEXT-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Merriweather:wght@900&family=Noto+Serif:wght@700&family=Playfair+Display:wght@700&family=Roboto+Serif:wght@600&display=swap" rel="stylesheet">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../images/innovatron_industries.png" alt="Bootstrap" width="300" height="40"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse mx-5" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a id="navilink" class="nav-link px-3 text-white" aria-current="page" href="#intro">Home</a>
              </li>
              <li class="nav-item">
                <a id="navilink" class="nav-link px-3 text-white" href="about.html" rel="nofollow" target="_blank">Application</a>
              </li>
              <li class="nav-item">
                <a id="navilink" class="nav-link px-3 text-white" href="about.html" rel="nofollow" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a id="navilink" class="nav-link px-3 text-white" href="contact.html" target="_blank">Contact Us</a>
              </li>
              <li class="nav-item dropdown">
                <!-- Example split danger button -->
                <div class="btn-group">
                  <button type="button" class="btn btn-secondary"> <img src="../images/placeholder_picture.png" alt="avatar" class="rounded-circle img-fluid" style="width: 25px"> </button>
                  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" style = "width: 100px !important">
                    <li><p class = "px-3" style = "font-weight: bold">Craig Ronquillo</p></li>
                    <li>
                                  <table>
                                    <tr>
                                      <th> <a class="dropdown-item w-100" href="<?php echo base_url("CapstoneControl/GoToProfile") ?>" style = "padding-left: 3px"><i class="fa fa-eye px-3"></i>View Profile</a></th>
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
        <!--
        <div id="intro" class="bg-image shadow-1-strong">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.65); backdrop-filter: blur(8px)">
            <div class="container d-flex align-items-center justify-content-center text-center h-100">
        -->
          <br>
          <div class="card">
            <div class="card-body">
            <br>
            <h4 class="card-title" style = "text-align:center"> <b> EDIT YOUR PROFILE </b> </h4> <br>
            <center> <img src = "../images/placeholder_picture.png" alt = "Me" height = "150" width = "150" style = "align-self:center"> </center>
            <br>
            <h4 class="card-title" style = "text-align:center">Craig Ronquillo</h4> <br>
            <center> <button type="button" class="btn btn-primary"> Add New Photo </button> </center> <br>
            <center> <button type="button" class="btn btn-primary" disabled> Update Existing Photo </button> </center>
            <br> <br>

            <?php foreach($infos as $info) { ?>
                <h3> PERSONAL INFORMATION </h3>
                <div class="mb-3">
                  <label for="firstname" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="firstname" value="<?php echo $info->first_name ?>" readonly> <br>
                  <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#firstnamemodal"> Edit First Name </a> 
                  <br> <br>
                  <!-- Modal -->
                  <div class="modal fade" id="firstnamemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="card-title" style = "font-family: Inter, sans-serif; font-weight:900"> Edit First Name</h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action = "<?php echo base_url("CapstoneControl/UpdateFirstName") ?>" method = "post">
                        <div class="modal-body">
                          <p style = "text-align:left; font-family: Inter, sans-serif">New First Name</p>
                          <input name = "firstname" type="text" class="form-control" id="firstname" value="<?php echo $info->first_name ?>">
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-danger" data-bs-dismiss="modal" style = "font-family: Inter, sans-serif; font-weight:700"> Cancel </a>
                          <input type="submit" class="btn btn-primary" style = "font-family: Inter, sans-serif; font-weight:700" value = "Update">
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="lastname" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="lastname" value="<?php echo $info->last_name ?>" readonly> <br>
                  <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lastnamemodal"> Edit Last Name </a> 
                  <br> <br>
                  <!-- Modal -->
                  <div class="modal fade" id="lastnamemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="card-title" style = "font-family: Inter, sans-serif; font-weight:900"> Edit Last Name </h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action = "<?php echo base_url("CapstoneControl/UpdateLastName") ?>" method = "post">
                        <div class="modal-body">
                         <p style = "text-align:left; font-family: Inter, sans-serif">New Last Name</p>
                         <input name = "lastname" type="text" class="form-control" id="lastname" value="<?php echo $info->last_name ?>">
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-danger" data-bs-dismiss="modal" style = "font-family: Inter, sans-serif; font-weight:700"> Cancel </a>
                          <input type="submit" class="btn btn-primary" style = "font-family: Inter, sans-serif; font-weight:700" value = "Update">
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="municipality" class="form-label">Municipality</label>
                  <input type="text" class="form-control" id="municipality" value="<?php echo $info->municipality ?>" readonly> <br>
                  <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#municipalitymodal"> Edit Municipality </a> 
                  <br> <br>
                  <!-- Modal -->
                  <div class="modal fade" id="municipalitymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="card-title" style = "font-family: Inter, sans-serif; font-weight:900"> Edit Municipality </h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action = "<?php echo base_url("CapstoneControl/UpdateMunicipality") ?>" method = "post">
                        <div class="modal-body">
                          <p style = "text-align:left; font-family: Inter, sans-serif">New Municipality</p>
                          <input name = "municipality" type="text" class="form-control" id="municipality" value="<?php echo $info->municipality ?>">
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-danger" data-bs-dismiss="modal" style = "font-family: Inter, sans-serif; font-weight:700"> Cancel </a>
                          <input type="submit" class="btn btn-primary" style = "font-family: Inter, sans-serif; font-weight:700" value = "Update">
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="province" class="form-label">Province</label>
                  <input type="text" class="form-control" id="province" value="<?php echo $info->province ?>" readonly> <br>
                  <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#provincemodal"> Edit Province </a> 
                  <br> <br>
                  <!-- Modal -->
                  <div class="modal fade" id="provincemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="card-title" style = "font-family: Inter, sans-serif; font-weight:900"> Edit Province </h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action = "<?php echo base_url("CapstoneControl/UpdateProvince") ?>" method = "post">
                        <div class="modal-body">
                          <p style = "text-align:left; font-family: Inter, sans-serif">New Province</p>
                          <input name = "province" type="text" class="form-control" id="province" value="<?php echo $info->province ?>">
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-danger" data-bs-dismiss="modal" style = "font-family: Inter, sans-serif; font-weight:700"> Cancel </a>
                          <input type="submit" class="btn btn-primary" style = "font-family: Inter, sans-serif; font-weight:700" value = "Update">
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="region" class="form-label">Region</label>
                  <input type="text" class="form-control" id="region" value="<?php echo $info->region ?>" readonly> <br>
                  <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#regionmodal"> Edit Region </a> 
                  <br> <br>
                  <!-- Modal -->
                  <div class="modal fade" id="regionmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="card-title" style = "font-family: Inter, sans-serif; font-weight:900"> Edit Region </h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action = "<?php echo base_url("CapstoneControl/UpdateRegion") ?>" method = "post">
                        <div class="modal-body">
                          <p style = "text-align:left; font-family: Inter, sans-serif">New Region</p>
                          <select name = "region" id="region" class="form-select" value="<?php echo $info->region ?>" >
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
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-danger" data-bs-dismiss="modal" style = "font-family: Inter, sans-serif; font-weight:700"> Cancel </a>
                          <input type="submit" class="btn btn-primary" style = "font-family: Inter, sans-serif; font-weight:700" value = "Update">
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email Address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $info->email ?>" readonly> <br>
                  <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#emailaddmodal"> Edit Email Address </a> 
                  <br> <br>
                  <!-- Modal -->
                  <div class="modal fade" id="emailaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="card-title" style = "font-family: Inter, sans-serif; font-weight:900"> Edit Email Address </h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action = "<?php echo base_url("CapstoneControl/UpdateEmail") ?>" method = "post">
                        <div class="modal-body">
                          <p style = "text-align:left; font-family: Inter, sans-serif">New Email Address</p>
                          <input name = "email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $info->email ?>">
                        </div>
                        <div class="modal-footer">
                          <a class="btn btn-danger" data-bs-dismiss="modal" style = "font-family: Inter, sans-serif; font-weight:700"> Cancel </a>
                          <input type="submit" class="btn btn-primary" style = "font-family: Inter, sans-serif; font-weight:700" value = "Update">
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!--
                <h3> PASSWORD </h3>
                <div class="mb-3">
                  <label for="oldpassword" class="form-label">Old Password</label>
                  <input type="password" class="form-control" id="oldpassword">
                </div>
                <div class="mb-3">
                  <label for="newpassword" class="form-label">New Password</label>
                  <input type="password" class="form-control" id="newpassword">
                </div>
                <div class="mb-3">
                  <label for="confirmnewpassword" class="form-label">Confirm New Password</label>
                  <input type="password" class="form-control" id="confirmnewpassword">
                </div>
                -->
            <?php } ?>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h2 class="card-title" style = "font-family: Inter, sans-serif; font-weight:900"> All ready to go!</h2>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p style = "text-align:left; font-family: Inter, sans-serif">All the information you provided looks good and complete! Do you want to proceed or do you have something else to edit? </p>
                    </div>
                    <div class="modal-footer">
                      <a class="btn btn-danger" data-bs-dismiss="modal" style = "font-family: Inter, sans-serif; font-weight:700"> Continue Editing </a>
                      <a type="submit" class="btn btn-primary" style = "font-family: Inter, sans-serif; font-weight:700"> Proceed </a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <h3> CHANGE PASSWORD </h3> -->

            </form>
            <center> <a class="btn btn-outline-primary btn-lg m-2" href="<?php echo base_url("CapstoneControl/GoToProfile") ?>" target="_blank" role="button">Back to Profile</a> </center>
            </div>
          </div>
        
        <!-- Background image -->
      </header>

      <hr class="my-5 text-white" />
  </body>
</html>
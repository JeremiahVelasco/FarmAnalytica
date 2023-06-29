<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farm Analytica - Contact Us</title>
  <link rel = "icon" href ="<?php echo base_url("assets/images/FARM_ANALYTICA_LOGO.png")?>">
</head>
      <!--Main Navigation-->  
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

            nav {
              background: #1e1e1e !important;
            }

            .fw-bold{
                text-align: left;
                font-size: 60px;
                margin-left: 20px;
                letter-spacing: 0.5px;
                color: #fff;
            }
            .form-header{
                text-align: left;
                font-size: 60px;
                margin-left: 20px;
                letter-spacing: 0.5px;
                color: #31542c;
                font-weight: bold;
            }
            button {
                position: relative;
                margin-left: auto; 
                margin: 15px;
                padding: 10px;
            }
            button:hover{
                background: #000;
                transition: .5s;
                color: #fff;
            }
            #section-wrapper{
                width: 100%;
                padding: 10px;
            }
            .box-wrapper{
                position: relative;
                display: flex;
                width: 1100px;
                margin: auto;
                margin-top: 30px;
            }
            .info-wrap{
                width: 35%;
                height: 551px;
                overflow: hidden;
                float: left;
                display: block;
                font-weight: 6;
                background: transparent;
                color: #31542c;
            }
            .info-details {
                list-style: none;
                margin: 60px 0px;
            }
            .info-details li {
                margin-top: 25px;
                font-size: 18px;
                color: #fff;
                font-weight: bold;
            }
            .info-details li i {
                background: #31542c;
                padding: 12px;
                color: #fff;
                border-radius: 50%;
                margin-right: 5px;
            }
            .info-details li a {
                color: #fff;
                text-decoration: none;
                font-weight: normal;
            }
            .info-details li a:hover {
                color: #000;
            }
            .social-icons {
                list-style: none;
                text-align: center;
                margin: 20px 0px;
            }
            .social-icons li {
                display: inline-block;
            }
            .social-icons li i {
                background: #fff;
                color: #fff;
                padding: 15px;
                font-size: 20px;
                border-radius: 22%;
                margin: 0px 5px;
                cursor: pointer;
                transition: all .5s;
            }
            .social-icons li i:hover {
                background: #fff;
                color: #000000;
            }
            .form-wrap{
                width: 65%;
                float: right;
                padding: 25px 25px 35px 25px;
                background: #fff;
                border-radius: 30px;
            }
            .form-title{
                text-align: left;
                margin-left: 23px;
                font-size: 60px;
                letter-spacing: 0.5px;
                color: #31542c;
            }
            .form-fields{
                display: table;
                width: 100%;
            }.form-fields input, .form-fields textarea{
                border: none;
                outline: none;
                background: none;
                font-size: 18px;
                color: #555;
                padding: 12px 10px 20px 5px;
                margin-left: 10px;
                width: 100%;
            }
            .form-fields textarea{
                height: 80px;
                resize: vertical; 
                overflow: auto;
            }
            ::placeholder {
                color: #000;
            }
            .msg-area {
                background-color: #fff;
                opacity: 0.6;
                border: #31542c solid;
                color: #31542c;
                width: 97%;
                float: left;
                padding: 5px 10px;
                margin: 14px 12px;
                border-radius: 30px;
                font-weight: bold;
                text-align: left;
                resize: horizontal; 
            }
            .form-group{
                background-color: #fff;
                opacity: 0.6;
                border: #31542c solid;
                width: 46%;
                height: 50;
                float: left;
                padding: 0px 10px;
                margin: 14px 12px;
                border-radius: 30px;
            }
            .submit-button{
                width: 96%;
                height: 60px;
                margin: 0px 12px;
                margin-top: 20px;
                border-radius: 30px;
                font-size: 20px;;
                font-weight: 700;
                outline: none;
                border:none;
                cursor: pointer;
                color:#fff;
                text-align: center;
                background: #31542c;
                transition: .5s;
            }
            .submit-button:hover{
                background: #000;
            }

            @media only screen and (max-width: 600px) {
                .box-wrapper{
                    width: 100%;
                }
                .info-wrap,
                .form-wrap{
                    width: 100%;
                    height: inherit;
                    float: none;  
                }
                .info-wrap{
                    border-radius: 30px 30px 0px 0px;
                }
                .form-group{
                    width: 100%;
                    float: none;
                    margin: 25px 0px;
                }
                .form-fields .form-group:last-child, 
                .submit-button{
                    width: 100%;
                }
                .submit-button{
                    margin: 10px 0px;
                }

                h1.companyName {
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
              
            }
      </style>
      <!--BOOTSTRAP CDN || FOR RESPONSIVENESS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <!--FONT AWESOME CDN || FOR ICONS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body class = "p-5">

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
                <a id="navilink" class="nav-link px-3 text-white" href="<?php echo base_url("Landing/contact") ?>" target="_blank">Contact Us</a>
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
    <section id="section-wrapper">
        <div class="box-wrapper">
            <div class="info-wrap">
                <h2 class="fw-bold"> Contact the company. </h2>
                <div class="contact-box">
                <ul class="info-details">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span> Phone: </span> +63 0123 456 7890 </a>
                    </li>
                    <li>
                        <i class="fas fa-paper-plane"></i>
                        <span> Email: </span> <a href="email@email.com" class="link-text">farmanalytica@email.com </a>
                    </li>
                    <li>
                        <i class="fas fa-comment-dots"></i>
                        <span> Facebook: </span> <a href="fb link" class="link-text"> Farm Analytica </a>
                    </li>
                </ul>
              </div>
                <h2 class="fw-bold"> Or... </h2>
            </div>

            <div class="form-wrap">
                <form action="#" method="POST">
                <h2 class="form-header"> Send us a message instead. </h2>
                    <div class="form-fields">
                        <div class="form-group">
                            <input type="text" class="name" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="email" placeholder="E-mail Address" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="subj" placeholder="Subject" required>
                        </div>
                        <div class="msg-area">
                            <textarea name="message" id="" cols=40   placeholder="Write your message here..."></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send Message" class="submit-button">
                 </form>
            </div>
        </div>
    </section>
</body>
</html>
<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>RED HEALTH</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
        <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/faveicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Meet Our Doctors - eHealth</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        nav {
/*            background-color: white;*/
            color: white;
            padding: 1em;
            text-align: center;
            width: fit-content;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 1em;
        }

        h5,p {
            color: black;
            font-style: bold;
        }


        #buttona{
            background-color: #1abc9c;
            border-color: #1abc9c;
            border-spacing: 20px;
            border-radius: 5px;
        }
        #buttona:hover{
            background-color: #1abc9c;
            
        }
    </style>
</head>

<body>
<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt="" width="120px" height="80px"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <!-- <li><a href="about.html">About</a></li> -->
                                            <li><a href="services.html">Services</a></li>
                                            
                                            <li><a href="blog.html">Doctors</a>
                                                <!-- <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul> -->
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="contact.html">LogIn</a></li>
                                            <li><a href="services.html"><button id="buttona">Appointments</button></a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-15">
                                    <!-- <a href="appointment.php" class="btn header-btn" style="background-color: #1abc9c">Make an Appointment</a> -->
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Slider Area Start-->
        <div class="slider-area">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                             <div class="hero-wrapper">
                                <!-- Video icon -->
                                
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".3s">Health is wealth  keep it healthy </h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Almost before we knew it, we<br> had left the ground</p>
                                    <!-- <a href="services.html" class="btn" data-animation="fadeInLeft" data-delay=".3s">Take a Service</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <!-- Slider Single -->
            <div class="single-slider d-flex align-items-center slider-height">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-8 col-md-10 ">
                         <div class="hero-wrapper">
                            <!-- Video icon -->
                            <div class="video-icon">
                                <!-- <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0" data-animation="bounceIn" data-delay=".4s">
                                    <i class="fas fa-play"></i>
                                </a> -->
                            </div>
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".3s">Health is wealth  keep it healthy </h1>
                                <p data-animation="fadeInUp" data-delay=".6s">Almost before we knew it, we<br> had left the ground</p>
                                <!-- <a href="#" class="btn" data-animation="fadeInLeft" data-delay=".3s">Take a Service</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
<!-- Slider Area End -->
<!--? About-2 Area Start -->
<div class="about-area2 section-padding40">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <!-- about-img -->
                <div class="about-img ">
                    <img src="assets/img/gallery/about.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="about-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-35">
                        <h2>Create a healthy 
                        life you love!</h2>
                    </div>
                    <p class="pera-top mb-40">Almost before we knew it, we had left the ground</p>
                    <p class="pera-bottom mb-30">Praesent porttitor, nulla vitae posuere iaculis, arcu nisl
                        dignissim dolor, a pretium mi sem ut ipsum. Fusce
                    fermentum. Pellentesque libero tortor, tincidunt et.</p>
                    <div class="icon-about">
                     <img src="assets/img/icon/about1.svg" alt="" class=" mr-20">
                     <img src="assets/img/icon/about2.svg" alt="">
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
<!-- About-2 Area End -->
 <div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/f1.jpg" class="d-block w-100" alt="...">
      
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/f2.jpg" class="d-block w-100" alt="...">
      
    </div>
    <div class="carousel-item">
      <img src="img/f3.png" class="d-block w-100" alt="..." height="465px" width="1800px">
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="wantToWork-area section-bg3" data-background="assets/img/gallery/section_bg01.png">
    <div class="container">
        <div class="wants-wrapper w-padding2">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-9 col-md-8">
                    <div class="wantToWork-caption wantToWork-caption2">
                        <h2>Happy mind <br>healthy life</h2>
                        <p>Almost before we knew it, we<br> had left the ground</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<br>
<!--? video_start -->
<div class="container">
    <div class="video-area section-bg2 d-flex align-items-center"  data-background="assets/img/gallery/video-bg.png">
        <div class="video-wrap position-relative">
            <div class="video-icon" >
                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=o8EeWXsL09c"><i class="fas fa-play"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- video_end -->      
</main>
                           
        <div class="container my-5">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-dark"
          style="background-color: #ECEFF1"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4 text-white"
             style="background-color:  #1abc9c;"
             >
      <!-- Left -->
      <div class="me-5">
        <span style="font-size: 15px;">RED Health Care  </span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold"> RED Health </h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              Red Health has been one of the latest technology websites that will help users to make easier for them.
            </p><img class="sm-2" src="img/logo.png" alt="" width="100" height="70">
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Products</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
           
            <p>
              <a href="#!" class="text-dark">Apoinments</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Virtual Doctor meeting</a>
            </p>
         
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Locations</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #075629; height: 2px"
                />
            <p>
              <a href="#!" class="text-dark" &#xf3c5;>Rruga B,Prishtinë</a>
            </p>
           
           
            <p>
              <a href="#!" class="text-dark" &#xf3c5;>Grange Blanche, Lyon </a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #1abc9c; height: 2px"
                />
       
            <p><i class="fas fa-phone mr-3"></i> +383 44 10 11 12</p>
            <p><i class="fas fa-print mr-3"></i> red.health@hospital.com</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2023 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/"
         >red.health@hospital.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>

<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>
    <!-- Copyright -->
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>

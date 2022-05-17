<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>NotesGlossary</title>

    <link rel="icon" href="assets/images/Icon.png" type="image/icon type">

    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="index.php">
        <img src="assets/images/Icon.png" style= "width: 70px; height: 70px; float: left;" >
      </a>
      <a target="_self" href="index.php"><em>NotesGlossary</em></a>
    </div>
    <a ><a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu scroll-to-section">
        <li><a href="#section1">Home</a></li>
        <li class="has-submenu"><a href="#section2">About Us</a>
          <ul class="sub-menu">
            <li><a href="#section2">Creator</a></li>
            <li><a href="#section2">Testimonials</a></li>
            <li><a href="#section2">FAQ</a></li>
          </ul>
        </li>
        <li><a href="#section4">Modules</a></li>
        <?php if(isset($_SESSION['uid'])){?>
          <li><a href="#"><?php echo $_SESSION['uid']['username']?></a></li>
          <li><a href="#" onclick="logout()">Logout</a></li>
        <?php }?>
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h2>Revision made easier</h2>
              <h6><em>NotesGlossary</em> compacts your notes concisely and accurately. Let's start revising.</h6>
              <div class="main-button">
                  <div>
                    <a href="login.php">Login / Sign up</a>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>ABOUT US</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Creator</a></li>
              <li><a href='#tabs-2'>Testimonials</a></li>
              <li><a href='#tabs-3'>FAQ</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/Face shot.jfif" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>- Abdullah</h4>
                    <h6 style="color: #DEB992;"> <b>CREATOR</b></h6>
                    <p>I am a University of Sussex student, class of 2022. This site is created for my dissertation project. I hope to use this site to convey my passion towards teaching.</p>
                    <p><b>Email:</b> a23@sussex.ac.uk</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-auto">
                    <img src="" alt="">
                    <img src="">
                    <h6 style="color: #DEB992;"> To be added </h6>
                  </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-auto">
                    <h4>What exam board are these notes created for?</h4>
                    <p> Currently the notes are only available for CAIE.</p>
                    <h4>How accurate are the notes?</h4>
                    <p> The notes are mostly from my high school notes cross-checked with more recent notes available online.</p>
                    <h4>How will this site be funded?</h4>
                    <p>As the website is built on university servers no extra funding is required but moving forward things may change. I belive in education being free and readily available to everyone.</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>IGCSE</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
           <a href="cs.html">
            <img src="assets/images/CS.jpg" alt="Course #1">
            <div class="down-content">
              <h4>Computer Science (0478)</h4>
              <p>Learn IGCSE level Computer Science. It consists of topics related to data representation, internet technologies, ethics etc </p>
            </div>
          </a>
          </div>
          <div class="item">
            <img src="assets/images/Maths.jpg" alt="Course #2">
            <div class="down-content">
              <h4>Maths (0580)</h4>
              <p>Content to be added.</p>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/Physics.jpg" alt="Course #3">
            <div class="down-content">
              <h4>Physics (0625)</h4>
              <p>Content to be added.</p>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/Chemistry.jpg" alt="Course #4">
            <div class="down-content">
              <h4>Chemistry (0620)</h4>
              <p>Content to be added.</p>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/Biology.jpg" alt="">
            <div class="down-content">
              <h4>Biology (0610)</h4>
              <p>Content to be added.</p>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/Economics.jpg" alt="">
            <div class="down-content">
              <h4>Economics (0455)</h4>
              <p>Content to be added.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>AS-Level</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="assets/images/CS.jpg" alt="Course #1">
            <div class="down-content">
              <h4>Computer Science (9618)</h4>
              <p>Learn AS level Computer Science. It consists of topics related to information representation, hardware and system software, database and etc. </p>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/Maths.jpg" alt="Course #2">
            <div class="down-content">
              <h4>Maths (9709)</h4>
              <p>Content to be added.</p>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/Physics.jpg" alt="Course #3">
            <div class="down-content">
              <h4>Physics (9702)</h4>
              <p>Content to be added.</p>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/Chemistry.jpg" alt="Course #4">
            <div class="down-content">
              <h4>Chemistry (9701)</h4>
              <p>Content to be added.</p>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/Biology.jpg" alt="Course #5">
            <div class="down-content">
              <h4>Biology (9700)</h4>
              <p>Content to be added.</p>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/Economics.jpg" alt="Course #6">
            <div class="down-content">
              <h4>Economics (9708)</h4>
              <a>Content to be added.</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript">
      function logout(){
        window.location.assign("x-function/logout.php")
      }
    </script>
</body>
</html>
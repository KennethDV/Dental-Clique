<?php
include 'connection.php';

$query = "SELECT * FROM info WHERE info_id= '1'";
$res = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($res);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dental Clique</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/dentallogo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="dentalclique13@gmail.com">dentalclique13@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> 0925 860 0028
      </div>
      <div class="social-links d-none d-md-block">
        <a href="https://www.facebook.com/pages/Dental-Clique/647329575324603" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://ph.linkedin.com/in/jubelle-fabian-32537163" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="#topbar" class="logo"><img src="<?php echo 'assets/img/' . $row['logoName']; ?>" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              <li><a href="#services"><?php echo $row['service1']; ?></a></li>
              <li><a href="#services"><?php echo $row['service2']; ?></a></li>
              <li><a href="#services"><?php echo $row['service3']; ?></a></li>
              <li><a href="#oral"><?php echo $row['service4']; ?></a></li>
              <li><a href="#oral"><?php echo $row['service5']; ?></a></li>
              <li><a href="#oral"><?php echo $row['service6']; ?></a></li>

            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <style>
    #hero {
      width: 100%;
      height: calc(100vh - 110px);
      background: url("<?php echo 'assets/img/' . $row['picName1']; ?>") top center;
      background-size: cover;
      position: relative;
    }
  </style>

  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1><?php echo $row['homedesc1'] ?></h1>
      <h2><?php echo $row['homedesc2'] ?></h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="<?php echo 'assets/img/' . $row['picName2']; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h1>Background</h1>
            <p class="fst-italic"><?php echo $row['aboutus']; ?></p>
            <h4>Guidelines</h4>
            <ul>
              <li><i class="bi bi-check-circle"></i><?php echo $row['guide1']; ?></li>
              <li><i class="bi bi-check-circle"></i><?php echo $row['guide2']; ?></li>
              <li><i class="bi bi-check-circle"></i><?php echo $row['guide3']; ?></li>
              <li><i class="bi bi-check-circle"></i><?php echo $row['guide4']; ?></li>
              <li><i class="bi bi-check-circle"></i><?php echo $row['guide5']; ?></li>
              <li><i class="bi bi-check-circle"></i><?php echo $row['guide6']; ?></li>
            </ul>

          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- <section id="why-us" class="why-us">
        <div class="container">

          <div class="row">

            <div class="col-lg-4" data-aos="fade-up">
              <div class="box">
                <span>01</span>
                <h4>Lorem Ipsum</h4>
                <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
              <div class="box">
                <span>02</span>
                <h4>Repellat Nihil</h4>
                <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <div class="box">
                <span>03</span>
                <h4> Ad ad velit qui</h4>
                <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
              </div>
            </div>

          </div>

        </div>
      </section> -->
    <!-- End Why Us Section -->

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row d-flex align-items-center">

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Services</span>
          <h2>Services</h2>
          <p>These are the services we offer</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box" id="oral">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href=""><?php echo $row['service1'] ?></a></h4>
              <p>A procedure done for the teeth cleaning. It removes tartar and plaque build-up from the surfaces of the teeth as well as those hidden in between and under the gums. </p>

            </div><br>
            <iframe hidden="hidden" id="iframe1" src="services/service1.php"></iframe>
            <button onclick="toggle1(this);" class="btn btn-light">See details</button>
            <script>
              let toggle1 = button => {
                let element = document.getElementById("iframe1");
                let hidden = element.getAttribute("hidden");

                if (hidden) {
                  element.removeAttribute("hidden");
                  button.innerText = "Close";
                } else {
                  element.setAttribute("hidden", "hidden");
                  button.innerText = "See details";
                }
              }
            </script>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href=""><?php echo $row['service2'] ?></a></h4>
              <p>Fillings are special materials that your dentist places on your teeth to repair tooth decay (cavities) or defects on the tooth surface. Fillings (also called restorations) restore the tooth to form and function.</p>

            </div><br>
            <iframe hidden="hidden" id="iframe2" src="services/service2.php"></iframe>
            <button onclick="toggle2(this);" class="btn btn-light">See details</button>
            <script>
              let toggle2 = button => {
                let element = document.getElementById("iframe2");
                let hidden = element.getAttribute("hidden");

                if (hidden) {
                  element.removeAttribute("hidden");
                  button.innerText = "Close";
                } else {
                  element.setAttribute("hidden", "hidden");
                  button.innerText = "See details";
                }
              }
            </script>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href=""><?php echo $row['service3'] ?></a></h4>
              <p>A dental procedure during which your tooth is completely removed from its socket.</p>

            </div><br>
            <iframe hidden="hidden" id="iframe3" src="services/service3.php"></iframe>
            <button onclick="toggle3(this);" class="btn btn-light">See details</button>
            <script>
              let toggle3 = button => {
                let element = document.getElementById("iframe3");
                let hidden = element.getAttribute("hidden");

                if (hidden) {
                  element.removeAttribute("hidden");
                  button.innerText = "Close";
                } else {
                  element.setAttribute("hidden", "hidden");
                  button.innerText = "See details";
                }
              }
            </script>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href=""><?php echo $row['service4'] ?></a></h4>
              <p>Removable oral appliances that replace missing teeth. There are many types of dentures, including full, partial and implant-supported dentures.</p>

            </div><br>
            <iframe hidden="hidden" id="iframe4" src="services/service4.php" style="height: 420px; margin-top: 15%;"></iframe>
            <button onclick="toggle4(this);" class="btn btn-light">See details</button>
            <script>
              let toggle4 = button => {
                let element = document.getElementById("iframe4");
                let hidden = element.getAttribute("hidden");

                if (hidden) {
                  element.removeAttribute("hidden");
                  button.innerText = "Close";
                } else {
                  element.setAttribute("hidden", "hidden");
                  button.innerText = "See details";
                }
              }
            </script>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href=""><?php echo $row['service5'] ?></a></h4>
              <p> Involves bleaching your teeth to make them lighter</p>

            </div><br>
            <iframe hidden="hidden" id="iframe5" src="services/service5.php"></iframe>
            <button onclick="toggle5(this);" class="btn btn-light">See details</button>
            <script>
              let toggle5 = button => {
                let element = document.getElementById("iframe5");
                let hidden = element.getAttribute("hidden");

                if (hidden) {
                  element.removeAttribute("hidden");
                  button.innerText = "Close";
                } else {
                  element.setAttribute("hidden", "hidden");
                  button.innerText = "See details";
                }
              }
            </script>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href=""><?php echo $row['service6'] ?></a></h4>
              <p>Are devices used in orthodontics that align and straighten teeth and help position them with regard to a person's bite</p>

            </div><br>
            <iframe hidden="hidden" id="iframe6" src="services/service6.php"></iframe>
            <button onclick="toggle6(this);" class="btn btn-light">See details</button>
            <script>
              let toggle6 = button => {
                let element = document.getElementById("iframe6");
                let hidden = element.getAttribute("hidden");

                if (hidden) {
                  element.removeAttribute("hidden");
                  button.innerText = "Close";
                } else {
                  element.setAttribute("hidden", "hidden");
                  button.innerText = "See details";
                }
              }
            </script>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <style>
      .cta {
        background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.5)), url("<?php echo 'assets/img/' . $row['goodtoknow']; ?>") fixed center center;
        background-size: cover;
        padding: 120px 0;
      }
    </style>
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Good to Know!</h3>
          <p> We are conveniently located at the Baliuag Public Market attached to the Old Poblacion Barangay Hall (now Poblacion Day Care Center) near BESCO (formerly CVC Supermarket) and BMG Arcade - way/street in front of Veterans Bank.</p>
          <a class="cta-btn" href="#">Back to Top</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Portfolio</span>
          <h2>Portfolio</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <span>Pricing</span>
          <h2>Pricing</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="150">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Got some questions? Inquire or make reservations by emailing us </p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Dental Clique, Brgy. Poblacion, Baliwag, Bulacan</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>dentalclique13@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>0925 860 0028</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d520.4172029613027!2d120.9008093041661!3d14.952181803344525!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397aaaa2e891ad9%3A0x6ccf43194cdc4ea5!2sDental%20Clique!5e0!3m2!1sen!2sph!4v1682253027578!5m2!1sen!2sph" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="send.php" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <br>
              <div class="text-center">
                <button type="submit" class="btn btn-light" name="send">Send Message</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Day</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#services"><?php echo $row['service1']; ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services"><?php echo $row['service2']; ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services"><?php echo $row['service3']; ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#oral"><?php echo $row['service4']; ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#oral"><?php echo $row['service5']; ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#oral"><?php echo $row['service6']; ?></a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Day</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
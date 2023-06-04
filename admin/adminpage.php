<?php
include '../connection.php';

$query = "SELECT * FROM info WHERE info_id= '1'";
$res = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($res);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicons -->
  <link href="../assets/img/dentallogo.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/adminstyle.css" rel="stylesheet">

  <title>Admin Page</title>
</head>

<body>
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo"><img src="assets/img/namelogo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              <li><a href="#oral">Oral Prophylaxis</a></li>
              <li><a href="#">Restorations</a></li>
              <li><a href="#">Extraction</a></li>
              <li><a href="#">Dentures</a></li>
              <li><a href="#">Dental</a></li>
              <li><a href="#">Dental Braces</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div>
    <form action="connect.php">
      <div class="container-sm">

        <h2>Home</h2>
        <div class="mb-3">
          <label for="logo" class="form-label">Change Logo</label>
          <input type="file" class="form-control" id="logo" name="logo">
        </div>
        <div class="mb-3">
          <label for="homepic" class="form-label">Change Photo for Home</label>
          <input type="file" class="form-control" id="homepic" name="homepic">
        </div>
        <div class="mb-3">
          <label for="homedesc1" class="form-label">Home Description</label>
          <textarea class="form-control" name="homedesc1" rows="2" placeholder="<?php echo $row['homedesc1'] ?>" required></textarea>
        </div>
        <div class="mb-3">
          <label for="homedesc2" class="form-label">Home Description 2</label>
          <textarea class="form-control" name="homedesc2" rows="2" placeholder="<?php echo $row['homedesc2'] ?>" required></textarea>
        </div>

        <h2>About</h2>
        <div class="mb-3">
          <label for="aboutpic" class="form-label">Change Photo for About</label>
          <input type="file" class="form-control" id="aboutpic" name="aboutpic">
        </div>
        <div class="mb-3">
          <label for="aboutus" class="form-label">About Us Description</label>
          <textarea class="form-control" name="aboutus" rows="5" placeholder="<?php echo $row['aboutus'] ?>" required></textarea>
        </div>
        <div class="mb-3">
          <label for="guide1" class="form-label">Guideline 1</label>
          <textarea class="form-control" name="guide1" rows="2" placeholder="<?php echo $row['guide1'] ?>" required></textarea>
        </div>
        <div class="mb-3">
          <label for="guide2" class="form-label">Guideline 2</label>
          <textarea class="form-control" name="guide2" rows="2" placeholder="<?php echo $row['guide2'] ?>" required></textarea>
        </div>
        <div class="mb-3">
          <label for="guide3" class="form-label">Guideline 3</label>
          <textarea class="form-control" name="guide3" rows="2" placeholder="<?php echo $row['guide3'] ?>" required></textarea>
        </div>
        <div class="mb-3">
          <label for="guide4" class="form-label">Guideline 4</label>
          <textarea class="form-control" name="guide4" rows="2" placeholder="<?php echo $row['guide4'] ?>" required></textarea>
        </div>
        <div class="mb-3">
          <label for="guide5" class="form-label">Guideline 5</label>
          <textarea class="form-control" name="guide5" rows="2" placeholder="<?php echo $row['guide5'] ?>" required></textarea>
        </div>
        <div class="mb-3">
          <label for="guide6" class="form-label">Guideline 6</label>
          <textarea class="form-control" name="guide6" rows="2" placeholder="<?php echo $row['guide6'] ?>" required></textarea>
        </div>
    </form>
  </div>








  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
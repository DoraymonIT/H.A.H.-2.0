<?php
require_once('database_connect.php');
ob_start();
session_start();
if (empty($_SESSION['email'])) {
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>
    DoraymonIT | Dashboard
  </title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon" />
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet" />
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>
  <!-- ======= Header ======= -->
  <?php include_once('header.php') ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="" class="d-flex align-items-center">


  </section>
  <!-- End Hero -->

  <main id="main">

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>DoraymonIT</span></strong>. All Rights Reserved 2020
        </div>
        <div class="credits">
          Designed by <a href="https://doraymonit.com/">DoraymonIT .</a>
        </div>
      </div>
      <div class=" text-center text-md-right pt-3 pt-md-0">
        <?php if (isset($_SESSION['email'])) : ?>
          <h6 style="color: white;font-weight: 700;">
            <i class="ri-user-6-line" ></i>
            <?php echo $_SESSION['nom'] . ' ' . $_SESSION['prenom'] ?> <span>!</span>
          </h6>
          <a href="logout.php">
            <button class="btn btn-sm btn-dark">   <i class="ri-logout-box-line"></i> Logout</button></a>
        <?php endif ?>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
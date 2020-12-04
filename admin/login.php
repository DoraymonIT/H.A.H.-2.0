<?php
require_once('database_connect.php');
ob_start();
session_start();
if (!empty($_SESSION['email'])) {
    header('location: dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>
        DoraymonIT | Admin
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
    <header id="header" class="fixed-top">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-10 d-flex align-items-center">
                    <h1 class="logo mr-auto">
                        <a href="index.html">DoraymonIT<span>.</span></a>
                    </h1>

                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->


    <main id="main">
        <section id="heroLogin" class="d-flex align-items-center">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-4">
                        <?php if (isset($_SESSION['wrong'])) : ?>
                            <div class="alert alert-danger" role="alert" style="text-align: center;">
                                <?php echo $_SESSION['wrong'] ?> </div>
                        <?php endif ?>
                    </div>
                    <div class="col-md-4" style="
    background-color: #e03a3c;
    padding: 30px;
    opacity: 0.85;
    border: 3px solid white;
    border-radius: 10px;
    color: white;
">
                        <form action="login-process.php" method="post" role="form">
                            <div class="form-row">
                                <div class="col-12 form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
                                </div>
                                <br>
                                <div class="col-12 form-group">
                                    <label for="email">Password</label>
                                    <input type="password" name="password" class="form-control" id="name" placeholder="Your Password" required />
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="submit_portfolio" class="btn-get-started scrollto">Log In</button>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>

        </section>
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
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="github"><i class="bx bxl-github"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

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
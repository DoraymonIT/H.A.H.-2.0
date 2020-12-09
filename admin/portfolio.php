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
    <style>
        .voila {
            background-color: #e03a3c;
            padding: 5px;
            border-radius: 6px;
            margin-bottom: 7px;
        }

        .boldi {
            font-weight: bold;
            padding-bottom: 10px;
        }

        .h55 {
            font-weight: bold;
            text-align: center;
            background: #e03a3c;
            padding: 10px;
        }

        .btn-custom {
            background: #e03a3c;
            font-weight: bold;

        }
    </style>
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
        <div class="container-fluid boldi">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="h55"> <i class="ri-add-line"></i> AJOUTER UN PROJET</h5> <br>
                    <form action="process.php" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-12 form-group">
                                <label>Image 1</label>
                                <input class="voila" accept="image/*" type="file" name="img1" required />
                            </div>
                            <div class="col-12 form-group">
                                <label>Image 2</label>
                                <input type="file" accept="image/*" class="voila" name="img2" required />
                            </div>
                            <div class="col-12 form-group">
                                <label>Image 3</label>
                                <input type="file" accept="image/*" class="voila" name="img3" required />
                            </div>
                            <div class="col-12 form-group">
                                <label>Nom</label>
                                <input type="text" class="form-control form-control-sm" name="nom" placeholder="Name" required />
                            </div>
                            <br>
                            <div class="col-12 form-group">
                                <label for="email">URL</label>
                                <input type="text" name="url" class="form-control form-control-sm" placeholder="example.com" required />
                            </div>
                            <div class="col-12 form-group">
                                <label for="email">Client</label>
                                <input type="text" name="client" class="form-control form-control-sm" placeholder="Client" required />
                            </div>
                            <div class=" col-12 form-group">
                                <label for="">Category</label>
                                <select class="form-control form-control-sm" name="category" required>
                                    <option>Choose...</option>
                                    <?php $category = "SELECT * FROM category ";
                                    $result = mysqli_query($db, $category);
                                    while ($row = $result->fetch_assoc()) { ?>
                                        <option value="<?php echo $row['id'] ?>"><?php echo $row['nom'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <label for="email">Description</label>
                                <textarea name="description" class="form-control form-control-sm" cols="3" rows="2" required></textarea>
                            </div>

                        </div>

                        <div class="text-center">
                            <button type="submit" name="submit_portfolio" class="btn btn-sm btn-custom"> <i class="ri-add-fill"></i> Add</button>
                        </div>
                        <br>
                    </form>
                </div>
                <div class="col-md-8">
                    <h5 class="h55"> <i class="ri-list-check-2" ></i> LISTES DES PROJETS</h5> <br>
                    <table class="table table-striped  table-responsive-xl table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Nom</th>
                                <th>Url</th>
                                <th>Client</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $projets = "SELECT * FROM projet ";
                            $result = mysqli_query($db, $projets);
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td scope="row"><?php echo $row['nom'] ?></td>
                                    <td><a href="<?php echo $row['projet_url'] ?>"> <i class="ri-external-link-line"></i> Link</a></td>
                                    <td><?php echo $row['client'] ?></td>
                                    <td><?php $id_cat = $row['category'];
                                        $category = "SELECT nom FROM category where id =  $id_cat";
                                        $result = mysqli_query($db, $category);
                                        while ($row1 = $result->fetch_assoc()) {
                                            echo $row1['nom'];
                                        }
                                        ?></td>
                                    <td><?php echo $row['description'] ?></td>
                                    <td><?php echo $row['projet_date'] ?></td>
                                    <td><button type="button" name="" id="" class="btn btn-sm btn-danger "><i class="ri-delete-bin-7-line" ></i></button></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
                        <button class="btn btn-sm btn-dark"> <i class="ri-logout-box-line"></i>  Logout</button></a>
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
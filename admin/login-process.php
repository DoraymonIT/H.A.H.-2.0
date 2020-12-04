<?php
ob_start();
require_once("database_connect.php");
session_start();
// Login Portfolio
if (isset($_POST['submit_portfolio'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = md5($password);

    $query = "SELECT * FROM administrateur WHERE email='$email' AND pass='$hashed_password'";

    $result = mysqli_query($db, $query);
   
    if (!$result || mysqli_num_rows($result) === 1) {
        $_SESSION['email'] = $email;
        while ($row = $result->fetch_assoc()) {
       
            $_SESSION['nom'] = $row['nom'];
            $_SESSION['prenom'] = $row['prenom'];
        
        }
        header('location: dashboard.php');
    } else {
        echo "Non";
        $_SESSION['wrong'] = " Oups !! <strong>Email</strong> ou <strong> Mot de passe </strong> Invalide !!";

        header('location: login.php');
    }
}





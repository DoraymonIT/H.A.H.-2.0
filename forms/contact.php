<?php
ob_start();
session_start();
require_once('../admin/database_connect.php');
// Submit LPortFolio
if (isset($_POST['submit_contact'])) {

  $nom = $_POST['name'];
  $email = $_POST['email'];
  $subj = $_POST['subject'];
  $msg = $_POST['message'];
  $phone = $_POST['phone'];

  $sql =  $db->query('INSERT INTO contact (nom,email,subj,msg,phone) VALUES
     ("' . $nom . '","' . $email . '","' . $subj . '","' . $msg . '","' . $phone . '")');
  if ($sql) {
    echo "Yes";
    $_SESSION['success'] = 'Thanks !! Your Message has been send with success .';
    header('location: ../index.php');

  } else {
    echo "NON";
  }
}
// Submit LPortFolio
if (isset($_POST['subscribe'])) {

  $email = $_POST['email'];


  $sql =  $db->query('INSERT INTO newsletter (email) VALUES
     ("' . $email . '")');
  if ($sql) {
    echo "Yes";
    $_SESSION['subscribe'] = 'Thanks For Your Interests  !!';
    header('location: ../index.html');

  } else {
    echo "NON";
  }
}


<?php
require_once('database_connect.php');
// Submit LPortFolio
if (isset($_POST['submit_portfolio'])) {

    $target_dir = "upload/";
    $target_file1 = $target_dir . basename($_FILES["img1"]["name"]);
    $imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
    $target_file2 = $target_dir . basename($_FILES["img2"]["name"]);
    $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
    $target_file3 = $target_dir . basename($_FILES["img3"]["name"]);
    $imageFileType3 = strtolower(pathinfo($target_file3, PATHINFO_EXTENSION));

    $category = $_POST['category'];
    $new_date = date('Y-m-d');
    $client = $_POST['client'];
    $url = $_POST['url'];
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $image_base64_1 = base64_encode(file_get_contents($_FILES['img1']['tmp_name']));
    $image1 = 'data:image/' . $imageFileType1 . ';base64,' . $image_base64_1;

    $image_base64_2 = base64_encode(file_get_contents($_FILES['img2']['tmp_name']));
    $image2 = 'data:image/' . $imageFileType2 . ';base64,' . $image_base64_2;

    $image_base64_3 = base64_encode(file_get_contents($_FILES['img3']['tmp_name']));
    $image3 = 'data:image/' . $imageFileType3 . ';base64,' . $image_base64_3;

    $sql =  $db->query('INSERT INTO projet (category,client,projet_date,projet_url,description,nom,img1,img2,img3) VALUES
     ("' . $category . '","' . $client . '","' . $new_date . '","' . $url . '","' . $description . '","' . $nom . '","' . $image1 . '",
"' . $image2 . '","' . $image3 . '")');
    if ($sql) {
        echo "Yes";
        $newname1 =  $client . "1." . $imageFileType1;
        move_uploaded_file($_FILES['img1']['tmp_name'], $target_dir . $newname1);
        $newname2 =  $client . "2." . $imageFileType2;
        move_uploaded_file($_FILES['img2']['tmp_name'], $target_dir . $newname2);
        $newname3 =  $client . "3." . $imageFileType3;
        move_uploaded_file($_FILES['img3']['tmp_name'], $target_dir . $newname3);
    } else {
        echo "NON";
    }
}

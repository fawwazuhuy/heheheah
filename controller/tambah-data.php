<?php
include_once("../connec.php");
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: view/login.php");
}

$ussr = $_SESSION['username'];
$wa = $_SESSION['contact_wa'];
$fb = $_SESSION['contact_fb'];
$ig = $_SESSION['contact_ig'];

$nama_hewan = $_POST['nama_hewan'];
$des_hewan =  $_POST['des_hewan'];


$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["gambar_hewan"]["name"]);
$ehek = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



$lokasi_hewan = $_POST['lokasi_hewan'];
$habitat_hewan = $_POST['habitat_hewan'];

if (file_exists($target_file)) {
    $_SESSION['error'] = "File already exists.";
    $ehek = 0;
    header("Location: ../main.php");
    exit();
}

$allowedFileTypes = array("jpg", "png", "jpeg", "gif");
if (!in_array($imageFileType, $allowedFileTypes)) {
    $_SESSION['error'] = "Only JPG, JPEG, PNG & GIF files are allowed.";
    $ehek = 0;
    header("Location: ../main.php");
    exit();
}

if ($ehek == 0) {
    echo "File was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["gambar_hewan"]["tmp_name"], $target_file)) {

        $sql = "INSERT INTO hewan(nama_hewan, deskripsi_hewan, gambar_hewan, lokasi_hewan, habitat_hewan, username, contact_wa, contact_fb, contact_ig) 
                VALUES ('$nama_hewan', '$des_hewan', '$target_file', '$lokasi_hewan', '$habitat_hewan', '$ussr','$wa','$fb','$ig')";
        if (mysqli_query($connection, $sql)) {
            echo "File uploaded and data inserted into database.";
        } else {
            echo "Error inserting data into database: " . mysqli_error($connection);
        }
    } else {
        echo "Error uploading file.";
    }
}

header("Location: ../main.php");

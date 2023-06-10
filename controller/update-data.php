<?php
include_once("../connec.php");
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: view/login.php");
}

$id = $_POST['id'];
$nama = $_POST['nama_hewan'];
$deskripsi = $_POST['des_hewan'];
$lokasi = $_POST['lokasi_hewan'];
$habitat = $_POST['habitat_hewan'];

if ($_FILES['gambar_hewan']['size'] > 0) {
    $gambar = $_FILES['gambar_hewan']['name'];
    $tmp_name = $_FILES['gambar_hewan']['tmp_name'];

    $result = mysqli_query($connection, "SELECT * FROM hewan WHERE id_hewan=$id");
    while ($hewan = mysqli_fetch_array($result)) {
        $gambar_lama = $hewan['gambar_hewan'];
        unlink("../uploads/$gambar_lama");
    }

    move_uploaded_file($tmp_name, "../uploads/$gambar");

    mysqli_query($connection, "UPDATE hewan SET nama_hewan='$nama', deskripsi_hewan='$deskripsi', gambar_hewan='$gambar', lokasi_hewan='$lokasi', habitat_hewan='$habitat' WHERE id_hewan=$id");

    header("Location: ../main.php");
} else {
    mysqli_query($connection, "UPDATE hewan SET nama_hewan='$nama', deskripsi_hewan='$deskripsi', lokasi_hewan='$lokasi', habitat_hewan='$habitat' WHERE id_hewan=$id");

    header("Location: ../main.php");
}

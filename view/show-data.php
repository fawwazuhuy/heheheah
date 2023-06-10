<?php
include_once("../connec.php");
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: view/login.php");
}

$id = $_GET['id'];

$result = mysqli_query($connection, "SELECT * FROM hewan WHERE id_hewan=$id");

while ($hewan = mysqli_fetch_array($result)) {
    $gambar = $hewan['gambar_hewan'];
    $nama = $hewan['nama_hewan'];
    $deskripsi = $hewan['deskripsi_hewan'];
    $wa = $hewan['contact_wa'];
    $fb = $hewan['contact_fb'];
    $ig = $hewan['contact_ig'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi HaySEA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../the.css">
</head>
<!---->

<body>
    <?php $logo = "../nazzi.png";
    include "../layouts/navbar.php"; ?>
    <div class="duar">
        <div class="card sambalado " style="max-width: 800px;">
            <div class="row lele">
                <div class="farhan">
                    <img src="../uploads/<?= $gambar ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="ragil">
                    <div class="card-body">
                        <h5 class="card-title"><?= $nama ?></h5>
                        <p class="card-text"><?= $deskripsi ?></p>
                    </div>
                </div>
            </div>

            <hr class="mx-auto">
            <h4 class="eltenaro">Contact</h4>
            <div class="budi">
                <div class="nyrotong">
                    <img src="../img/ws.png" alt="Logo" class="logo">
                    <a href=""><?= $wa ?></a>
                </div>
                <div class="nyrotong">
                    <img src="../img/fb.png" alt="Logo" class="logo">
                    <a href="#"><?= $fb ?></a>
                </div>
                <div class="nyrotong">
                    <img src="../img/ig.jpg" alt="Logo" class="logo">
                    <a href="#"><?= $ig ?></a>
                </div>

            </div>
            <div class="seiza">
                <a href="../form_data/edit-data.php?id=<?= $id ?>" class="btn anime">Edit Data</a>
                <a href="../controller/delete-data.php?id=<?= $id ?>" class="btn kartun">Delete Data</a>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include_once("../connec.php");
session_start();

$result = mysqli_query($connection, "SELECT * FROM users");

// while ($akun = mysqli_fetch_array($result)) {
//     $email = $akun['gmail_nama'];
// }
// 
?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../feedback.css">
    <link rel="stylesheet" href="../the.css">
</head>

<body>
    <?php $logo = "../nazzi.png";
    $feedback = "";
    include "../layouts/navbar.php"; ?>
    <div class="miesedap">
        <div class="sarimie">
            <h2 class="title">feedback</h2>
            <form action="../controller/tambah-feedback.php" method="POST">
                <div class="becak">
                    <label for="gmail_nama" class="form-label">nama gmail</label>
                    <input type="text" class="form-control" id="gmail_nama" name="gmail_nama" value="<?= $_SESSION['email'] ?>" required>
                </div>
                <div class="becak">
                    <label for="ulasan" class="form-label">ulasan</label>
                    <textarea class="form-control" id="ulasan" name="ulasan" rows="7" placeholder="ulasan anda.."></textarea>
                </div>
                <div class="seiza" style="margin-top: 1rem ;">
                    <input type="submit" class="btn anime" name="submit">
                    <a href="../form_data/view_feedback.php" class="btn anime"> lihat table</a>
                </div>
            </form>
        </div>
    </div>

    <?php if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
    } ?>
</body>
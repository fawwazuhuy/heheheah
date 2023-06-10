<?php
include_once("../connec.php");
session_start();

$result = mysqli_query($connection, "SELECT * FROM feedbackk");

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

    <?php
    $logo = "../nazzi.png";
    include "../layouts/navbar.php";
    while ($data = mysqli_fetch_array($result)) {
        $id = $data['id_feedback'];
    ?>
        <div class="kotagz">
            <tr>
                <th><?php echo $data['gmail_nama']; ?></th>
                <th><?php echo $data['ulasan']; ?></th>
            </tr>
        </div>
    <?php } ?>
</body>
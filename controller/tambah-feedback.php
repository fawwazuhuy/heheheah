<?php


$email = $_POST['gmail_nama'];
$ulasan = $_POST['ulasan'];

require_once("../connec.php");

echo "$email $ulasan";

$bebek = "INSERT INTO feedbackk (gmail_nama, ulasan)  VALUES('$email','$ulasan')";
$result = mysqli_query($connection, $bebek);


header("Location: ../main.php");                

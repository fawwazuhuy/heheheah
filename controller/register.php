<?php

$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
$ussr = $_POST['username'];
$wa = $_POST['no_wa'];
$fb = $_POST['no_fb'];
$ig = $_POST['no_ig'];


require_once("../connec.php");


$result = mysqli_query($connection, "INSERT INTO users (email,password, username, contact_wa, contact_fb, contact_ig) VALUES('$email','$pass','$ussr','$wa','$fb','$ig')") or die(mysqli_error($connection));


header("location: ../main.php");

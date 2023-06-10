<?php
include_once("../connec.php");
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: view/login.php");
}

$id = $_GET['id'];

$result = mysqli_query($connection, "SELECT * FROM hewan WHERE id_hewan=$id");

mysqli_query($connection, "DELETE FROM hewan WHERE id_hewan=$id");

header("Location: ../main.php");

<?php
require_once("../connec.php");
session_start();
if (isset($_SESSION['email'])) {
    header("Location: ../main.php");
} else {
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($connection, $sql);

        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id_users'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['contact_wa'] = $row['contact_wa'];
                $_SESSION['contact_fb'] = $row['contact_fb'];
                $_SESSION['contact_ig'] = $row['contact_ig'];


                header("Location: ../main.php");
            } else {
                $_SESSION['error'] = "<script>alert('password Anda salah. Silahkan coba lagi!')</script>";
                header("Location: ../view/login.php");
            }
        } else {
            $_SESSION['error'] = "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";

            header("Location: ../view/login.php");
        }
    }
}

// Hash password
// $password = password_hash($password, PASSWORD_DEFAULT);

// Simpan hash password ke database
// $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
// mysqli_query($connection, $sql);

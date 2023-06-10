<?php
session_start();
if (isset($_SESSION['email'])) {
    header("Location: ../main.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../the.css">
</head>

<body id="login">
    <div class="content">
        <div class="ayam">
            <h2 class="title">Login</h2>
            <div class="form-login">
                <form action="../controller/login.php" method="POST">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" placeholder="Input Email" style="margin-top: 5px;" ><br>
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password" placeholder="Input Password" style="margin-top: 5px;" ><br><br>
                    <input type="submit" class="btn btn-primary" name="submit">
                    <p>Anda belum punya akun? <a href="register.php">Register</a></p>
                </form>
            </div>
        </div>
    </div>
    <?php if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        session_destroy();
    }

    ?>
</body>

</html>
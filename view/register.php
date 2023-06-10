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
            <h2 class="title">Register</h2>
            <div class="form-login">
                <form action="../controller/register.php" method="POST">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Input Email" style="margin-top: 5px;" autocomplete="off" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Input username" style="margin-top: 5px;" autocomplete="off" required>
                    <label for="username">username:</label>
                    <input type="text" id="username" name="username" placeholder="Input Email" style="margin-top: 5px;" autocomplete="off" required><br>
                    <div class="div"></div>
                    <label for="no_wa">no whatsapp:</label>
                    <input type="text" id="no_wa" name="no_wa" placeholder="Input Email" style="margin-top: 5px;" autocomplete="off" value="-" required>
                    <label for="no_fb">no facebook:</label>
                    <input type="text" id="no_fb" name="no_fb" placeholder="Input Email" style="margin-top: 5px;" autocomplete="off" value="-" required>
                    <label for="no_ig">no instagram:</label>
                    <input type="text" id="no_ig" name="no_ig" placeholder="Input Email" style="margin-top: 5px;" autocomplete="off" value="-" required><br>
                    <input type="submit" class="btn btn-primary" name="submit">
                    <p>Anda sudah punya akun? <a href="login.php">Login</a></p>
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
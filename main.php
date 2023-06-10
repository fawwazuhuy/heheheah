<?php
include_once("connec.php");
session_start();

if (!isset($_SESSION['email'])) {
  header("Location: view/login.php");
}

$result = mysqli_query($connection, "SELECT * FROM hewan");

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi HaySEA</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./the.css">
  <!-- <link rel="stylesheet" href="./chuaks.css"> -->
</head>

<body>
  <?php $logo = "./nazzi.png";
  $feedback = "view/feedback.php";
  include "./layouts/navbar.php"; ?>
  <DIV class="container">
    <div class="search-box">
      <form>
        <input type="text" placeholder="Search.." id="searchInput">
        <i class="fa fa-search"></i>
      </form>
    </div>

    <?php if (isset($_SESSION['error'])) : ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_SESSION['error']; ?>
      </div>
      <?php unset($_SESSION['error']); ?>
    <?php endif; ?>
    <div class="classico">
      <div class="row row-cols-md-2 mamamia">
        <?php while ($hewan = mysqli_fetch_array($result)) : ?>
          <div class="col filtered-item"><!--col filtered-item -->
            <a href="./view/show-data.php?id=<?= $hewan['id_hewan'] ?>" class="masuk">
              <div class="card">
                <div class="row g-0">
                  <div class="col-md-4">
                    <object data="./uploads/<?= $hewan['gambar_hewan'] ?>" class="card-img img-fluid imgkotakk" style="height: 100%; object-fit:cover;" alt="..."></object>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><?= $hewan['nama_hewan']; ?></h5>
                      <p class="card-text"><?= $hewan['deskripsi_hewan']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
    </div>

    <div class="mercury">
      <a href="./form_data/tambah-data.php" class="btn btn-primary">Tambah Data</a>
    </div>
  </DIV>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="./script.js"></script>
</body>

</html>
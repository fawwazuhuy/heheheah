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
    $lokasi = $hewan['lokasi_hewan'];
    $habitat = $hewan['habitat_hewan'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Data Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../the.css">
</head>

<body>
    <?php $logo = "../nazzi.png";
    include "../layouts/navbar.php"; ?>

    <div class="container py-5" style="max-width: 550px;">
        <form method="post" action="../controller/update-data.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_hewan" class="form-label">Nama Hewan</label>
                <input type="text" class="form-control" id="nama_hewan" name="nama_hewan" value="<?= $nama ?>" required>
            </div>
            <div class="mb-3">
                <label for="des_hewan" class="form-label">Deskripsi Hewan</label>
                <textarea class="form-control" id="des_hewan" name="des_hewan" rows="4" required><?= $deskripsi ?></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar_hewan" class="form-label">Gambar Hewan</label>
                <input class="form-control" type="file" id="gambar_hewan" name="gambar_hewan" value="<?= $gambar ?>">
            </div>
            <div class="mb-3">
                <label for="lokasi_hewan" class="form-label">Lokasi Hewan</label>
                <input type="text" class="form-control" id="lokasi_hewan" name="lokasi_hewan" value="<?= $lokasi ?>" required>
            </div>
            <select class="form-select" name="habitat_hewan" value="<?= $habitat ?>" required>
                <option selected>Habitat</option>
                <option value="Darat">Darat</option>
                <option value="Laut">Laut</option>
            </select>
            <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</body>
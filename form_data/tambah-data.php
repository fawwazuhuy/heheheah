<?php
include_once("../connec.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../the.css">
</head>

<body>
    <?php $logo = "../nazzi.png";
    include "../layouts/navbar.php"; ?>
    <div class="container py-5" style="max-width: 550px;">
        <form method="post" action="../controller/tambah-data.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_hewan" class="form-label">Nama Hewan</label>
                <input type="text" class="form-control" id="nama_hewan" name="nama_hewan" required>
            </div>
            <div class="mb-3">
                <label for="des_hewan" class="form-label">Deskripsi Hewan</label>
                <textarea class="form-control" id="des_hewan" name="des_hewan" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar_hewan" class="form-label">Gambar Hewan</label>
                <input class="form-control" type="file" id="gambar_hewan" name="gambar_hewan" required>
            </div>
            <div class="mb-3">
                <label for="lokasi_hewan" class="form-label">Lokasi Hewan</label>
                <input type="text" class="form-control" id="lokasi_hewan" name="lokasi_hewan" required>
            </div>
            <select class="form-select" name="habitat_hewan" required>
                <option selected>Habitat</option>
                <option value="Darat">Darat</option>
                <option value="Laut">Laut</option>
            </select>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</body>
<?php
    require 'functions.php';
    //ambil data user dari database
    $_kategori =  $_GET["kategori"];
    $item = query("SELECT * FROM item WHERE kategori = '$_kategori' ");
    
    if (isset($_POST["search"])) {
        $item = cari($_POST["keyword"]);
    }

    if (isset($_POST["logout"])) {
        header("location: logout.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/dashboard.css">
    <title>Ihkeya</title>
</head>

<body>

    <!-- navbar using bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand nav-logo" href="dashboard.php">
            <img src="img/logo.jpeg" width="30" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle a-warna" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="dashboard2.php?kategori=Kamar Tidur">Kamar Tidur</a>
                        <a class="dropdown-item" href="dashboard2.php?kategori=Kamar Mandi">Kamar Mandi</a>
                        <a class="dropdown-item" href="dashboard2.php?kategori=Ruang Tamu">Ruang Tamu</a>
                    </div>
                </li>
            </ul>
            <form action = "" method = "post" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" name = "keyword" id = "keyword" placeholder="Search" aria-label="Search" autocomplete="off">
            </form>
            <form action="" method="post" class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-danger my-2 my-sm-0" id="logout" name= "logout" type="submit">Logout</button>
            </form>
        </div>
    </nav>

    <h2>Explore our collection</h2>

    <!-- membuat main -->
    <div class="main-container" id="container">
        <?php foreach ($item as $row) : ?>
            <div class="item">
                <div class="item-child">
                    <div class="item-child-image">
                        <img src="img/<?= $row['gambar']; ?>">
                    </div>
                    <div class="item-child-title">
                        <h2><?= $row['nama']; ?></h2>
                        <h3><?= $row['deskripsi']; ?></h3>
                        <h2>Rp. <?= $row['harga']; ?></h3>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <script src="script/script-dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
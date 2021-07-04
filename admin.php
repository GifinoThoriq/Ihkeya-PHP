<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("location: login.php");
        exit;
    }

    if(!isset($_SESSION["admin"])){
        header("location: login.php");
        exit;
    }

    require 'functions.php';
    //ambil data user dari database
    $item = query("SELECT * FROM item");

    //tombol cari ditekan
    if(isset($_POST["search"])){
        $item = cari($_POST["keyword"]);
    }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style/admin.css">
    <title>Ihkeya</title>
</head>
<body>
    <h1>Selamat Datang Admin</h1>
    <main>
        <div class="bagian-atas">
            <a href="tambah.php">tambah data</a>
            <form action="" method="POST">
                <input type="text" name="keyword" size="40" autofocus placeholder="masukkan pencarian..." autocomplete="off" id="keyword">
                <!-- <button type="submit" name="search" id="tombol-cari">Search</button> -->
            </form>
        </div>
        <table border = "1" cellpadding = "10" cellspacing = "0" id="container">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>Tipe</th>
                <th>Harga</th>
                <th>Gambar</th>
            </tr>
            <?php $i = 1;?>
            <?php forEach($item as $row): ?>
            <tr>
                <td>
                <?= $i;?>
                </td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"];?>">change</a> |
                    <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin untuk menghapus?')">delete</a>
                </td>
                <td><?= $row["nama"];?></td>
                <td><?= $row["deskripsi"];?></td>
                <td><?= $row["kategori"];?></td>
                <td><?= $row["tipe"];?></td>
                <td><?= $row["harga"];?></td>
                <td><img src="img/<?= $row["gambar"];?>"></td>
            </tr>
            <?php $i++;?>
            <?php endforeach; ?>
        </table>
        <div class="bagian-bawah">
            <a href="dashboard.php">dashboard</a>
            <a href="logout.php">logout</a>
        </div>
    <main>


    <script src="script/script.js"></script>
</body>
</html>
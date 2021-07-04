<?php

    session_start();

    //cek session
    if(!isset($_SESSION["login"])){
        header("location: login.php");
        exit;
    }


    require 'functions.php';

    //ambil data di url
    $id = $_GET["id"];

    //query data user berdasarkan id
    $usr = query("SELECT * FROM item WHERE id = $id");
    

    //cek tombol submit
    if(isset($_POST["submit"])){

        //cek berhasil atau tidak
        if(ubah($id) > 0){
            echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = 'admin.php';

                </script>
            ";
        }else{
            echo "
            <script>
                alert('gagal');

            </script>
        ";
        }
    }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/ubah.css">
    <title>Ihkeya</title>
</head>
<body>
    <div class="container">
        <div class="kembali">
            <a href="admin.php">
                <img src="img/left-arrow.png" alt="">
                back
            </a>
        </div>
        <h2>Ubah Item</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <?php forEach($usr as $row): ?>
            <input type="hidden" name="gambarLama" value="<?= $row["gambar"];?>">
            <div class="input-box">
                <input type="text" name="nama" id="nama" required value="<?= $row["nama"];?>">
                <span>nama</span>
            </div>
            <div class="input-box">
                <input type="text" name="deskripsi" id="deskripsi" required value="<?= $row["deskripsi"];?>" >
                <span>deskripsi</span>
            </div>
            <div class="input-box">
                <select name="kategori" id="kategori" value = "<?= $row["kategori"];?>">
                    <option value="Kamar Tidur">Kamar Tidur</option>
                    <option value="Kamar Mandi">Kamar Mandi</option>
                    <option value="Ruang Tamu">Ruang Tamu</option>
                </select>
                <span>kategori</span>
            </div>
            <div class="input-box">
                <input type="text" name="tipe" id="tipe" required>
                <span>Tipe</span>
            </div>
            <div class="input-box">
                <input type="text" name="harga" id="harga" required value="<?= $row["harga"];?>">
                <span>harga</span>
            </div>
            <div class="image">
                <span>gambar</span>
                <div class="image-content">
                    <img src="img/<?= $row["gambar"];?>">
                    <input type="file" name="gambar" id="gambar">
                </div>
            </div>
            <div class="input-box">
                <button type="submit" name="submit">submit</button>
            </div>
            <?php endforeach; ?>
        </form>
    </div>
</body>
</html>
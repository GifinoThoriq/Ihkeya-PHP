<?php

    session_start();

    //cek session
    if(!isset($_SESSION["login"])){
        header("location: login.php");
        exit;
    }


    require 'functions.php';

    //cek tombol submit
    if(isset($_POST["submit"])){

        //cek berhasil atau tidak
        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil dimasukkan');
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
    <link rel="stylesheet" href="style/tambah.css">
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
        <h2>Tambah Item</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="input-box">
                <input type="text" name="nama" id="nama" required>
                <span>nama</span>
            </div>
            <div class="input-box">
                <input type="text" name="deskripsi" id="deskripsi" required>
                <span>deskripsi</span>
            </div>
            <div class="input-box">
                <!-- <input type="text" name="kategori" id="kategori" required> -->
                <select name="kategori" id="kategori">
                    <option value="Kamar Tidur">Kamar Tidur</option>
                    <option value="Kamar Mandi">Kamar Mandi</option>
                    <option value="Living Room">Living Room</option>
                </select>
                <span>kategori</span>
            </div>
            <div class="input-box">
                <input type="text" name="tipe" id="tipe" required>
                <span>Tipe</span>
            </div>
            <div class="input-box">
                <input type="text" name="harga" id="harga" required>
                <span>harga</span>
            </div>
            <div class="input-box">
                <span>gambar</span>
                <input type="file" name="gambar" id="gambar" required>
                
            </div>
            <div class="input-box">
                <button type="submit" name="submit">submit</button>
            </div>
        </form>
    </div>
</body>
</html>
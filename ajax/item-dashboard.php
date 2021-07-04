<?php
require '../functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM item 
WHERE nama LIKE '%$keyword%' OR deskripsi LIKE '%$keyword%' OR kategori LIKE '%$keyword%' OR tipe LIKE '%$keyword%' ";
$item = query($query); 
?>

<div class="main-container" id="container">
    <?php forEach($item as $row): ?>
        <div class="item">
            <div class="item-child">
                <div class="item-child-image">
                    <img src="img/<?= $row['gambar'];?>">
                </div>
                <div class="item-child-title">
                    <h2><?= $row['nama'];?></h2>
                    <h3><?= $row['deskripsi'];?></h3>
                    <h2>Rp. <?= $row['harga'];?></h3>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
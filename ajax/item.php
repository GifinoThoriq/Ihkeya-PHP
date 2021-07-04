<?php
require '../functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM item 
WHERE nama LIKE '%$keyword%' OR deskripsi LIKE '%$keyword%' OR kategori LIKE '%$keyword%' OR tipe LIKE '%$keyword%' ";
$item = query($query); 
?>

<table border = "1" cellpadding = "10" cellspacing = "0">
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
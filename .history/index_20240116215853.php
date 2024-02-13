<?php

$tokopak = query("SELECT * FROM tokopak");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Pakaian</title>
</head>
<body>

    <h1>Daftar Pakaian</h1>

    <a href="tambah.php">Tambah Pakaian</a>
    <br><br>
    
    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>gambar</th>
            <th>Kode Pakaian</th>
            <th>Jenis Pakaian</th>
            <th>Kategori</th>
            <th>Ukuran</th>
            <th>Harga</th>
            <th>stok</th>
            <th>Aksi</th>
        </tr>

        <?php foreach($tokopak as $row) : ?>
        <tr>
            <td>1</td>
            <td><?= $row["gambar"]; ?></td>
            <td><?= $row["kode_barang"]; ?></td>
            <td>Baju</td>
            <td>Baju Kasual</td>
            <td>L</td>
            <td>100000</td>
            <td>200</td>
            <td>
                <a href="">Ubah</a>
                <a href="">Hapus</a>
            </td>
        </tr>  
        <?php endforeach; ?>
    </table>

</body>
</html>
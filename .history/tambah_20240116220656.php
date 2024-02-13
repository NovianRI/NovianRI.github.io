<?php

require 'function.php';

if ( isset($_POST["submit"])) {
    if ( tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan');
                document.location.href = 'index.php';
            </script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pakaian</title>
</head>
<body>
    <h1>Tambah Pakaian</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="kode">Kode Pakian : </label>
                <input type="text" name="kode" id="kode">
            </li>
            <li>
                <label for="jenis">Jenis Pakaian : </label>
                <input type="text" name="jenis" id="jenis">
            </li>
            <li>
                <label for="kategori">Kategori : </label>
                <input type="text" name="kategori" id="kategori">
            </li>
            <li>
                <label for="ukuran">Ukuran : </label>
                <input type="text" name="ukuran" id="ukuran">
            </li>
            <li>
                <label for="stok">Stok : </label>
                <input type="text" name="stok" id="stok">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>
</html>
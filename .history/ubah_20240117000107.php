<?php

require 'function.php';

$id = $_GET["id"];

$mhs = query("SELECT * INTO tokopak WHERE id_pakaian = $id")[0];

if ( isset($_POST["submit"])) {
    if ( ubah($_POST) > 0) {
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
    <title>Ubah Daftar Pakaian</title>
</head>
<body>
    <h1>Ubah Data Pakaian</h1>    

    <form action="" method="post">
        <ul>
            <li>
                <label for="kode_pakaian">Kode Pakian : </label>
                <input type="text" name="kode_pakaian" id="kode_pakaian" require value="<?= $mhs["kode_pakaian"]; ?>">
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
                <label for="harga">Harga : </label>
                <input type="text" name="harga" id="harga">
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
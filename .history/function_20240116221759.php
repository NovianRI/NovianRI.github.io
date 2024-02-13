<?php

$koneksi = mysqli_connect("localhost", "root", "", "latihan_crud");

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc ($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $koneksi;

    $kodepakaian = htmlspecialchars($data["kode_pakaian"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $ukuran = htmlspecialchars($data["ukuran"]);
    $stok = htmlspecialchars($data["stok"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "SELECT INTO tokopak Value ('', '$kodepakaian', '$jenis', '$kategori', '$ukuran', '$stok', '$gambar')";
    mysqli_query($koneksi, $query);
}
?>
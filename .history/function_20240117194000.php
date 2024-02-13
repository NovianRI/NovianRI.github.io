<?php

$koneksi = mysqli_connect("localhost", "root", "", "latihan_crud");

function query($query){
    global $koneksi;

    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
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
    $harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);
    $gambar = htmlspecialchars($data["gambar"]);


    $query = "INSERT INTO tokopak Value ('', '$kodepakaian', '$jenis', '$kategori', '$ukuran','$harga', '$stok', '$gambar')";
    
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function ubah($data){
    global $koneksi;

    $id = $data["id_pakaian"];
    $kodepakaian = htmlspecialchars($data["kode_pakaian"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $ukuran = htmlspecialchars($data["ukuran"]);
    $harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE tokopak SET kode_pakaian = '$kodepakaian', jenis = '$jenis', kategori = '$kategori', ukuran = '$ukuran', harga = '$harga', stok = '$stok', gambar = '$gambar' WHERE id_pakaian = $id";
    mysqli_query($koneksi, $query);
    print_r($query); die;

    return mysqli_affected_rows($koneksi);
}

?>
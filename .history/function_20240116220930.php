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
    
}
?>
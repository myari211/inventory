<?php

    require('../conn.php');

    $id = $_GET['id'];
    $nama_barang = $_GET['nama_barang'];
    $harga_beli = $_GET['harga_beli'];
    $harga_jual = $_GET['harga_jual'];


    $update = "UPDATE barang SET nama_barang='$nama_barang', harga_beli='$harga_beli', harga_jual='$harga_jual' WHERE id='$id'";
    $gudang_update = mysqli_query($conn, $update) or die(mysqli_error());

    if(!$gudang_update){
        echo "Data Gagal Di Update";
    }
    else
    {
        header('location:../../frontend/barang/barang.php');
    }
?>
<?php

    require('../conn.php');

    $nama_barang = $_GET['nama_barang'];
    $harga_beli = $_GET['harga_beli'];
    $harga_jual = $_GET['harga_jual'];


    $insert = "INSERT INTO barang VALUES ('', '$nama_barang', '$harga_beli', '$harga_jual')";
    $barang_insert = mysqli_query($conn, $insert);

    if(!$barang_insert){
        echo "data gagal dimasukan";
    }
    else
    {
        header('location:../../frontend/barang/barang.php');
    }
?>
<?php

    require('../../conn.php');

    $id_barang = $_GET['id_barang'];
    $gudang = $_GET['gudang'];
    $tanggal = $_GET['tanggal'];
    $mutasi = $_GET['mutasi_keluar'];

    $insert = "INSERT INTO mutasi_keluar VALUES ('', '$id_barang', '$gudang', '$tanggal', '$mutasi')";
    $mutasi_masuk = mysqli_query($conn, $insert) or die(mysqli_error($conn));

    if(!$mutasi_masuk){
        echo "Data gagal dimasukan";
    }
    else{
        header("location:../../../frontend/mutasi/keluar/mutasi_keluar.php");
    }
?>
<?php
    require('../conn.php');


    $lokasi=$_GET["lokasi"];
    $kapasitas=$_GET["kapasitas"];

    $insert = "INSERT INTO gudang VALUES ('', '$lokasi', '$kapasitas')";
    $gudang_insert = mysqli_query($conn, $insert);


    if(!$gudang_insert){
        echo "Data Gagal Dimasukan";
    }
    else
    {
        echo "Data Berhasil Dimasukan";
        header('location:../../frontend/gudang/gudang.php');
    }
?>
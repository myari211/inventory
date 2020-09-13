<?php

    require('../conn.php');

    $id = $_GET['id'];
    $lokasi = $_GET['lokasi'];
    $kapasitas = $_GET['kapasitas'];


    $update = "UPDATE gudang SET lokasi='$lokasi', kapasitas='$kapasitas' WHERE id='$id'";
    $gudang_update = mysqli_query($conn, $update) or die(mysqli_error());

    if(!$gudang_update){
        echo "Data Gagal Di Update";
    }
    else
    {
        header('location:../../frontend/gudang/gudang.php');
    }
?>
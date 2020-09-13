<?php


require('../conn.php');

$id = $_GET['id'];

$delete = "DELETE FROM barang WHERE id='$id'";
$barang_delete = mysqli_query($conn, $delete) or die(mysqli_error());


if(!$barang_delete){
    echo "Data Gagal Dihapus";
}
else{
    header('location:../../frontend/barang/barang.php');
}


?>
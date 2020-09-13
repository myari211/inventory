<?php


require('../conn.php');

$id = $_GET['id'];

$delete = "DELETE FROM gudang WHERE id='$id'";
$gudang_delete = mysqli_query($conn, $delete) or die(mysqli_error());


if(!$gudang_delete){
    echo "Data Gagal Dihapus";
}
else{
    header('location:../../frontend/gudang/gudang.php');
}


?>
<?php

    require('../../conn.php');

    $id = $_GET['id'];

    $delete = "DELETE FROM mutasi_keluar WHERE id='$id'";
    $query = mysqli_query($conn, $delete) or die(mysqli_error());


    if(!$query){
        echo "Data gagal dihapus";
    }
    else{
        header("location:../../../frontend/mutasi/keluar/mutasi_keluar.php");
    }

?>
<?php

    require('../../backend/conn.php');
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: ../login.php");
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM barang WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
    
    <div class="container">
        <?php
            while($data = mysqli_fetch_array($query)){
        ?>
        <form mehtod="get" action="../../backend/barang/edit_proses.php">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <div class="row mt-4">
                <label for="lokasi">Nama Barang</label>
                <input type="text" name="nama_barang" id="lokasi" class="form-control" value="<?php echo $data['nama_barang']; ?>">
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 pl-0">
                    <label for="Harga Beli">Harga Beli</label>
                    <input type="number" name="harga_beli" id="harga_beli" class="form-control" value="<?php echo $data['harga_beli']; ?>">
                </div>
                <div class="col-lg-6 pr-0">
                    <label for="harga_jual">Harga Jual</label>
                    <input type="number" name="harga_jual" id="harga_jual" class="form-control" value="<?php echo $data['harga_jual']; ?>">
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-primary">
                    <i class="material-icons">send</i>
                </button>
            </div>
        </form>
        <?php } ?>
    </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
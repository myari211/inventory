<?php

    require('../../backend/conn.php');
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: ../login.php");
    }

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
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">
                        <button type="button" class="btn btn-primary" onClick="window.open('tambah_barang.php');">
                            <i class="material-icons d-flex align-items-center">add</i>
                        </button> 
                    </th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Beli</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Margin</th>
                    <th class="col d-flex align-items-center justify-content-end pb-4">Total : <?php echo $gudang_total ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($data = mysqli_fetch_array($barang)) {
                ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $data['nama_barang']; ?></td>
                    <td><?php echo $data['harga_beli']; ?></td>
                    <td><?php echo $data['harga_jual']; ?></td>
                    <td><?php echo ($data['harga_jual'] - $data['harga_beli']) ?></td>
                    <td class="d-flex justify-content-end">
                        <a href="edit_barang.php?id=<?php echo $data['id']; ?>">
                            <button type="button" class="btn btn-warning mr-2 d-flex align-items-center">
                                <i class="material-icons">edit</i>
                            </button>
                        </a>
                        <a href="../../backend/barang/delete_barang.php?id=<?php echo $data['id']; ?>">
                            <button type="button" class="btn btn-danger d-flex align-items-center">
                                <i class="material-icons">delete</i>
                            </button>
                        </a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
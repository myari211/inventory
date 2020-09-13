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
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
    <span class="menu-collapsed">Program Inventory</span>
  </a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item dropdown d-sm-block d-md-none">
        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="#"></a>
            <a class="dropdown-item" href="#">Profile</a>
        </div>
      </li>
      
    </ul>
  </div>
  <div class="d-flex justify-content-end align-items-center">
        <p class="mr-4 text-white">Hello, <?php echo $_SESSION['username']; ?></p>
        <a href="../../../backend/logout.php">
            <button type="button" class="btn btn-danger"><i class="material-icons">logout</i></button>
        </a>
  </div>
</nav>


<div class="row" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between align-items-center">
                    <span class="menu-collapsed">Gudang</span>
                    <i class="material-icons">keyboard_arrow_down</i>
                </div>
            </a>
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="gudang.php" class="list-group-item list-group-item-action bg-dark text-white d-flex justify-content-between align-items-center">
                    <span class="menu-collapsed">Daftar Gudang</span>
                    <i class="material-icons" style="font-size:15px;">home_work</i>
                </a>
                <a href="tambah_gudang.php" class="list-group-item list-group-item-action bg-dark text-white d-inline-flex justify-content-between">
                    <span class="menu-collapsed">Tambah Gudang</span>
                    <i class="material-icons" style="font-size:15px;">add_circle</i>
                </a>
            </div>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between align-items-center">
                    <span class="menu-collapsed">Barang</span>
                    <i class="material-icons">keyboard_arrow_down</i>
                </div>
            </a>
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="../barang/barang.php" class="list-group-item list-group-item-action bg-dark text-white d-inline-flex justify-content-between">
                    <span class="menu-collapsed">Daftar Barang</span>
                    <i class="material-icons" style="font-size:15px;">layers</i>
                </a>
                <a href="../barang/tambah_barang.php" class="list-group-item list-group-item-action bg-dark text-white d-inline-flex justify-content-between">
                    <span class="menu-collapsed">Tambah Barang</span>
                    <i class="material-icons" style="font-size:15px;">add_circle</i>
                </a>
            </div>
            <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between align-items-center">
                    <span class="menu-collapsed">Mutasi</span>
                    <i class="material-icons">keyboard_arrow_down</i>
                </div>
            </a>
            <div id='submenu3' class="collapse sidebar-submenu">
                <a href="../mutasi/masuk/mutasi_masuk.php" class="list-group-item list-group-item-action bg-dark text-white d-inline-flex justify-content-between">
                    <span class="menu-collapsed">Mutasi Masuk</span>
                    <i class="material-icons" style="font-size:15px;">vertical_align_bottom</i>
                </a>
                <a href="../mutasi/keluar/mutasi_keluar.php" class="list-group-item list-group-item-action bg-dark text-white d-inline-flex justify-content-between">
                    <span class="menu-collapsed">Mutasi Keluar</span>
                    <i class="material-icons" style="font-size:15px;">vertical_align_top</i>
                </a>
            </div>               
           
        </ul>
    </div> <!-- End Sidebar -->
    <div class="col p-0">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">
                        <button type="button" class="btn btn-primary" onClick="window.open('tambah_gudang.php');">
                            <i class="material-icons d-flex align-items-center">add</i>
                        </button> 
                    </th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Kapasitas</th>
                    <th class="col d-flex align-items-center justify-content-end pb-4">Total : <?php echo $gudang_total ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($data = mysqli_fetch_array($gudang_show)) {
                ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $data['lokasi']; ?></td>
                    <td><?php echo $data['kapasitas']; ?></td>
                    <td class="d-flex justify-content-end">
                        <a href="edit_gudang.php?id=<?php echo $data['id']; ?>">
                            <button type="button" class="btn btn-warning mr-2 d-flex align-items-center">
                                <i class="material-icons">edit</i>
                            </button>
                        </a>
                        <a href="../../backend/gudang/delete_gudang.php?id=<?php echo $data['id']; ?>">
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
    </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
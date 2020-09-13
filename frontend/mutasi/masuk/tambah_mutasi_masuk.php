<?php
        session_start();
        if (!isset($_SESSION['username'])){
            header("Location: ../../login.php");
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
    <link rel="stylesheet" type="text/css" href="../../asset/css/style.css">
    </head>
    <body>
    <!-- Start Sidebar -->
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
</nav>


<div class="row" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-dashboard fa-fw mr-3"></span>
                    <span class="menu-collapsed">Gudang</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Daftar Gudang</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Tambah Gudang</span>
                </a>
            </div>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Profile</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Settings</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Password</span>
                </a>
            </div>            
           
        </ul>
    </div> <!-- End Sidebar -->

    <!-- MAIN -->
    <div class="col">
        <div class="container">
        <form mehtod="get" action="../../../backend/mutasi/masuk/tambah_mutasi_masuk.php">
            <div class="row mt-4">
                <div class="col-lg-6 pl-0">
                    <label for="id_barang">Nama Barang</label>
                    <select name="id_barang" class="form-control">
                        <?php
                            require('../../../backend/conn.php');
                            while($data = mysqli_fetch_array($barang)){
                        ?>
                            <option value="<?php echo $data['id']; ?>"><?php echo $data['nama_barang']; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="col-lg-6 pr-0">
                    <label for="gudang">Lokasi Gudang</label>
                    <select name="gudang" id="gudang" class="form-control">
                        <?php while($data = mysqli_fetch_array($gudang_show)){ ?>
                            <option value="<?php echo $data['id']; ?>"><?php echo $data['lokasi']; ?></option>
                            <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 pl-0">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control">
                </div>
                <div class="col-lg-6 pr-0">
                    <label for="mutasi_masuk">Mutasi Masuk</label>
                    <input type="number" name="mutasi_masuk" id="mutasi_masuk" class="form-control">
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-primary">
                    <i class="material-icons">send</i>
                </button>
            </div>
        </form>
    </div>

    </div>
</div>
    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
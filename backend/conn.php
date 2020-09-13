<?php

    $server = "localhost";
    $user = "root";
    $pass = '';
    $db = 'crud';

    $conn = mysqli_connect($server, $user, $pass, $db);

    $show = "SELECT * FROM gudang";
    $gudang_show = mysqli_query($conn, $show);

    $total = "SELECT SUM(kapasitas) FROM gudang";
    $gudang_total = mysqli_query($conn, $total);
    $gudang_total = mysqli_fetch_row($gudang_total);
    $gudang_total = $gudang_total[0];


    $barang_show = "SELECT * FROM barang";
    $barang = mysqli_query($conn, $barang_show);

    $mutasi_masuk_show = "SELECT *, mutasi_masuk.id AS toto FROM mutasi_masuk, gudang, barang WHERE mutasi_masuk.id_barang = barang.id AND mutasi_masuk.gudang = gudang.id";
    $mutasi_masuk = mysqli_query($conn, $mutasi_masuk_show);

    $mutasi_keluar_show = "SELECT *, mutasi_keluar.id AS toto FROM mutasi_keluar, gudang, barang WHERE mutasi_keluar.id_barang = barang.id AND mutasi_keluar.id_gudang = gudang.id";
    $mutasi_keluar = mysqli_query($conn, $mutasi_keluar_show);

    $keluar = "SELECT SUM(mutasi) FROM mutasi_keluar";
    $mutasi_keluar_total = mysqli_query($conn, $keluar);
    $mutasi_keluar_total = mysqli_fetch_row($mutasi_keluar_total);
    $mutasi_keluar_total = $mutasi_keluar_total[0];

    $masuk = "SELECT SUM(mutasi) FROM mutasi_masuk";
    $mutasi_masuk_total = mysqli_query($conn, $masuk);
    $mutasi_masuk_total = mysqli_fetch_row($mutasi_masuk_total);
    $mutasi_masuk_total = ($mutasi_masuk_total[0] - $mutasi_keluar_total[0]);
?>
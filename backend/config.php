<?php

    require('conn.php');

    session_start();

    $username = $_GET['username'];
    $password = $_GET['pass'];
    $sql = "SELECT * FROM user WHERE username='$username' AND pass='$password'";
    $query = mysqli_query($conn, $sql);

    if($query){
        session_start();
        $_SESSION['username'] = $username;
        header('location:../frontend/gudang/gudang.php');
    }
    else
    {
        header("location:../frontend/login.php");
    }

?>
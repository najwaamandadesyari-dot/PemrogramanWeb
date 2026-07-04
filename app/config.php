<?php

   //deklarasi variabel mysql
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "kampusku";


    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


    if ($connection) {
        echo '<script>alert("Koneksi dengan database Berhasil");</script>';
    } else {
        echo '<script>alert("Koneksi dengan database Gagal : ' . mysqli_connect_error() . '");</script>';
    }
?>
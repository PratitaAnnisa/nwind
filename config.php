<?php   
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "nwind";
    
    $konek = mysqli_connect($host, $user, $pass, $db);
    if (!$konek) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
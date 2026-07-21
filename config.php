<?php   
    // Koneksi ke database
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "nwind";
    
    // Membuat koneksi ke database
    $konek = mysqli_connect($host, $user, $pass, $db);

    // Mengecek koneksi
    if (!$konek) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
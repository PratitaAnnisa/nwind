<?php 
// 1. Wajib mengaktifkan session untuk memeriksa status
session_start();

// 2. Cek apakah variabel session 'username' sudah ada atau belum
if(empty($_SESSION['username'])){
    // JIKA KOSONG: Pengguna belum login, alihkan kembali ke halaman form login
    header("location:login.php?pesan=belum_login");
    exit(); // Menghentikan eksekusi script selanjutnya
}
?>
<html>
<head>
    <title> Daftar Order </title>
</head>
<body>
    <center> Home </center>
    <a href="index.php"> Home </a> |
    <a href="produk.php"> Kategori Produk </a> |
    <!-- <a href="supplier.php"> Supplier Produk </a> | -->
    <a href="cust.php"> Daftar Customers </a> |
    <a href="edit_profil.php"> Edit Profil </a> |
    <a href="logout.php">LOGOUT</a>
    <!-- <a href="detail.php"> Detail Order </a> -->

    <center> SELAMAT DATANG DI TOKO NWIND </center>
</body>
</html>
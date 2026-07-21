<?php 
// 1. Wajib mengaktifkan session terlebih dahulu untuk mendeteksi session yang aktif
session_start();

// 2. Menghapus semua data session yang terdaftar di server
session_destroy();

// 3. Mengalihkan kembali ke halaman login sambil mengirimkan notifikasi sukses logout
header("location:login.php?pesan=logout");
exit();
?>
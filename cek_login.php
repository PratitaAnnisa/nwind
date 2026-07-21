<?php 
// 1. Wajib mengaktifkan session di awal script
session_start();

// 2. Menghubungkan dengan file koneksi database
include 'config.php';

// 3. Menangkap data yang dikirim dari form login
$username = mysqli_real_escape_string($konek, $_POST['username']);
$password = mysqli_real_escape_string($konek, $_POST['password']);

// 4. Menyeleksi data admin dengan username dan password yang sesuai
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$data = mysqli_query($konek, $query);

// 5. Menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    // JIKA COCOK: Buat data session baru
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    
    // Alihkan ke halaman utama/admin[cite: 1]
    header("location:index.php");
} else {
    // JIKA SALAH: Alihkan kembali ke halaman login sambil mengirim pesan gagal[cite: 1]
    header("location:login.php?pesan=gagal");
}
?>
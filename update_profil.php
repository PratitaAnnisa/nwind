<?php 
session_start();
include 'config.php';

// Pastikan user sudah login
if(empty($_SESSION['username'])){
    header("location:login.php?pesan=belum_login");
    exit();
}

$username_lama = $_SESSION['username'];
$username_baru = mysqli_real_escape_string($konek, $_POST['username']);
$password_baru = mysqli_real_escape_string($konek, $_POST['password']);

// Jika field password dikosongkan, hanya update username
if(empty($password_baru)){
    $query = "UPDATE users SET username='$username_baru' 
              WHERE username='$username_lama'";
} else {
    // Jika password diisi, update username dan password sekaligus
    $query = "UPDATE users SET username='$username_baru', password='$password_baru' 
              WHERE username='$username_lama'";
}

$hasil = mysqli_query($konek, $query);

if($hasil){
    // Update session dengan username baru, supaya login tidak "putus"
    $_SESSION['username'] = $username_baru;
    header("location:edit_profil.php?pesan=sukses");
} else {
    echo "Update gagal: " . mysqli_error($konek);
}
?>
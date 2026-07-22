<?php 
session_start();
include 'config.php';

// Cek apakah user sudah login
if(empty($_SESSION['username'])){
    header("location:login.php?pesan=belum_login");
    exit();
}

// Ambil data user yang sedang login dari database
$username_lama = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username='$username_lama'";
$data  = mysqli_query($konek, $query);
$user  = mysqli_fetch_array($data);
?>
<html>
<head>
    <title> Edit Profil </title>
</head>
<body>
    <center> Edit Username & Password </center>
    <a href="index.php"> Home </a> |
    <a href="produk.php"> Kategori Produk </a> |
    <a href="cust.php"> Daftar Customers </a> |
    <a href="edit_profil.php"> Edit Profil </a> |
    <a href="logout.php">LOGOUT</a>
    <br><br>

    <?php
    if(isset($_GET['pesan']) && $_GET['pesan'] == "sukses"){
        echo "<p style='color:green;'>Profil berhasil diperbarui!</p>";
    }
    ?>

    <form method="POST" action="update_profil.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" 
                     value="<?php echo $user['username']; ?>" required></td>
            </tr>
            <tr>
                <td>Password Baru</td>
                <td>:</td>
                <td><input type="password" name="password" 
                     placeholder="Kosongkan jika tidak ingin ganti password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>
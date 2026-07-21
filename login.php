<!DOCTYPE html>
<html>
<head>
    <title>Membuat Login Dengan PHP dan MySQLi</title>
</head>
<body>
    <h2>Login</h2>
    <br>
    
    <!-- Cek pesan notifikasi dari URL -->
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "<p style='color:red;'>Login gagal! Username dan password salah!</p>";
        } else if($_GET['pesan'] == "belum_login"){
            echo "<p style='color:orange;'>Anda harus login untuk mengakses halaman admin.</p>";
        } else if($_GET['pesan'] == "logout"){
            echo "<p style='color:green;'>Anda telah berhasil logout.</p>";
        }
    }
    ?>

    <br>
    <!-- Form mengirim data ke cek_login.php menggunakan method POST -->
    <form method="POST" action="cek_login.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukkan username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Masukkan password" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>
</body>
</html>
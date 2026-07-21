<?php
    include 'config.php';
?>

<html>
<head>
    <title> Daftar Order </title>
</head>
<body>
    <center> Daftar Customers </center>
    <a href="index.php"> Home </a> |
    <a href="produk.php"> Kategori Produk </a> |
    <!-- <a href="supplier.php"> Supplier Produk </a> | -->
    <a href="cust.php"> Daftar Customers </a> |
    <!-- <a href="detail.php"> Detail Order </a> -->
    <a href="logout.php">LOGOUT</a>


<table border=1>
    <tr>
        <td> Nama Pemesan </td>
        <td> Tanggal Pemesanan </td>
        <td> Tanggal Pengiriman </td>
        <td> Via </td>
        <td> Alamat </td>
    </tr>
    <?php
    $query = mysqli_query($konek, "SELECT * FROM customers");
    while ($data = mysqli_fetch_array($query)) { ?>
        <tr>
            <td> <?php echo $data['CustomerID']; ?> </td>
            <td> <?php echo $data['ContactName']; ?> </td>
            <td> <?php echo $data['Address']; ?> </td>
            <td> <?php echo $data['City']; ?> </td>
            <td> <?php echo $data['Country']; ?> </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
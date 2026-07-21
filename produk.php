<?php
    include 'config.php';
?>

<html>
<head>
    <title> Kategori Produk </title>
</head>
<body>
    <center> Kategori Produk </center>
    <a href="index.php"> Home </a> |
    <a href="produk.php"> Kategori Produk </a> |
    <!-- <a href="supplier.php"> Supplier Produk </a> | -->
    <a href="cust.php"> Daftar Customers </a> |
    <a href="logout.php">LOGOUT</a>
    <!-- <a href="detail.php"> Detail Order </a> -->
<table border=1>
    <tr>
        <td> ID Product </td>
        <td> Nama Product </td>
        <td> Kategori </td>
    </tr>
    <?php
    $query = mysqli_query($konek, "SELECT * FROM products");
    while ($data = mysqli_fetch_array($query)) { ?>
        <tr>
            <td> <?php echo $data['ProductID']; ?> </td>
            <td> <?php echo $data['ProductName']; ?> </td>
            <td> <?php echo $data['CategoryID']; ?> </td>
            <td> <?php echo $data['SupplierID']; ?> </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
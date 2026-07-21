<?php
    include 'config.php';
?>

<html>
<head>
    <title> Daftar Order </title>
</head>
<body>
    <center> Daftar Order </center>
    <a href="index.html"> Home </a> |
    <a href="produk.php"> Kategori Produk </a> |
    <a href="supplier.php"> Supplier Produk </a> |
    <a href="order.php"> Daftar Order </a> |
    <a href="detail.php"> Detail Order </a>
<table border=1>
    <tr>
        <td> Nama Pemesan </td>
        <td> Tanggal Pemesanan </td>
        <td> Tanggal Pengiriman </td>
        <td> Via </td>
        <td> Alamat </td>
    </tr>
    <?php
    $query = mysqli_query($konek, "SELECT CompanyName, OrderDate, 
    ShippedDate, ShipName, ShipCountry FROM customers INNER JOIN orders ON 
    customers.CustomerID=orders.CustomerID");
    while ($data = mysqli_fetch_array($query)) { ?>
        <tr>
            <td> <?php echo $data['CompanyName']; ?> </td>
            <td> <?php echo $data['OrderDate']; ?> </td>
            <td> <?php echo $data['ShippedDate']; ?> </td>
            <td> <?php echo $data['ShipName']; ?> </td>
            <td> <?php echo $data['ShipCountry']; ?> </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
<?php
    include 'config.php';
?>

<html>
<head>
    <title> Supplier Produk </title>
</head>
<body>
    <center> Supplier Produk </center>
    <a href="index.html"> Home </a> |
    <a href="produk.php"> Kategori Produk </a> |
    <a href="supplier.php"> Supplier Produk </a> |
    <a href="order.php"> Daftar Order </a> |
    <a href="detail.php"> Detail Order </a>
<table border=1>
    <tr>
        <td> Nama Product </td>
        <td> Company </td>
        <td> Nama Kontak </td>
        <td> Alamat </td>
        <td> Kode Pos </td>
        <td> Telp </td>
    </tr>
    <?php
    $query = mysqli_query($konek, "SELECT productName, CompanyName, 
    ContactName, Address, PostalCode, Phone FROM suppliers INNER JOIN products 
    ON suppliers.SupplierID=products.SupplierID");
    while ($data = mysqli_fetch_array($query)) { ?>
        <tr>
            <td> <?php echo $data['productName']; ?> </td>
            <td> <?php echo $data['CompanyName']; ?> </td>
            <td> <?php echo $data['ContactName']; ?> </td>
            <td> <?php echo $data['Address']; ?> </td>
            <td> <?php echo $data['PostalCode']; ?> </td>
            <td> <?php echo $data['Phone']; ?> </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
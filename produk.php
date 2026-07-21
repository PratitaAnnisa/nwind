<?php
    include 'config.php';
?>

<html>
<head>
    <title> Kategori Produk </title>
</head>
<body>
    <center> Kategori Produk </center>
    <a href="index.html"> Home </a> |
    <a href="produk.php"> Kategori Produk </a> |
    <a href="supplier.php"> Supplier Produk </a> |
    <a href="order.php"> Daftar Order </a> |
    <a href="detail.php"> Detail Order </a>
<table border=1>
    <tr>
        <td> ID Product </td>
        <td> Nama Product </td>
        <td> Kategori </td>
    </tr>
    <?php
    $query = mysqli_query($konek, "SELECT productID, productName, 
    CategoryName FROM categories INNER JOIN products ON 
    categories.CategoryID=products.CategoryID");
    while ($data = mysqli_fetch_array($query)) { ?>
        <tr>
            <td> <?php echo $data['productID']; ?> </td>
            <td> <?php echo $data['productName']; ?> </td>
            <td> <?php echo $data['CategoryName']; ?> </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
<?php
    include 'config.php';
?>

<html>
<head>
    <title> Detail Order </title>
</head>
<body>
    <center> Detail Order </center>
    <a href="index.html"> Home </a> |
    <a href="produk.php"> Kategori Produk </a> |
    <a href="supplier.php"> Supplier Produk </a> |
    <a href="order.php"> Daftar Order </a> |
    <a href="detail.php"> Detail Order </a>
<table border=1>
    <tr>
        <td> Nama Pemesan </td>
        <td> Nama Produk </td>
        <td> Harga Produk </td>
        <td> Jumlah </td>
        <td> Nama Pegawai </td>
    </tr>
    <?php
    $query = mysqli_query($konek, "SELECT customers.CompanyName, 
    products.productName, orderdetails.UnitPrice, orderdetails.Quantity, 
    employees.FirstName, employees.LastName
    FROM orders 
    INNER JOIN customers ON orders.CustomerID=customers.CustomerID
    INNER JOIN orderdetails ON orders.OrderID=orderdetails.OrderID
    INNER JOIN products ON orderdetails.ProductID=products.ProductID
    INNER JOIN employees ON orders.EmployeeID=employees.EmployeeID");
    while ($data = mysqli_fetch_array($query)) { ?>
        <tr>
            <td> <?php echo $data['CompanyName']; ?> </td>
            <td> <?php echo $data['productName']; ?> </td>
            <td> <?php echo $data['UnitPrice']; ?> </td>
            <td> <?php echo $data['Quantity']; ?> </td>
            <td> <?php echo $data['FirstName']." ".$data['LastName']; ?> </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
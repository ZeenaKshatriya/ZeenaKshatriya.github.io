<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "gamevengers";

$conn = mysqli_connect($server,$username,$password,$dbname);

$sql = "SELECT * FROM orders";

$run = mysqli_query($conn,$sql) OR die(mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="logedin.css">
</head>
<body>
    <section>
<h1>Welcome Admin! Here are the Orders</h1>
<table>
    <tr>
        <th>Order Number</th>
        <th>Customer Name</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>ZIP</th>
        <th>Product Name</th>
    </tr>
    <div class="notification"> <span class="badge">New</span> </div>
    <?php
    while($rows=$run->fetch_assoc())
    {
        ?>
        <tr>
            <td><?php echo $rows['orderno'];?></td>
            <td><?php echo $rows['Name'];?></td>
            <td><?php echo $rows['Address'];?></td>
            <td><?php echo $rows['City'];?></td>
            <td><?php echo $rows['State'];?></td>
            <td><?php echo $rows['ZIP'];?></td>
            <td><?php echo $rows['ProductName'];?></td>
        </tr>
        <?php
    }
    ?>
    </table>
</section>
</body>
</html>
  

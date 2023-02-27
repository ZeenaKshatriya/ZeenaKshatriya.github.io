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

<html>
<head>
	<title>Welcome Admin!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <div class="form sign-in">
    <div class="gb"> 
      <button onclick="history.back()">Go Back to Admin Login</button>
    </div>
      <h2>Customer Orders</h2>

      <!--Edit start-->
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
      <!--edit end-->
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>Check Stocks</h2>
          <p>Click here to Check Gamevengers Stocks</p>
        </div>
        <div class="img-text m-in">
          <h2>Check New Orders</h2>
          <p>Click Here to check new Orders</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Stock</span>
          <span class="m-in">Orders</span>
        </div>
      </div>
      
      <div class="form sign-up">
        <h2>Stock</h2>
        <!--check here-->
 
        <table id="stocktable">

            <tr>
                <th>Company</th>
                <th>Controllers</th>
                <th>In Stock</th>
                <th>Consoles</th>
                <th>In Stock</th>
                <th>Games</th>
                <th>In Stock</th>
            </tr>
            <tr>
               <td> PlayStation3</td>
                <td>04</td>
                <td>35</td>
                <td>04</td>
                <td>20</td>
                <td>03</th>
                <td>10</td>
            </tr>
            <tr>
               <td> PlayStation4</td>
                <td>05</td>
                <td>45</td>
                <td>05</td>
                <td>40</td>
                <td>06</th>
                <td>50</td>
            </tr>
            <tr>
               <td>Xbox One</td>
                <td>02</td>
                <td>15</td>
                <td>05</td>
                <td>40</td>
                <td>06</th>
                <td>50</td>
            </tr>
            <tr>
               <td>Xbox 360</td>
                <td>04</td>
                <td>25</td>
                <td>04</td>
                <td>20</td>
                <td>05</th>
                <td>32</td>
            </tr>
            <tr>
        
          </table>       <!--check Here-->
      </div>
      
    </div>
  </div>

<script type="text/javascript" src="script.js"></script>
</body>
</html>
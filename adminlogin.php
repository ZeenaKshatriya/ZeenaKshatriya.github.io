<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "gamevengers";

$conn = mysqli_connect($server,$username,$password,$dbname);

$adminname = $_POST['adminname'];
$adminpass = $_POST['adminpass'];


$sql = "SELECT * FROM adminlogin WHERE adminname = '$adminname' AND adminpass = '$adminpass'";

$run = mysqli_query($conn,$sql) OR die(mysqli_error($conn));
$row = mysqli_fetch_array($run);

if($row['adminname'] == $adminname && $row['adminpass'] == $adminpass) 
{
   //echo "<script>alert('Welcome '.$adminname.' ! ')</script>";
    echo " <script>
    alert('welcome')
    </script>";
    echo "<script>location.replace('newlogedin.php')</script>";
}
else 
{
    echo "<script>alert('check your credentials')</script>";
    echo "<script>location.replace('adminlogin.html')</script>";

}




?>
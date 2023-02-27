 <?php
$server="localhost";
$username="root";
$password="";
$dbname="gamevengers";

$conn=mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['submit']))
{
    if(!empty($_POST['Name']))
    { 
        $Name = $_POST['Name'];
        $Address = $_POST['Address'];
        $City = $_POST['City'];
        $State = $_POST['State'];
        $ZIP = $_POST['ZIP'];
        $ProductName = $_POST['ProductName'];

        $query = "INSERT into orders(Name, Address, City, State, ZIP, ProductName) values('$Name','$Address','$City','$State','$ZIP','$ProductName')" ;
        $run = mysqli_query($conn,$query) OR die(mysqli_error($conn));

        if($run)
        {
            //echo"Form submitted!";
            echo "<script>location.replace('thankyou.html')</script>";
        }
        else
        {
            echo"Form not submitted";
        }
    }
    else{
        echo"all fields are required!";
        } 
}
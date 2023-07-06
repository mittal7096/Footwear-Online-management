<?php


$id = $_GET['id'];
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"project");

$query = "DELETE FROM cart WHERE cartidai = '$id'";

if(mysqli_query($con,$query)==true)
{
    header("location:cart.php");
}

?>

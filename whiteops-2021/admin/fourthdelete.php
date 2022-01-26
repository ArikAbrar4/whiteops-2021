<?php 
include('../connection.php');

$time=$_GET['time'];

$sql=mysqli_query($con,"select * from fourthyearcourse where time='$time' ");
$res=mysqli_fetch_assoc($sql);

if(mysqli_query($con,"delete from fourthyearcourse where time='$time' "))
{
header('location:fourthyear.php?option=first');	
}
?>
<?php 
include('../connection.php');

$time=$_GET['time'];

$sql=mysqli_query($con,"select * from firstyearcourse where time='$time' ");
$res=mysqli_fetch_assoc($sql);

if(mysqli_query($con,"delete from firstyearcourse where time='$time' "))
{
header('location:firstyear.php?option=first');	
}
?>
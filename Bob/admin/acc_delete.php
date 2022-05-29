<?php  
if(!isset($_GET['update']))  
{
	echo "<script>window.open('acc_users.php','_self')</script>";
}

$dbcon=mysqli_connect("localhost","root","");  
mysqli_select_db($dbcon,"bank");

$delete_id=$_GET['del'];  
$delete_query="delete from members WHERE accno='$delete_id'";
$run=mysqli_query($dbcon,$delete_query);  
if($run)  
{ 
	echo "<script>alert('Account Deleted')</script>";  
    echo "<script>window.open('acc_users.php?deleted=user has been deleted','_self')</script>";  
}  
  
?> 
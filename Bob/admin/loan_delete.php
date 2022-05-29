<?php  
if(!isset($_GET['update']))  
{
	echo "<script>window.open('loan_users.php','_self')</script>";
}

$dbcon=mysqli_connect("localhost","root","");  
mysqli_select_db($dbcon,"bank");

$delete_id=$_GET['del'];
$delete_query="delete from loan WHERE accno='$delete_id'";
$run=mysqli_query($dbcon,$delete_query);  
if($run)  
{
	echo "<script>alert('Account Deleted')</script>";  
    echo "<script>window.open('loan_users.php?deleted=user has been deleted','_self')</script>";  
}  
  
?> 

<?php	
$dbcon=mysqli_connect("localhost","root","");  
mysqli_select_db($dbcon,"bank");

$update_id=$_POST['id'];

if(isset($_POST['update']))  
{  
$firstname1 = $_POST['firstname'];
$middlename1 = $_POST['middlename'];
$lastname1 = $_POST['lastname'];
$email1 = $_POST['email'];
$aadhar1 = $_POST['aadhar'];
$father1 = $_POST['father'];
$address1 = $_POST['address'];
$pin1 = $_POST['pin'];
$city1 = $_POST['city'];
$state1 = $_POST['state'];
$income1 = $_POST['income'];
$education1 = $_POST['education'];
$occupation1 = $_POST['occupation'];

	$sqli = "UPDATE loan set firstname='$firstname1', middlename='$middlename1', lastname='$lastname1', email='$email1', aadhar='$aadhar1', father='$father1', address='$address1',pin='$pin1', city='$city1', state='$state1', income='$income1', education='$education1', occupation='$occupation1' where accno='$update_id';";

    if(mysqli_query($dbcon,$sqli))  
    {      
		echo '<script>alert("Details Updated!")</script>';
		echo"<script>window.open('loan_users.php','_self')</script>";
	}
	else 
	{
		echo '<script>alert("Error!")</script>';
	}
	
}
if(isset($_POST['cancel']))
{
	echo"<script>window.open('loan_users.php','_self')</script>";
}

?>
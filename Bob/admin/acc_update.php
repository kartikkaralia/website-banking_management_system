<?php  
session_start();  
  
if(!$_SESSION['adminname'])  
{  
	echo "<script>window.open('../admin.php','_self')</script>";
}  

if(!$_GET['update'])
{
	echo "<script>window.open('acc_users.php','_self')</script>";
}

?> 

<!DOCTYPE HTML>

<html>
<head>
	<title>Welcome Back</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="../css/style.css" rel='stylesheet' type='text/css' />
	<link href="../css/fontawesome-all.min.css" rel="stylesheet">
	<link href="../images/icon.png" rel="icon" type="image/png">
</head>

<body>
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<h1>
					<a href="welcome.php">
						<img src="../images/logo.png">
					</a>
				</h1>

				<div class="navbar-collapse">
					<ul class="navbar-nav text-center  ml-lg-auto">
						<li class="nav-item mr-3">
							<a class="nav-link" href="welcome.php">Dashboard</a>
						</li>
						<li class="nav-item mr-3">
							<a class="nav-link" href="logout.php">logout</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>

	<section class="banner-1">
	</section>

	<section class="contact py-5">
		<div class="container py-md-4 mt-md-3">
			<h2 class="heading-agileinfo">Update Details<span>speeding Up The Process</span></h2>
			<span class="w3-line black"></span>
			<div class="pt-5">
				<div class="form_grid mt-5">
				
<?php  
		$dbcon=mysqli_connect("localhost","root","");  
		mysqli_select_db($dbcon,"bank");
		
		$update_id=$_GET['update'];
        $view_users_query="select * from members WHERE accno='$update_id'";
        $run=mysqli_query($dbcon,$view_users_query);
  
        while($row=mysqli_fetch_array($run))
        {  
            $acctype=$row['acctype'];  
            $salutation=$row['salutation'];
			$firstname=$row['firstname'];
			$middlename=$row['middlename'];
			$lastname=$row['lastname'];
			$gender=$row['gender'];
			$email=$row['email'];
			$contact=$row['contact'];
			$dob=$row['dob'];
			$nationality=$row['nationality'];
			$marital=$row['marital'];
			$aadhar=$row['aadhar'];
			$salutation1=$row['salutation1'];
			$father=$row['father'];
			$address=$row['address'];
			$pin=$row['pin'];
			$city=$row['city'];
			$state=$row['state'];
			$income=$row['income'];
			$education=$row['education'];
			$occupation=$row['occupation'];
			$credit=$row['credit'];
			$debit=$row['debit'];
			$net=$row['net'];
			$cheque=$row['cheque']; 
			$balance=$row['balance'];
			$rdperiod=$row['rdperiod'];
			$fdperiod=$row['fdperiod'];
			$installment=$row['installment'];
			$amount=$row['fdamount'];
		}
?>
				
					<form action="acc.php" method="post">
							<input type="text" name="acctype" disabled value="<?php echo $acctype; ?>" class="inp">
							<hr>
							<input type="text" name="salutation" disabled value="<?php echo $salutation; ?>" class="inp">
							<input type="text" name="firstname" required value="<?php echo $firstname; ?>" class="inp">
							<input type="text" name="middlename" value="<?php echo $middlename; ?>" class="inp">							
							<input type="text" name="lastname" required value="<?php echo $lastname; ?>" class="inp"><br>
							<input type="text" name="gender" disabled value="<?php echo $gender; ?>" class="inp">
							<input type="email" name="email" value="<?php echo $email; ?>" class="inp">
							<input type="text" name="contact" disabled value="<?php echo $contact; ?>" class="inp">
							<input type="text" name="dob" disabled value="<?php echo $dob; ?>" class="inp">
							<input type="text" name="nationality" disabled value="<?php echo $nationality; ?>" class="inp">
							<input type="text" name="marital" disabled value="<?php echo $marital; ?>" class="inp">
							<input type="text" name="aadhar" pattern="[0-9]{12}" required value="<?php echo $aadhar; ?>" class="inp">
							<br>
							<input type="text" name="salutation1" disabled value="<?php echo $salutation1; ?>" class="inp">
							<input type="text" required name="father" value="<?php echo $father; ?>" class="inp">
							<hr>
							<textarea name="address" required class="inp" rows="1"><?php echo $address; ?></textarea>
							<br>
							<input type="text" required name="pin" pattern="[0-9]{6}" value="<?php echo $pin; ?>" class="inp">
							<input type="text" required name="city" value="<?php echo $city; ?>" class="inp">
							<input type="text" required name="state" value="<?php echo $state; ?>" class="inp">
							<hr>
							<input type="text" name="income" value="<?php echo $income; ?>" class="inp">
							<input type="text" name="education" value="<?php echo $education; ?>" class="inp">
							<input type="text" name="occupation" value="<?php echo $occupation; ?>" class="inp">
							<hr>
							<input type="text" name="balance" pattern="[0-9].{0,}" value="<?php echo $balance; ?>" class="inp">
							<input type="hidden" name="id" value="<?php echo $update_id; ?>">
							<br><br>							
							<input type="submit" value="Update" name="update">
							<input type="submit" value="Cancel" name="cancel">
							<div class="clearfix"> </div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container py-md-4 mt-md-3">
			<div class="row footer-top-w3layouts-agile py-5">
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p>We provide the best interests along with good bunch of financial assistance which help you keep your pockets fit.</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>Contact Us</h3>
					</div>
					<div class="footer-office-hour">
						<ul>
							<li class="hd">Phone:</li>
							<li>+91 70067 31923</li>
							<li class="hd">Email:
								<a href="mailto:sharmakartik970@gmail.com">sharmakartik970@gmail.com</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<div class="copyright py-3">
		<div class="container">
			<div class="copyrighttop">
				<ul>
					<li>
						<h4>Follow us on:</h4>
					</li>
					<li>
						<a class="facebook" href="https://www.facebook.com/bank.bachelor">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="https://twitter.com/BachelorBank">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="https://www.linkedin.com/in/bank-of-bachelor-1a341117b/">
							<i class="fab fa-linkedin"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="copyrightbottom">
				<p>© 2018 BoB. All Rights Reserved
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</body>
</html>
<?php  
session_start();  
  
if(!$_SESSION['contact'])  
{  
	echo "<script>window.open('../members.php','_self')</script>";
}  
  
?> 

<!DOCTYPE HTML>

<html>
<head>
	<title>Recurring Deposit</title>
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
					<a href="../index.html">
						<img src="../images/logo.png">
					</a>
				</h1>

				<div class="navbar-collapse">
					<ul class="navbar-nav text-center  ml-lg-auto">
						<li class="nav-item mr-3">
							<a class="nav-link" href="../exit.php">Exit</a>
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
			<h2 class="heading-agileinfo">Recurring Deposit<span>speeding Up The Process</span></h2>
			<span class="w3-line black"></span>
			<div class="pt-5">
				<div class="contact_grid_right mt-5">
					<form action="fd.php" method="post">
						<select required name="time" class="inp">
							<option value="">RD Period</option>
							<option value="1">1 year</option>
							<option value="2">2 years</option>
							<option value="5">5 years</option>
							<option value="7">7 years</option>
							<option value="10">10 years</option>
						</select>
						<input type="text" name="installment" required placeholder="Installment per month" class="inp">
						<br><br>
						<input type="submit" value="Submit" name="submit">
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

<?php
  
	$dbcon=mysqli_connect("localhost","root","");  
	mysqli_select_db($dbcon,"bank");
	$contact=$_SESSION['contact'];
	
if(isset($_POST['submit']))  
{  	
	$time=$_POST['time'];
	$installment=$_POST['installment'];

	$sqli = "UPDATE members set rdperiod='$time', installment='$installment' where contact='$contact';";

	if(mysqli_query($dbcon,$sqli))  
	{
		echo "<script>window.open('../accupload.php','_self')</script>";
	}
	else
	{
		echo '<script>alert("Error!")</script>';
	}

}
	
?>

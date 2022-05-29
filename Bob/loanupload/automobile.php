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
	<title>Upload Your Documents</title>
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
			<h2 class="heading-agileinfo">Upload required documents<span>speeding Up The Process</span></h2>
			<span class="w3-line black"></span>
			<div class="pt-5">
				<div class="form_grid mt-5">
					<form action="automobile.php" method="post" enctype="multipart/form-data">
						<h6>Passport Photo:</h6>
						<input type="file" name="photo" required class="inp" accept="image/jpeg">
						<h6>Signature:</h6>
						<input type="file" name="sign" required class="inp" accept="image/jpeg">
						<h6>Aadhar Card:</h6>
						<input type="file" name="aadhar-pic" required class="inp" accept="application/pdf">
						<h6>PAN Card:</h6>
						<input type="file" name="pan" required class="inp" accept="application/pdf">
						<h6>IT Returns:</h6>
						<input type="file" name="itr" required class="inp" accept="application/pdf">
						<p class="text-danger">*File size must not be greater than 2MB <br> *Photo and Signature must be in JPEG format
						<br>*All other documents must be in PDF format</p>						
						<input type="submit" value="Submit" name="submit">
						<input type="reset" value="Clear">
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
	
$photo_name = $_FILES['photo']['name'];
$photo_size = $_FILES['photo']['size'];
$photo_type = $_FILES['photo']['type'];
$photo_tmp_name = $_FILES['photo']['tmp_name'];
$photo_fp = fopen($photo_tmp_name, 'r');
$photo_content = fread($photo_fp, filesize($photo_tmp_name));
$photo_content = addslashes($photo_content);

$sign_name = $_FILES['sign']['name'];
$sign_size = $_FILES['sign']['size'];
$sign_type = $_FILES['sign']['type'];
$sign_tmp_name = $_FILES['sign']['tmp_name'];
$sign_fp = fopen($sign_tmp_name, 'r');
$sign_content = fread($sign_fp, filesize($sign_tmp_name));
$sign_content = addslashes($sign_content);

$aadhar_name = $_FILES['aadhar-pic']['name'];
$aadhar_size = $_FILES['aadhar-pic']['size'];
$aadhar_type = $_FILES['aadhar-pic']['type'];
$aadhar_tmp_name = $_FILES['aadhar-pic']['tmp_name'];
$aadhar_fp = fopen($aadhar_tmp_name, 'r');
$aadhar_content = fread($aadhar_fp, filesize($aadhar_tmp_name));
$aadhar_content = addslashes($aadhar_content);

$pan_name = $_FILES['pan']['name'];
$pan_size = $_FILES['pan']['size'];
$pan_type = $_FILES['pan']['type'];
$pan_tmp_name = $_FILES['pan']['tmp_name'];
$pan_fp = fopen($pan_tmp_name, 'r');
$pan_content = fread($pan_fp, filesize($pan_tmp_name));
$pan_content = addslashes($pan_content);

$itr_name = $_FILES['itr']['name'];
$itr_size = $_FILES['itr']['size'];
$itr_type = $_FILES['itr']['type'];
$itr_tmp_name = $_FILES['itr']['tmp_name'];
$itr_fp = fopen($itr_tmp_name, 'r');
$itr_content = fread($itr_fp, filesize($itr_tmp_name));
$itr_content = addslashes($itr_content);

$max_size = 2000000;
$pdf = "application/pdf";
$img = "image/jpeg";

if($photo_size > $max_size)
{
	echo '<script>alert("Photo Size must not exceed 2MB!")</script>';
	exit();
}
if($sign_size > $max_size)
{
	echo '<script>alert("Signature Size must not exceed 2MB!")</script>';
	exit();
}
if($aadhar_size > $max_size)
{
	echo '<script>alert("Aadhar Size must not exceed 2MB!")</script>';
	exit();
}
if($pan_size > $max_size)
{
	echo '<script>alert("PAN Size must not exceed 2MB!")</script>';
	exit();
}
if($itr_size > $max_size)
{
	echo '<script>alert("ITR Size must not exceed 2MB!")</script>';
	exit();
}


if($photo_type != $img)
{
	echo '<script>alert("Photo must be in JPEG format!")</script>';
	exit();
}
if($sign_type != $img)
{
	echo '<script>alert("Signature must be in JPEG format!")</script>';
	exit();
}
if($aadhar_type != $pdf)
{
	echo '<script>alert("Aadhar must be in PDF format!")</script>';
	exit();
}
if($pan_type != $pdf)
{
	echo '<script>alert("PAN must be in PDF format!")</script>';
	exit();
}
if($itr_type != $pdf)
{
	echo '<script>alert("ITR must be in PDF format!")</script>';
	exit();
}



	$sqli = "UPDATE loan set photo_n='$photo_name', photo_c='$photo_content', sign_n='$sign_name', sign_c='$sign_content', aadhar_n='$aadhar_name', aadhar_c='$aadhar_content', pan_n='$pan_name', pan_c='$pan_content', itr_n='$itr_name', itr_c='$itr_content' where contact='$contact';";
	
    if(mysqli_query($dbcon,$sqli))  
    {  
    
		echo '<script>alert("Documents Uploaded!")</script>';
		echo "<script>window.open('../final.php','_self')</script>";
	}
	else
	{
		echo '<script>alert("Error!")</script>';
	}

}

	
?>

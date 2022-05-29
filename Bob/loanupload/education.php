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
					<form action="education.php" method="post" enctype="multipart/form-data">
						<h6>Passport Photo:</h6>
						<input type="file" name="photo" required class="inp" accept="image/jpeg">
						<h6>Signature:</h6>
						<input type="file" name="sign" required class="inp" accept="image/jpeg">
						<h6>Aadhar Card:</h6>
						<input type="file" name="aadhar-pic" required class="inp" accept="application/pdf">
						<h6>10th Marksheet:</h6>
						<input type="file" name="tenth" required class="inp" accept="application/pdf">
						<h6>12th Marksheet:</h6>
						<input type="file" name="plus2" required class="inp" accept="application/pdf">
						<h6>Graduation Marksheet (if applicable):</h6>
						<input type="file" name="grad" class="inp" accept="application/pdf">
						<h6>Post-Graduation Marksheet (if applicable):</h6>
						<input type="file" name="postgrad" class="inp" accept="application/pdf">
						<h6>Scholarship (if applicable):</h6>
						<input type="file" name="scholarship" class="inp" accept="application/pdf">						
						<h6>Letter of Admission:</h6>
						<input type="file" name="letter" required class="inp" accept="application/pdf">
						<h6>Detailed Fee Structure:</h6>
						<input type="file" name="fee" required class="inp" accept="application/pdf">
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

$tenth_name = $_FILES['tenth']['name'];
$tenth_size = $_FILES['tenth']['size'];
$tenth_type = $_FILES['tenth']['type'];
$tenth_tmp_name = $_FILES['tenth']['tmp_name'];
$tenth_fp = fopen($tenth_tmp_name, 'r');
$tenth_content = fread($tenth_fp, filesize($tenth_tmp_name));
$tenth_content = addslashes($tenth_content);

$plus2_name = $_FILES['plus2']['name'];
$plus2_size = $_FILES['plus2']['size'];
$plus2_type = $_FILES['plus2']['type'];
$plus2_tmp_name = $_FILES['plus2']['tmp_name'];
$plus2_fp = fopen($plus2_tmp_name, 'r');
$plus2_content = fread($plus2_fp, filesize($plus2_tmp_name));
$plus2_content = addslashes($plus2_content);

$grad_name = $_FILES['grad']['name'];
$grad_size = $_FILES['grad']['size'];
$grad_type = $_FILES['grad']['type'];
$grad_tmp_name = $_FILES['grad']['tmp_name'];
$grad_fp = fopen($grad_tmp_name, 'r');
$grad_content = fread($grad_fp, filesize($grad_tmp_name));
$grad_content = addslashes($grad_content);

$postgrad_name = $_FILES['postgrad']['name'];
$postgrad_size = $_FILES['postgrad']['size'];
$postgrad_type = $_FILES['postgrad']['type'];
$postgrad_tmp_name = $_FILES['postgrad']['tmp_name'];
$postgrad_fp = fopen($postgrad_tmp_name, 'r');
$postgrad_content = fread($postgrad_fp, filesize($postgrad_tmp_name));
$postgrad_content = addslashes($postgrad_content);

$scholarship_name = $_FILES['scholarship']['name'];
$scholarship_size = $_FILES['scholarship']['size'];
$scholarship_type = $_FILES['scholarship']['type'];
$scholarship_tmp_name = $_FILES['scholarship']['tmp_name'];
$scholarship_fp = fopen($scholarship_tmp_name, 'r');
$scholarship_content = fread($scholarship_fp, filesize($scholarship_tmp_name));
$scholarship_content = addslashes($scholarship_content);

$letter_name = $_FILES['letter']['name'];
$letter_size = $_FILES['letter']['size'];
$letter_type = $_FILES['letter']['type'];
$letter_tmp_name = $_FILES['letter']['tmp_name'];
$letter_fp = fopen($letter_tmp_name, 'r');
$letter_content = fread($letter_fp, filesize($letter_tmp_name));
$letter_content = addslashes($letter_content);

$fee_name = $_FILES['fee']['name'];
$fee_size = $_FILES['fee']['size'];
$fee_type = $_FILES['fee']['type'];
$fee_tmp_name = $_FILES['fee']['tmp_name'];
$fee_fp = fopen($fee_tmp_name, 'r');
$fee_content = fread($fee_fp, filesize($fee_tmp_name));
$fee_content = addslashes($fee_content);


$max_size = 2000000;
$max_big = 20000000;
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
if($tenth_size > $max_size)
{
	echo '<script>alert("10th Marksheet Size must not exceed 2MB!")</script>';
	exit();
}
if($plus2_size > $max_size)
{
	echo '<script>alert("12th Marksheet Size must not exceed 2MB!")</script>';
	exit();
}
if($grad_size > $max_size)
{
	echo '<script>alert("Graduation Marksheet Size must not exceed 2MB!")</script>';
	exit();
}
if($postgrad_size > $max_size)
{
	echo '<script>alert("Post-Graduation Marksheet Size must not exceed 2MB!")</script>';
	exit();
}
if($scholarship_size > $max_size)
{
	echo '<script>alert("Scholarship Documents Size must not exceed 2MB!")</script>';
	exit();
}
if($letter_size > $max_size)
{
	echo '<script>alert("Letter of Admission Size must not exceed 2MB!")</script>';
	exit();
}
if($fee_size > $max_size)
{
	echo '<script>alert("Fee Structure Size must not exceed 2MB!")</script>';
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
if($tenth_type != $pdf)
{
	echo '<script>alert("10th Marksheet must be in PDF format!")</script>';
	exit();
}
if($plus2_type != $pdf)
{
	echo '<script>alert("12th Marksheet must be in PDF format!")</script>';
	exit();
}
if($grad_type != $pdf)
{
	echo '<script>alert("Graduation Marksheet must be in PDF format!")</script>';
	exit();
}
if($postgrad_type != $pdf)
{
	echo '<script>alert("Post-Graduation Marksheet must be in PDF format!")</script>';
	exit();
}
if($scholarship_type != $pdf)
{
	echo '<script>alert("Scholarship Documents must be in PDF format!")</script>';
	exit();
}
if($letter_type != $pdf)
{
	echo '<script>alert("Letter of Admission must be in PDF format!")</script>';
	exit();
}
if($fee_type != $pdf)
{
	echo '<script>alert("Fee Structure must be in PDF format!")</script>';
	exit();
}




	$sqli = "UPDATE loan set photo_n='$photo_name', photo_c='$photo_content', sign_n='$sign_name', sign_c='$sign_content', aadhar_n='$aadhar_name', aadhar_c='$aadhar_content', tenth_n='$tenth_name', tenth_c='$tenth_content', plus2_n='$plus2_name', plus2_c='$plus2_content', grad_n='$grad_name', grad_c='$grad_content', postgrad_n='$postgrad_name', postgrad_c='$postgrad_content', scholarship_n='$scholarship_name', scholarship_c='$scholarship_content', letter_n='$letter_name', letter_c='$letter_content', fee_n='$fee_name', fee_c='$fee_content' where contact='$contact';";
	
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


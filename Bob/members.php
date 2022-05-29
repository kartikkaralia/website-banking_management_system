<?php  
session_start();

if(isset($_SESSION['accno']))  
{  
	echo "<script>window.open('member/hello.php','_self')</script>";
}  

?> 

<!DOCTYPE HTML>

<html>
<head>
	<title>Members Area</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.min.css" rel="stylesheet">
	<link href="images/icon.png" rel="icon" type="image/png">
</head>

<body>
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<h1>
					<a href="index.html">
						<img src="images/logo.png">
					</a>
				</h1>

				<div class="navbar-collapse">
					<ul class="navbar-nav text-center  ml-lg-auto">
						<li class="nav-item mr-3">
							<a class="nav-link" href="index.html">Home</a>
						</li>
						<li class="nav-item mr-3">
							<a class="nav-link" href="about.html">About</a>
						</li>
						<li class="nav-item mr-3">
							<a class="nav-link" href="services.html">Services</a>
						</li>
						<li class="nav-item mr-3">
							<a class="nav-link" href="contact.php">contact</a>
						</li>
						<li class="nav-item active mr-3">
							<a class="nav-link" href="#">Login</a>
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
			<h2 class="heading-agileinfo">Members<span>speeding Up The Process</span></h2>
			<span class="w3-line black"></span>
			<div class="row mt-md-5 pt-5">				
				<div class="col-sm-6 contact_grid_right">
					<h6>Already a member | Sign in</h6>
					<form action="members.php" method="post">
						<div class="contact_left_grid">
							<input type="text" name="accno" required placeholder="Account No." class="inp">
							<input type="password" name="password" required placeholder="********" class="inp">
							<input type="submit" value="Login" name="login">
							<div class="clearfix"> </div>
						</div>
					</form>
				</div>

				<div class="col-sm-6 contact_grid_right">	
					<h6>Not a member | Register</h6>
					<form action="members.php" method="post"  onsubmit="return checkform(this);">
						<div class="contact_left_grid">
							<input type="text" name="contact" pattern="[0-9]{10}" placeholder="10 digits Phone no." required class="inp">
							<select required name="type" class="inp">
								<option value=""></option>
								<option value="1">Create Account</option>
								<option value="2">Apply For Loan</option>
							</select>
							<input type="password" name="password" pattern=".{6,}" placeholder="Password" required class="inp">
							<div class="capbox">
								<div id="CaptchaDiv"></div>
									<input type="hidden" id="txtCaptcha">
									<input type="text" name="CaptchaInput" placeholder="Type the above number" class="inp"><br>
								</div>
							</div>
							<br>
							<input type="submit" value="Register" name="register">
							<input type="reset" value="Clear">
							<div class="clearfix"> </div>
						</div>
					</form>
					
<script type="text/javascript">

function checkform(theform){
var why = "";

if(theform.CaptchaInput.value == ""){
why += "- Please Enter CAPTCHA Code.\n";
}
if(theform.CaptchaInput.value != ""){
if(ValidCaptcha(theform.CaptchaInput.value) == false){
why += "- The CAPTCHA Code Does Not Match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

function removeSpaces(string){
return string.split(' ').join('');
}
</script>
					
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
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-list">
					<ul>
						<li><a href="about.html">About</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-list">
					<ul>
						<li><a href="admin.php">Admin Login</a></li>
						<li><a href="#">Members Area</a></li>
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
 
  
if(isset($_POST['login']))  
{  
    $accno=$_POST['accno'];  
    $password=$_POST['password'];  

	$loan_user="select * from loan WHERE accno='$accno' AND password='$password'";  
	$acc_user="select * from members WHERE accno='$accno' AND password='$password'";  

    $run_loan=mysqli_query($dbcon,$loan_user);  
	$run_acc=mysqli_query($dbcon,$acc_user);  
  
    if(mysqli_num_rows($run_loan))  
    {		
		$_SESSION['accno']=$accno;
		while($row=mysqli_fetch_array($run_loan))
		{  
			$accno=$row['accno'];
		}
		echo "<script>window.open('member/loan_hello.php','_self')</script>";			
    }
	elseif(mysqli_num_rows($run_acc))  
    {		
		$_SESSION['accno']=$accno;		
		while($row=mysqli_fetch_array($run_acc))
		{  
			$accno=$row['accno'];
		}
		echo "<script>window.open('member/acc_hello.php','_self')</script>";  
    }  
    else  
    {  
      echo "<script>alert('Account No. or password is incorrect!')</script>";  
    }


}

if(isset($_POST['register']))  
{  
	$contact=$_POST['contact'];
    $password=$_POST['password'];
	if ($_POST['type'] == '1') 
	{  
		$check_query="select * from members WHERE contact='$contact'";  
		$run_query=mysqli_query($dbcon,$check_query);  
  
		if(mysqli_num_rows($run_query)>0)  
		{  
			echo "<script>alert('Account already exists!')</script>";  
			exit();  
		}  
		$insert_user="insert into members (contact,password) VALUE ('$contact','$password')";	
		if(mysqli_query($dbcon,$insert_user))  
		{
			$query="select * from members WHERE contact='$contact'";
			$run=mysqli_query($dbcon,$query);
		
			$_SESSION['contact']=$contact;
		
			echo"<script>window.open('accstep.php','_self')</script>"; 
		}
	}
	elseif ($_POST['type'] == '2') 
	{ 
		$check_query="select * from loan WHERE contact='$contact'";  
		$run_query=mysqli_query($dbcon,$check_query);  
  
		if(mysqli_num_rows($run_query)>0)  
		{  
			echo "<script>alert('Account already exists!')</script>";  
			exit();  
		}  
		$insert_user="insert into loan (contact,password) VALUE ('$contact','$password')";	
		if(mysqli_query($dbcon,$insert_user))  
		{
			$query="select * from loan WHERE contact='$contact'";
			$run=mysqli_query($dbcon,$query);
		
			$_SESSION['contact']=$contact;
		
			echo"<script>window.open('loanstep.php','_self')</script>"; 
		}
	}
	
	
	


}  

?>

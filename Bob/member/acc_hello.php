<?php  
session_start();  
  
if(!$_SESSION['accno'])  
{  
	echo "<script>window.open('../members.php','_self')</script>";
}  
  
?> 

<!DOCTYPE HTML>

<html>
<head>
	<title>Welcome user</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="../css/style.css" rel='stylesheet' type='text/css' />
    <link href="../css/member.css" rel='stylesheet' type='text/css' />
	<link href="../css/fontawesome-all.min.css" rel="stylesheet">
	
	<link href="../images/icon.png" rel="icon" type="image/png">
</head>
<body>
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<h1>
					<a href="#">
						<img src="../images/logo.png">
					</a>
				</h1>

				<div class="navbar-collapse">
					<ul class="navbar-nav text-center  ml-lg-auto">
						<li class="nav-item active mr-3">
							<a class="nav-link" href="#">Dashboard</a>
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
<?php  
		$dbcon=mysqli_connect("localhost","root","");  
		mysqli_select_db($dbcon,"bank");
		$accno=$_SESSION['accno'];
        $view_users_query="select * from members WHERE accno='$accno'";
        $run=mysqli_query($dbcon,$view_users_query);  
  
        while($row=mysqli_fetch_array($run))
        {  
            $accno=$row['accno'];
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
			$photo=$row['photo_c'];
  
?>  
			<h2 class="heading-agileinfo">Hi! <?php echo $firstname;  ?><span>speeding Up The Process</span></h2>
			<span class="w3-line black"></span>
			<div class="innerpage">
				<div class="row pt-5">
					<div class="col-sm-12 contact_grid_right">
						<div class="box1 responsive-table">
							<p class="title" >
								<i class="fa fa-user"></i><b>&nbsp;Your Profile</b>
							</p>
							<div class="left">
								<img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($photo).''?>" height="100%" width="100%"/>
							</div>
							<div class="right">
								<table cellpadding="12"align="center" width="100%">		
									<tr>
										<td><b>Account no:</b></td>
										<td><b>:</b></td>
										<td><?php echo $accno;  ?><span class="tab"></span><td></tr>
									<tr>
										<td><b>Name</b></td>
										<td><b>:</b></td>
										<td><?php echo $salutation;  ?>&nbsp;<?php echo $firstname;  ?>&nbsp;<?php echo $middlename;  ?>&nbsp;<?php echo $lastname;  ?><td></tr>
									<tr>
										<td><b>Father/Guardian Name</b></td>
										<td><b>:</b></td>
										<td><?php echo $salutation1; ?>&nbsp;<?php echo $father;  ?><td></tr>
									<tr>
										<td><b>Account Type</b> </td>
										<td><b>:</b></td>								
										<td><?php echo $acctype;  ?><td></tr>
									<tr>
										<td><b>Gender</b></td>
										<td><b>:</b></td>
										<td><?php echo $gender;  ?><td></tr>
									<tr>							
										<td><b>DOB</b></td>
										<td><b>:</b></td>
										<td><?php echo $dob;  ?><td></tr>
								</table>
<?php } ?>  
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="box1">
					<p class="title">
						<i class="fa fa-address-card"></i>
						<b>&nbsp; Detail</b>
					</p>
                    <table cellpadding="12" align="center" width="70%">
						<tr>					
						<td><b> Aadhar No.</b></td>
						<td><b>:</b></td>
						<td><?php echo $aadhar;  ?></td> </tr>
		                <td><b>Nationality</b></td>
						<td><b>:</b></td>
						<td><?php echo $nationality;  ?></td> </tr>
						<td><b>Marital Status</b></td>
						<td><b>:</b></td>
						<td><?php echo $marital;  ?></td> </tr>
						<td><b>Income</b></td>
						<td><b>:</b></td>
						<td><?php echo $income;  ?></td> </tr>
						<td><b>Qualification</b></td>
						<td><b>:</b></td>
						<td><?php echo $education;  ?></td> </tr>
						<td><b>Occupation</b></td>
						<td><b>:</b></td>
						<td><?php echo $occupation;  ?></td> </tr>
					</table>
				</div>
			</div>
			<div class="content">
				<div class="box">
					<p class="title">	
						<i class="fa fa-rupee-sign"></i>
						<b>&nbsp; Balance Details</b>
					</p>
					<table cellpadding="12" align="center" width="70%">
				        <tr>   								
						<td><b>Balance</b></td>
						<td><b>:</b></td>
						<td><?php echo $balance;  ?></td> </tr>		
		                <td><b>RD Period</b></td>
						<td><b>:</b></td>
						<td><?php echo $rdperiod;  ?></td> </tr>								
						<td><b>FD Period</b></td>
						<td><b>:</b></td>
						<td><?php echo $fdperiod;  ?></td> </tr>						
						<td><b>Installment Per Month</b></td>
						<td><b>:</b></td>
						<td><?php echo $installment;  ?></td> </tr>
						<td><b>FD Amount</b></td>
						<td><b>:</b></td>
						<td><?php echo $amount;  ?></td> </tr>
					</table>			               
				</div>
			</div>
			<div class="content">
				<div class="box">
					<p class="title">  
						<i class="fa fa-tty"></i>
						<b> &nbsp;  Contact</b>
					</p>
					<table  cellpadding="12" align="center" width="70%">
						<tr>						   								
						<td><b><i class="fa fa-phone"></i></b>
                        <b>Phone number: </b></td>
						<td><b>:</b></td>
				        <td><?php echo $contact;  ?></td></tr>
                        <td><b> <i  class="fa fa-envelope"></i>
                        Email:</b></td>
						<td><b>:</b></td>
						<td><?php echo $email;  ?></td></tr>
                        <td><b> <i class="fa fa-home"></i></b>
                        <b>Address:</b></td>
				        <td><b>:</b></td>
				        <td><?php echo $address;  ?>,&nbsp;<?php echo $city;  ?>,&nbsp;<br><?php echo $state;  ?>,&nbsp;<?php echo $pin;  ?></td></tr>			               
					</table>
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
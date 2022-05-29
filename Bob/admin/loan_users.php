<?php  
session_start();  
  
if(!$_SESSION['adminname'])  
{
	echo "<script>window.open('../admin.php','_self')</script>";
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
	<link href="../css/admin.css" rel='stylesheet' type='text/css' />
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
			<h2 class="heading-agileinfo">List of Loan Borrowers<span>speeding Up The Process</span></h2>
			<span class="w3-line black"></span>
			<div class="row pt-5">
				<div class="col-sm-12 contact_grid_right">
					<div class="table-scrol"><br>
						<div class="table-responsive">
							<div class="table-box">
							<table cellpadding="20">  
							<thead>    
							<tr> 
                                <th>Sr. No.</th>							
								<th>Account no</th>  
								<th>Loan Type</th>  
								<th>Salutation</th>   
								<th>First Name</th>
								<th>Middle Name</th>
								<th>Last Name</th>
								<th>Gender</th>
								<th>Email</th>
								<th>Contact</th>
								<th>DOB</th>
								<th>Nationality</th>
								<th>Marital Status</th>
								<th>Aadhar No.</th>
								<th>Tax Identification No.</th>
								<th>Salutation</th>
								<th>Father/Guardian Name</th>
								<th>Address</th>
								<th>Pin</th>
								<th>City</th>
								<th>State</th>
								<th>Income</th>
								<th>Qualification</th>
								<th>Occupation</th>
								<th>Amount Required</th>
								<th>Repay time (in yrs)</th>
								<th>Update Details</th>
								<th>Delete User</th>
							</tr>  
							</thead>  
<?php  
		$dbcon=mysqli_connect("localhost","root","");  
		mysqli_select_db($dbcon,"bank");
 
        $view_users_query="select * from loan";
        $run=mysqli_query($dbcon,$view_users_query);
  
        while($row=mysqli_fetch_array($run))
        {   
            $accno=$row['accno'];
            $loantype=$row['loantype'];  
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
			$tin=$row['tin'];
			$salutation1=$row['salutation1'];
			$father=$row['father'];
			$address=$row['address'];
			$pin=$row['pin'];
			$city=$row['city'];
			$state=$row['state'];
			$income=$row['income'];
			$education=$row['education'];
			$occupation=$row['occupation'];
			$amount=$row['amount'];
			$repay=$row['repay'];
?>  
  
							<tr>  
                                 <td></td>							
								<td><?php echo $accno;  ?></td>  
								<td><?php echo $loantype;  ?></td>  
								<td><?php echo $salutation;  ?></td> 
								<td><?php echo $firstname;  ?></td>
								<td><?php echo $middlename;  ?></td>
								<td><?php echo $lastname;  ?></td>
								<td><?php echo $gender;  ?></td>
								<td><?php echo $email;  ?></td>
								<td><?php echo $contact;  ?></td>
								<td><?php echo $dob;  ?></td>
								<td><?php echo $nationality;  ?></td>
								<td><?php echo $marital;  ?></td>
								<td><?php echo $aadhar;  ?></td>
								<td><?php echo $tin;  ?></td>
								<td><?php echo $salutation1;  ?></td>
								<td><?php echo $father;  ?></td>
								<td><?php echo $address;  ?></td>
								<td><?php echo $pin;  ?></td>
								<td><?php echo $city;  ?></td>
								<td><?php echo $state;  ?></td>
								<td><?php echo $income;  ?></td>
								<td><?php echo $education;  ?></td>
								<td><?php echo $occupation;  ?></td>
								<td><?php echo $amount;  ?></td>
								<td><?php echo $repay;  ?></td>
								<td><a href="loan_update.php?update=<?php echo $accno ?>"><button class="btn btn-danger">Update</button></a></td>
								<td><a href="loan_delete.php?del=<?php echo $accno ?>"><button class="btn btn-danger">Delete</button></a></td>
							</tr>  
  
<?php } ?>  
  
							</table>  
						</div> 
</div>						
					</div>
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


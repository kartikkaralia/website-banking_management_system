<?php  
session_start();  
  
if(!$_SESSION['contact'])  
{  
	echo "<script>window.open('members.php','_self')</script>";
}  
  
?> 

<!DOCTYPE HTML>

<html>
<head>
	<title>Fill your Details</title>
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
							<a class="nav-link" href="exit.php">Exit</a>
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
			<h2 class="heading-agileinfo">Fill Your Details<span>speeding Up The Process</span></h2>
			<span class="w3-line black"></span>
			<div class="pt-5">
				<div class="form_grid mt-5">
				
<?php  
		$dbcon=mysqli_connect("localhost","root","");  
		mysqli_select_db($dbcon,"bank");
		$contact=$_SESSION['contact'];
?>
				
					<form action="loanstep.php" method="post">
							<select required name="loantype" class="inp">
								<option value="">Choose Loan Type</option>
								<option value="housing">Housing Loan</option>
								<option value="automobile">Automobile Loan</option>
								<option value="education">Education Loan</option>
								<option value="personal">Personal Loan</option>
								<option value="property">Loan Against Property</option>
							</select>
							<hr>
							<select required name="salutation" class="inp">
								<option value="mr">Mr</option>
								<option value="mrs">Mrs</option>
								<option value="miss">Miss</option>
							</select>
							<input type="text" name="firstname" required placeholder="First Name" class="inp">
							<input type="text" name="middlename" placeholder="Middle Name" class="inp">							
							<input type="text" name="lastname" required placeholder="Last Name" class="inp"><br>
							<select required name="gender" class="inp">
								<option value="">Gender</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="others">Others</option>
							</select>
							<input type="email" name="email" placeholder="Email(Optional)" class="inp">
							<input type="text" name="contact" disabled placeholder="<?php echo $contact; ?>" class="inp">
							<input type="date" name="dob" required placeholder="DD-MM-YYYY" class="inp">

<select name="nationality" class="inp">
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian" selected>Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select>
							<select required name="marital" class="inp">
								<option value="">Marital Status</option>
								<option value="single">Single</option>
								<option value="married">Married</option>
								<option value="separated">Separated</option>
								<option value="divorced">Divorced</option>
								<option value="widowed">Widowed</option>
								<option value="prefer">Prefer not to answer</option>
							</select>
							<input type="text" name="aadhar" required pattern="[0-9]{12}" placeholder="Aadhar No." class="inp">
							<br>
							<select required name="salutation1" class="inp">
								<option value="mr">Mr</option>
								<option value="mrs">Mrs</option>
								<option value="miss">Miss</option>
							</select>
							<input type="text" required name="father" placeholder="Father's/Guardian's Name" class="inp">
							<hr>
							<textarea name="address" required placeholder="Address" class="inp" rows="1"></textarea>
							<br>
							<input type="text" required name="pin" pattern="[0-9]{6}" placeholder="Pincode" class="inp">
							<input type="text" required name="city" placeholder="City" class="inp">
							<input type="text" required name="state" placeholder="State" class="inp">
							<hr>
							<input type="text" name="income" required placeholder="Annual Income" class="inp">
							<input type="text" name="education" placeholder="Educational Qualification" class="inp">
							<input type="text" name="occupation" required placeholder="Occupation Type" class="inp">
							<hr>
							<input type="text" name="amount" required placeholder=" Amount of Loan required " class="inp">
							<input type="text" name="repay" required placeholder=" Repayment Period(in yrs) " class="inp">
							
							<br><br>
							
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
	
if(isset($_POST['submit']))  
{  
	
$loantype = $_POST['loantype'];
$salutation = $_POST['salutation'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$nationality = $_POST['nationality'];
$marital = $_POST['marital'];
$aadhar = $_POST['aadhar'];
$tin = $_POST['tin'];
$salutation1 = $_POST['salutation1'];
$father = $_POST['father'];
$address = $_POST['address'];
$pin = $_POST['pin'];
$city = $_POST['city'];
$state = $_POST['state'];
$income = $_POST['income'];
$education = $_POST['education'];
$occupation = $_POST['occupation'];
$amount = $_POST['amount'];
$repay = $_POST['repay'];

	
	$sqli = "UPDATE loan set loantype='$loantype', salutation='$salutation', firstname='$firstname', middlename='$middlename', lastname='$lastname', gender='$gender', email='$email', dob='$dob', nationality='$nationality', marital='$marital', aadhar='$aadhar', tin='$tin', salutation1='$salutation1', father='$father', address='$address',pin='$pin', city='$city', state='$state', income='$income', education='$education', occupation='$occupation', amount='$amount', repay='$repay' where contact='$contact';";

    if(mysqli_query($dbcon,$sqli))  
    {  
    
    echo '<script>alert("Details Submitted!")</script>';
	
	if (isset($_POST['loantype']))
	{
		if ($_POST['loantype'] == 'housing') { echo"<script>window.open('loanupload/housing.php','_self')</script>"; }
		elseif ($_POST['loantype'] == 'automobile') { echo"<script>window.open('loanupload/automobile.php','_self')</script>"; }
		elseif ($_POST['loantype'] == 'education') { echo"<script>window.open('loanupload/education.php','_self')</script>"; }
		elseif ($_POST['loantype'] == 'personal') { echo"<script>window.open('loanupload/personal.php','_self')</script>"; }
		elseif ($_POST['loantype'] == 'property') { echo"<script>window.open('loanupload/property.php','_self')</script>"; }
	}
	
	}
	else 
	{
		echo '<script>alert("Error!")</script>';
	}
	
}
	
?>

<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>SIGN UP</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-formhelpers.min.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link href="css/custom.css" rel="stylesheet">
		<link href="css/bootstrap-formhelpers.css" rel="stylesheet">
		
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap-formhelpers.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<!--<script src="js/bootstrap-formhelpers.js"></script>-->
		
		<meta charset="utf-8">
    
    <meta name="description" content="The first carpooling company in Albania." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="css/styles1.css" />
		
		
	</head>
	
<body>
<?php
			include 'navbar.php';
		?>

<section class="bg-primary" id="one">

<div class="container">    
			<div class="row">
				<div class="col-sm-12">
					<form class="form-horizontal" action="singUp.php" method="post">
						<fieldset>
							
							<!-- Form Name -->
							<h2><legend style="color:black">Sign Up</legend></h2>
							
							<!-- Text input-->
							<div class="col-md-6 col-md-offset-2">
								<div class="panel-body">
									<form class="form-horizontal" role="form">
									<!-- Firs Name-->
										<div class="form-group">
											<label for="firstName" style= "color:BLACK" class="col-sm-3 control-label">First Name</label>
											<div class="col-sm-9">
												<input name="firstname" type="text" id="firstName" placeholder="First Name" class="form-control" />
											</div>
										</div>
										<div class="form-group">
											<label for="firstName" style= "color:BLACK" class="col-sm-3 control-label">Last Name</label>
											<div class="col-sm-9">
												<input name="lastname" type="text" id="firstName" placeholder="Last Name" class="form-control" >
											</div>
										</div>
										<div class="form-group">
											<label for="email" style= "color:BLACK" class="col-sm-3 control-label">Email</label>
											<div class="col-sm-9">
												<input name="email" type="email" id="email" placeholder="Email" class="form-control" >
											</div>
										</div>
										<div class="form-group">
											<label for="password" style= "color:BLACK" class="col-sm-3 control-label">Password</label>
											<div class="col-sm-9">
												<input name="password" type="password" id="password" placeholder="Password" class="form-control" >
											</div>
										</div>
										<div class="form-group">
											<label for="passwordConfirm"  style= "color:BLACK" class="col-sm-3 control-label">Confirm Password</label>
											<div class="col-sm-9">
												<input type="password" name="confirmpassword" id="passwordConfirm" class="form-control" placeholder="Confirm Password"  >
												
											</div>
										</div>
										<div class="form-group">
											<label for="birthDate"  style= "color:BLACK" class="col-sm-3 control-label">Date of Birth</label>
											<div class="col-sm-9">
												<!-- <input name="geburtstag" type="date" id="birthDate" data-min="01/15/2013" data-max="today" class="form-control">
												--><div class="bfh-datepicker" data-format="d-m-y" data-date="today" data-max="today">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="state"  style= "color:BLACK" class="col-sm-3 control-label">State</label>
											<div class="col-sm-9">
												<select name="state"id="countries_states1" class="form-control bfh-countries" data-country="AL"></select>
												<!--<div class="bfh-selectbox bfh-countries" data-country="US" data-flags="true">
													</div>
													<div class="bfh-selectbox bfh-countries" data-country="US" data-flags="true">
													<input type="hidden" value="">
													<a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
													<span class="bfh-selectbox-option input-medium" data-option=""></span>
													<b class="caret"></b>
													</a>
													<div class="bfh-selectbox-options">
													<input type="text" class="bfh-selectbox-filter">
													<div role="listbox">
													<ul role="option">
													</ul>
													</div>
													</div>
												</div>-->
											</div>
										</div> 
										<div class="form-group">
											<label for="country"  style= "color:BLACK" class="col-sm-3 control-label">Country</label>
											<div class="col-sm-9">
												<select name="country" class="form-control bfh-states" data-country="countries_states1"></select>
											</div>
										</div>
										<div class="form-group">
											<label for="phone" style= "color:BLACK" class="col-sm-3 control-label">Handy</label>
											<div class="col-sm-9">
												
												<input name="phone" type="text" class="form-control bfh-phone" data-country="countries_states1">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-3">Gender</label>
											<div class="col-sm-6">
												<div class="row">
													<div class="col-sm-4">
														<label for="femaleRadio"class="radio-inline" style= "color:Black">
															<input name="gender" type="radio" id="femaleRadio" value="Female">Female
														</label>
													</div>
													<div class="col-sm-4">
														<label for="maleRadio" class="radio-inline" style= "color:Black">
															<input name="gender" type="radio" id="maleRadio" value="Male">Male
														</label>
													</div>

												</div>
											</div>
										</div> 
										<!--<div class="form-group">
											<div class="col-sm-9 col-sm-offset-3">
											<div class="checkbox">
											<label>
											<input type="checkbox">I accept <a href="#">terms</a>
											</label>
											</div>
											</div>
										</div>--> 
										<div class="form-group last">
											<div class="col-sm-offset-3 col-sm-9">
												<button name="singup"type="submit" class="btn btn-success btn-md">SingUp</button>
												<button type="reset" class="btn btn-danger">Reset</button>
											</div>
										</div>
										<div class="col-sm-offset-3 col-sm-9">
											<div style= "color:BLACK" class="form-group last">Already registered? <a href="login.php">Login here</a>
											</div>
										</div>
									</form> <!-- /form -->
								</div>
							</div> <!-- ./container -->
						</fieldset>
					</form>
				</div>
			</div>
			<?php 
				//require '../dbconnect.php';//verbindung zur DB 
				
				
				$Pass=$_POST['password'];
				$confirmpassword=$_POST['confirmpassword'];
				if ($Pass != $confirmpassword) {
					echo("Error... Passwords do not match");
					exit;
					
				}
				
				
				if(!empty($_POST)) 
				{ 
					// Ensure that the user fills out fields 
					if(empty($_POST['firstname'])) 
					{ die("Please enter your Firstname."); } 
					if(empty($_POST['lastname'])) 
					{ die("Please enter your Lastname."); } 
					if(empty($_POST['geburtstag'])) 
					{ die("Please enter your BirthDate."); } 
					if(empty($_POST['state'])) 
					{ die("Please enter your State."); } 
					if(empty($_POST['country'])) 
					{ die("Please enter your Country."); }
					if(empty($_POST['phone'])) 
					{ die("Please enter your Phone Number."); }
					if(empty($_POST['gender'])) 
					{ die("Please enter your Gender."); } 
					if(empty($_POST['password'])) 
					{ die("Please enter a password."); } 
					if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
					{ die("Invalid E-Mail Address"); } 
					
					// Check if the email is already taken
					$query = " SELECT * FROM Kunde WHERE Email = ?"; 
					/**$query_params = array( 
						':email' => $_POST['email'] 
					); */
					
					$email=$_POST['email'];
					try { 
						$stmt = $dbh->prepare($query); 
						$stmt->bindParam(1, $email);
						
						$result = $stmt->execute();
						//$result = $stmt->execute($query_params);
					} 
					catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage());} 
					$row = $stmt->fetch(); 
					if($row){ die("This email address is already registered"); } 
					
					// Add row to database 
					$query = " INSERT INTO Kunde ( Vorname,	Nachname, GeburtsTag, Password, Salt, Email, Staat, Country, Phone,	Gender ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) "; 
					
					// Security measures
					$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
					$password = hash('sha256', $_POST['password'] . $salt); 
					for($round = 0; $round < 65536; $round++){ $password = hash('sha256', $password . $salt); } 
					/**$query_params = array( 
						':firstname' => $_POST['firstname'], 
						':lastname' => $_POST['lastname'],
						':geburtstag' => $_POST['geburtstag'],
						':password' => $password, 
						':salt' => $salt, 
						':email' => $_POST['email'],
						':country' => $_POST['country'],
						':gender' => $_POST['gender']
					);*/
					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					$geburtstag=$_POST['geburtstag'];
					$pass=$password;
					$sa=$salt;
					$email=$_POST['email'];
					$state=$_POST['state'];
					$country=$_POST['country'];
					$phone=$_POST['phone'];
					
					$gender=$_POST['gender'];
					
					try {  
						$stmt = $dbh->prepare($query); 
						$stmt->bindParam(1, $firstname);
						$stmt->bindParam(2, $lastname);
						$stmt->bindParam(3, $geburtstag);
						$stmt->bindParam(4, $pass);
						$stmt->bindParam(5, $sa);
						$stmt->bindParam(6, $email);
						$stmt->bindParam(7, $state);
						$stmt->bindParam(8, $country);
						$stmt->bindParam(9, $phone);
						$stmt->bindParam(10, $gender);
						
						$result = $stmt->execute();
						
						//$result = $stmt->execute($query_params);
					} 
					catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
					if($result==true ){
						echo"<div class='panel panel-success'>";
						echo"<div class='panel-heading'>Inserted</div>";
						echo"</div>";
						
						}else{
						echo"<div class='panel panel-warning'>";
						echo"<div class='panel-heading'>User not inserted</div>";
						echo"</div>";
					} 
				} 
				
				
			?>
		</div>
		
		</section>

<?php
		include 'footer.php';
	?>

</body>
</html>

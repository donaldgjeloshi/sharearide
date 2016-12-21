<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>FIND A RIDE</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link href="css/custom.css" rel="stylesheet">
		
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		
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
					<form class="form-horizontal" action="findaride.php" method="post">
						<fieldset>
							
							<!-- Form Name -->
							<legend style= "color:Black" >Find a Ride</legend>

							<div class="form-group">
								<label style= "color:Black" class="control-label col-sm-3">Search</label>
								<div class="col-sm-5">
									<div class="row">
										<div class="col-sm-5">
											<label for="femaleRadio"class="radio-inline" style= "color:Black" >
												<h4>	<input name="search" type="radio" id="ride" value="Ride">Ride</h4>
											</label>
										</div>
										<div class="col-sm-5">
											<label for="Driver" class="radio-inline" style= "color:Black">
												<h4><input name="search" type="radio" id="Driver" value="Driver">Driver </h4>
											</label>
										</div>
										<div>
											<div class="form-group">
												<div class="col-sm-6">
													<input name="phone" type="text" class="form-control " placeholder="From..." data-country="countries_states1">
												</div>
											</div>

											<div class="form-group">
												<div class="col-sm-6">
													<input name="text" type="text" class="form-control " placeholder="To..." data-country="countries_states1">
												</div>
											</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
	</section>
<?php
		include 'footer.php';
	?>

</body>
</html>


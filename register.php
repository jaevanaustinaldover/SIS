<?php
	#Hello
	//:D

	$studentNo = "";
	$lastName = "";
	$firstName = "";
	$emailAdress = "";
	$password = "";
	$birthDate= null;


?>

<!DOCTYPE html>
<html>
	<head>
		<title>Student Registration</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/fixedbgimg.css" type=text/css rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="http://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/css/demo.css">
		<script src="js/modernizr.custom.63321.js"></script>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Student Registration</h1>
			<div class="col-lg-offset-3 col-lg-6">
				<div class="well">
					<form method="POST" action="welcome.php" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4 MyFont">
								Student ID
							</label>
							<div class="col-lg-8">
								<input type="text" name="sid" class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4 MyFont">
								Last Name
							</label>
							<div class="col-lg-8">
								<input type="text" name="ln" class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4 MyFont">
								First Name
							</label>
							<div class="col-lg-8">
								<input type="text" name="fn" class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4 MyFont">
								Email Address
							</label>
							<div class="col-lg-8">
								<input type="email" name="email" class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4 MyFont">
								Password
							</label>
							<div class="col-lg-8">
								<input type="password" name="pwd" class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4 MyFont">
								Birthdate
							</label>
							<div class="col-lg-8">
								<input type="date" name="bday" class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-offset-4 col-lg-8" MyFont>
								<button name="register" class="btn btn-success">Register</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.dropdown.js"></script>
	<script type="text/javascript">
		document.getElementById("myDIV").style.transition = "all 2s";
	</script>
	<script type="text/javascript">
			$(document).ready(function(){
    		$("#flip").click(function(){
        	$("#panel").slideToggle("slow");
    	});
	});
	</script>
	<script type="text/javascript">
		function run(interval, frames) {
    	var int = 1;
    
    	function func() {
        document.body.id = "b"+int;
        int++;
        if(int === frames) { int = 1; }
    	}
    
    	var swap = window.setInterval(func, interval);
		}

		run(4000, 6); //milliseconds, frames
	</script>
	<script type="text/javascript">
			
			$( function() {
				
				$( '#cd-dropdown' ).dropdown( {
					gutter : 5,
					delay : 100,
					random : true
				} );

			});

		</script>
	<script src="http://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js" type="text/javascript"></script>
	</body>
</html>
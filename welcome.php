<?php
	
	//if(isset($_POST['register']))
	//{
		//$studentNo = $_POST['sid'];
		//$lastName = $_POST['ln'];
		//$firstName = $_POST['fn'];
		//$emailAdress = $_POST['email'];
		//$password = $_POST['pwd'];
		//$birthDate= $_POST['bday'];

		/*echo "Welcome, " . $firstName . " " . $lastName . "!<br/>" .
		"Your ID number is " . $studentNo .
		". <br/>
		Your email address is " . $emailAdress .
		". <br/>
		Your password is " . $password .
		". <br/>
		Your birthday is " . $birthDate .
		". <br/><br/>
		The time is " . date('c');
	}
	else
	{
		//header('location: register.php');
	}*/
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/fixedbgimg.css" type=text/css rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="css/style6.css" />
		<link rel="stylesheet" type="text/css" href="http://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/css/demo.css">
		<script src="js/modernizr.custom.63321.js"></script>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		   <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Home Page
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active btn-margin-left iEffect"><a href="#">Home</a></li>
            <li class="btn-margin-left"><a href="#about">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="btn-margin-right iEffect"><a href="#contact">Contact</a></li>
            <li class="dropdown btn-margin-right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!--/ Finish Navbar -->

    <div class="col-lg-offset-1 col-lg-8">
    	<div class="blog-header">
        <h1 class="blog-title Main-Post">
        	<?php
        		if(isset($_POST['register']))
				{
					echo "Welcome " . $firstName = $_POST['fn'] . " " . $lastName = $_POST['ln'];
				}
				else
				{
					header('location: register.php');
				}
        	?>
        </h1>
        <p class="lead blog-description"><strong> 
        	<?php
        		date_default_timezone_set('Asia/Manila');
				$date = date('m/d/Y h:i:s a', time());
				echo "It is currently " . $date
        	?></strong>
        </p>
      </div>

      <div class="well well-visible">
      	<hr class="visible-xs">
      	<h4 class="MyFont">Student ID:
      		<?php
      		if(isset($_POST['register']))
				{
					echo $studentNo = $_POST['sid'];
				}
				else
				{
					header('location: register.php');
				}
      		?>
      	</h4>
      	<h4 class="MyFont">Email Address:
      		<?php
      		if(isset($_POST['register']))
				{
					echo $emailAdress = $_POST['email'];
				}
				else
				{
					header('location: register.php');
				}
      		?>
      	</h4>
      	<h4 id="flip" class="MyFont"><strong>Click to View Password </strong>
      		<h4 id="panel" class="MyFont">
      			<?php
      				if(isset($_POST['register']))
					{
						$password = $_POST['pwd'];
						echo $password;
					}
					else
					{
						header('location: register.php');
					}
      			?>
      		</p>
      	</h4>
      	<h4 class="MyFont">BirthDate: 
      		<?php
      			if(isset($_POST['register']))
				{
					echo $birthDate= $_POST['bday'];					
				}
				else
				{
					header('location: register.php');
				}
      		?>
      	</h4>
      </hr>
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

		run(3000, 4); //milliseconds, frames
	</script>
	<script src="http://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js" type="text/javascript"></script>
	</body>
</html>
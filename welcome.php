<?php
	
	if(isset($_POST['register']))
	{
		$studentNo = $_POST['sid'];
		$lastName = $_POST['ln'];
		$firstName = $_POST['fn'];
		$emailAdress = $_POST['email'];
		$password = $_POST['pwd'];
		$birthDate= $_POST['bday'];

		echo "Welcome, " . $firstName . " " . $lastName . "!<br/>" .
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
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/fixedbgimg.css" type=text/css rel="stylesheet" />
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
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active btn-margin-left"><a href="#">Home</a></li>
            <li class="btn-margin-left"><a href="#about">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="btn-margin-right"><a href="#contact">Contact</a></li>
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
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
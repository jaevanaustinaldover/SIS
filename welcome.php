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
		header('location: register.php');
	}


?>
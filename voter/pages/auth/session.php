<?php
    if(!isset($_SESSION['sUser']))
	{
		//Redirect to login page
		header("Location: http://localhost/poll/voter/pages/auth/login.php");
	}
?>
<?php
	session_start();
	
	if(!isset($_SESSION['home']) || !$_SESSION['home'])
	{
		header('location: home.php');
		die();
	}
	
	unset($_SESSION['home']);
	
	header('location: home.php');
	
	
	